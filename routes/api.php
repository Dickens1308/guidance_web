<?php

use App\Http\Controllers\api\ApiController;
use App\Http\Controllers\api\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/v1/auth/'], function () {
    Route::post('register', [AuthController::class, 'registerApi']);
    Route::post('login', [AuthController::class, 'loginApi']);
    Route::post('reset/password', [AuthController::class, 'resetApi']);
});


Route::prefix('/v1/language/')->middleware('auth:sanctum')->group(function () {
    Route::get('', [ApiController::class, 'language']);
    Route::get('courses/{languageID}', [ApiController::class, 'index']);
    Route::post('question/answer', [ApiController::class, 'save']);
    Route::get('get_questions/{courseID}', [ApiController::class, 'getQuestionByCourseID']);
    Route::get('get_results/{courseID}', [ApiController::class, 'getResultsByCourseID']);
});


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post(' ', [AuthController::class, 'logoutApi']);
    Route::post('/v1/child/register', [AuthController::class, 'childRegister']);
});
