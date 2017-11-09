<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * User answers to our predefined questions.
 */
class Answer extends Model {

    // Allow these fields to be filled en masse
    protected $fillable = ['answer','question_type', 'user_id'];

    /**
     * In a real application, this relationship (and predefined answers)
     * should be stored in the database. Just writing this out for brevity.
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
                    'answer-sleep-time-8-plus',
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

    /**
     * In reality, this would be stored as part of defined answers.
     *
     * @return string The human friendly version of $this->answer
     */
    public function formattedAnswer(): string {
        switch ($this->answer) {
            case 'answer-sleep-time-less-4':
                return 'less than 4 hours';
            case 'answer-sleep-time-4-to-6':
                return 'between 4 and 6 hours';
            case 'answer-sleep-time-6-to-8':
                return 'between 6 and 8 hours';
            case 'answer-sleep-time-8-plus':
                return 'more than 8 hours';
            case 'answer-sleep-quality-excellent':
                return 'excellent';
            case 'answer-sleep-quality-good':
                return 'good';
            case 'answer-sleep-quality-fine':
                return 'fine';
            case 'answer-sleep-quality-bad':
                return 'bad';
            case 'answer-sleep-quality-terrible':
                return 'terrible';
            case 'answer-difficulty-waking-up-very-easy':
                return 'very easy';
            case 'answer-difficulty-waking-up-easy':
                return 'easy';
            case 'answer-difficulty-waking-up-fine':
                return 'fine';
            case 'answer-difficulty-waking-up-difficult':
                return 'difficult';
            case 'answer-difficulty-waking-up-very-difficult':
                return 'very difficult';
            default:
                return '';
        }
    }
}
