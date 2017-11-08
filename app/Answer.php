<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * User answers to our predefined questions.
 */
class Answer extends Model {

    // Allow these fields to be filled en masse
    protected $fillable = ['answer','question_type'];

    /**
     * In a real application, this relationship (and predefined answers)
     * should be stored in the database.
     *
     * @param string $question_type
     * @return string[]
     */
    public static function getValidAnswersForQuestionType(string $question_type): array {
        switch ($question_type) {
            case Question::TYPE_SLEEP_TIME:
                return [
                    'answer-sleep-time-less-4',
                    'answer-sleep-time-4-to-6',
                    'answer-sleep-time-6-to-8',
                    'answer-sleep-time-8-plus'
                ];
            case Question::TYPE_SLEEP_QUALITY:
                return [
                    'answer-sleep-quality-excellent',
                    'answer-sleep-quality-good',
                    'answer-sleep-quality-fine',
                    'answer-sleep-quality-bad',
                    'answer-sleep-quality-terrible',
                ];
            case Question::TYPE_DIFFICULTY_WAKING_UP:
                return [
                    'answer-difficulty-waking-up-very-easy',
                    'answer-difficulty-waking-up-easy',
                    'answer-difficulty-waking-up-fine',
                    'answer-difficulty-waking-up-difficult',
                    'answer-difficulty-waking-up-very-difficult',
                ];
            default:
                return [];
        }
    }
}
