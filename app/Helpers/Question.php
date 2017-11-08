<?php

class Question {
    const TYPE_SLEEP_TIME = 'question-type-sleep-time';
    const TYPE_SLEEP_QUALITY = 'question-type-sleep-quality';
    const TYPE_DIFFICULTY_WAKING_UP = 'question-type-difficulty-waking-up';

    public static function getQuestionTypes() {
        return [
            self::TYPE_SLEEP_TIME,
            self::TYPE_SLEEP_QUALITY,
            self::TYPE_DIFFICULTY_WAKING_UP,
        ];
    }
}