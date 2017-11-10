<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SurveyTest extends TestCase {

    /**
     * @dataProvider submitSurvey_testCases
     *
     * @param string[] $request_data
     * @param string[] $expected_view_data
     */
    public function testSubmitSurvey($request_data, $expected_view_data) {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->post('/survey', $request_data);

        $response->assertSuccessful();
        $response->assertViewHasAll($expected_view_data);
        $response->assertViewIs('show-answers');
    }

    public function submitSurvey_testCases() {
        return [
            'no answers submitted' => [
                'request_data' => [],
                'expected_view_data' => [],
            ],
            'some answers submitted' => [
                'request_data' => [
                    'question_type_sleep_time' => 'dummy-answer',
                    'question_type_difficulty_waking_up' => 'whatever',
                ],
                'expected_view_data' => [
                    'question_type_sleep_time',
                    'question_type_difficulty_waking_up',
                ],
            ],
            'all answers submitted' => [
                'request_data' => [
                    'question_type_sleep_time' => 'dummy-answer',
                    'question_type_sleep_quality' => 'fake-answer',
                    'question_type_difficulty_waking_up' => 'whatever',
                ],
                'expected_view_data' => [
                    'question_type_sleep_time',
                    'question_type_sleep_quality',
                    'question_type_difficulty_waking_up',
                ],
            ],
            'answers to invalid questions submitted' => [
                'request_data' => [
                    'invalid_question_type' => 'dummy-answer',
                    'still_bad' => 'fake-answer',
                ],
                'expected_view_data' => [],
            ],
            'mix of valid and invalid answers submitted' => [
                'request_data' => [
                    'question_type_sleep_time' => 'dummy-answer',
                    'invalid_question_type' => 'fake-answer',
                ],
                'expected_view_data' => [
                    'question_type_sleep_time',
                ],
            ],
        ];
    }
}
