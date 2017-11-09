<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswersController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * When a user submits their "daily-qs", store their answers, then
     * redirect to a page which will show their answers.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function storeMany() {
        $answers = [];
        foreach (Question::getQuestionTypes() as $question_type) {
            $answer = request($question_type, null);

            if ($answer) {
                $answers[$question_type] = Answer::create([
                    'answer' => $answer,
                    'question_type' => $question_type,
                    'user' => Auth::id(),
                ]);
            }
        }

        return view('show-answers', $answers);
    }
}
