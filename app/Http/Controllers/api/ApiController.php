<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Language;
use App\Models\Progress;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function language()
    {
        $language = Language::select('id', 'title')->get();

        return response()->json(array('languages' => $language));
    }

    public function index(Request $request, $languageID): JsonResponse
    {
        $language = Language::select('id', 'title')->get();

        return response()->json(array('languages' => $language));
    }

    public function getCourseByLangId(Request $request, $languageID): JsonResponse
    {
        $courses = Course::where("language_id", $languageID)
            ->withCount('topics')
            ->withCount([
                'progress' => function ($q) use ($request) {
                    $q->whereHas('questions.progress', function ($query) use ($request) {
                        $query->where('user_id', $request->user()->id);
                    });
                }
            ])
            ->get();


        return response()->json(array('courses' => $courses));
    }

    public function getTopicByCourseId(Request $request, $courseID): JsonResponse
    {
        $courses = Topic::where("course_id", $courseID)
            ->withCount(['questions'])
            ->withCount(
                [
                    'progress' => function ($q) use ($request) {
                        $q->where('user_id', $request->user()->id);
                    }
                ]
            )
            ->get();

        return response()->json(array('topics' => $courses));
    }

    public function getQuestionByTopicID(Request $request, $topicID): JsonResponse
    {
        $question = Question::where('topic_id', $topicID)
            ->with(
                [
                    'progress' => function ($q) use ($request) {
                        $q->where('user_id', $request->user()->id);
                    }
                ]
            )->get();

        return response()->json(array('questions' => $question));
    }

    public function getResultsByTopicId(Request $request, $topicID): JsonResponse
    {
        $question = Question::where('course_id', $topicID)
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
            } else
                $incorrectAnswer++;
        }

        return response()->json(
            array(
                'correct' => $correctAnswer,
                'incorrect' => $incorrectAnswer,
                'total' => count($question),
                'questions' => $question
            )
        );
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