@section('content')
    <h1 class="text-center">
        Hey (user?) -- quick question for you
    </h1>

    <form method="post" action="/daily-qs">
        <h3>How did you sleep last night?</h3>
        <div class="form-group">
            {{ csrf_field() }}
            <label for="sleepTime">I slept for...</label>
            <select class="form-control" id="sleepTime" name="question_type_sleep_time">
                <option selected disabled hidden>----</option>
                <option value="answer-sleep-time-less-4">less than 4 hours</option>
                <option value="answer-sleep-time-4-to-6">between 4 and 6 hours</option>
                <option value="answer-sleep-time-6-to-8">between 6 and 8 hours</option>
                <option value="answer-sleep-time-8-plus">more than 8 hours</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sleepQuality">I would say my sleep quality was...</label>
            <select class="form-control" id="sleepQuality" name="question_type_sleep_quality">
                <option selected disabled hidden>----</option>
                <option value="answer-sleep-quality-excellent">excellent</option>
                <option value="answer-sleep-quality-good">good</option>
                <option value="answer-sleep-quality-fine">fine</option>
                <option value="answer-sleep-quality-bad">bad</option>
                <option value="answer-sleep-quality-terrible">terrible</option>
            </select>
        </div>

        <div class="form-group">
            <label for="difficultyWakingUp">Waking up was...</label>
            <select class="form-control" id="difficultyWakingUp" name="question_type_difficulty_waking_up">
                <option selected disabled hidden>----</option>
                <option value="answer-difficulty-waking-up-very-easy">very easy</option>
                <option value="answer-difficulty-waking-up-easy">easy</option>
                <option value="answer-difficulty-waking-up-fine">fine</option>
                <option value="answer-difficulty-waking-up-difficult">difficult</option>
                <option value="answer-difficulty-waking-up-very-difficult">very difficult</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@extends('partials/layout')
