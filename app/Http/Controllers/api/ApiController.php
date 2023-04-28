<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Language;
use App\Models\Progress;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function language(){
        $language = Language::select('id', 'title')->get();

        return response()->json(array('languages' => $language));
    }

    public function index(Request $request, $languageID): JsonResponse
    {
        $userID = auth()->user()->id;
        $language = Language::select('id', 'title')->get();
        $courses = Course::where('language_id', $languageID)->withCount('question')
            // ->with('videos:course_id,title,location')
            // ->withCount('videos')
            ->withCount(['progressCount' => function ($query) use ($userID) {
                return $query->where('user_id', $userID);
            }])->get();

        return response()->json(array('languages' => $language, 'courses' => $courses));
    }

    public function getQuestionByCourseID(Request $request, $courseID): JsonResponse
    {
        $question = Question::where('course_id', $courseID)
            ->select('id', 'title', 'choice_one', 'choice_two', 'choice_three', 'correct_answer', 'learning_title',
            'learning_desc', 'code_image_url', 'course_id')
            ->with(
                [
                    'progress' => function ($q) use ($request) {
                        $q->where('user_id', $request->user()->id)->select('id', 'select_answer', 'user_id', 'question_id');
                    }
                ]
            )->get();

        return response()->json(array('questions' => $question));
    }

    public function getResultsByCourseID(Request $request, $courseID): JsonResponse
    {
        $question = Question::where('course_id', $courseID)
            ->with(
                [
                    'progress' => function ($q) use ($request) {
                        $q->where('user_id', $request->user()->id);
                    }
                ]
            )->get();


        $correctAnswer = 0;
        $incorrectAnswer = 0;


        foreach ($question as $q) {
            if ($q->correct_answer == $q->progress[0]->select_answer) {
                $correctAnswer++;
            } else $incorrectAnswer++;
        }

        return response()->json(array('correct' => $correctAnswer, 'incorrect' => $incorrectAnswer,
            'total' => count($question),
            'questions' => $question));
    }

    public function save(Request $request): JsonResponse
    {
        $request->validate([
            'question_id' => 'required|numeric|exists:questions,id',
            'choice_selected' => 'required|string',
        ]);

        $checkIfExist = Progress::where('question_id', $request->question_id)
            ->where('user_id', $request->user()->id)->exists();


        if (!$checkIfExist) {
            $progress = Progress::create([
                'user_id' => $request->user()->id,
                'question_id' => $request->question_id,
                'select_answer' => $request->choice_selected,
            ]);

            if ($progress) {
                return response()->json(array('progress' => $progress, 'message' => 'Successful saved the answer'));
            } else {
                return response()->json(array('message' => 'Failed to save the answer'));
            }
        } else {
            return response()->json(array('message' => 'Already answered the question', 'error' => $checkIfExist));
        }
    }
}
