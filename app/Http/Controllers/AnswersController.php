<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;

class AnswersController extends Controller {
    public function storeMany() {
        $request = Request::capture();

        $answers = [];
        foreach (Question::getQuestionTypes() as $question_type) {
            $answer = request($question_type, null);

            if ($answer) {
                $answers[$question_type] = Answer::create([
                    'answer' => $answer,
                    'question_type' => $question_type,
                ]);
            }
        }

        return view('show-answers', $answers);
    }
}
