<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * In a real application, all questions would go into the database. For the purposes
 * of this exercise, I'm just using this class to get question types to
 * use in code.
 */
class Question extends Model {
    const TYPE_SLEEP_TIME = 'question_type_sleep_time';
    const TYPE_SLEEP_QUALITY = 'question_type_sleep_quality';
    const TYPE_DIFFICULTY_WAKING_UP = 'question_type_difficulty_waking_up';

    public static function getQuestionTypes() {
        return [
            self::TYPE_SLEEP_TIME,
            self::TYPE_SLEEP_QUALITY,
            self::TYPE_DIFFICULTY_WAKING_UP,
        ];
    }
}
