@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">How did you sleep last night?</h3>
                </div>

                <div class="panel-body">
                    <form method="post" action="/survey">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <label for="sleepTime">I slept for...</label>
                            <select class="form-control" id="sleepTime" name="question_type_sleep_time" required aria-required="true">
                                <option selected disabled hidden value="">----</option>
                                <option value="answer-sleep-time-less-4">less than 4 hours</option>
                                <option value="answer-sleep-time-4-to-6">between 4 and 6 hours</option>
                                <option value="answer-sleep-time-6-to-8">between 6 and 8 hours</option>
                                <option value="answer-sleep-time-8-plus">more than 8 hours</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sleepQuality">I would say my sleep quality was...</label>
                            <select class="form-control" id="sleepQuality" name="question_type_sleep_quality" required aria-required="true">
                                <option selected disabled hidden value="">----</option>
                                <option value="answer-sleep-quality-excellent">excellent</option>
                                <option value="answer-sleep-quality-good">good</option>
                                <option value="answer-sleep-quality-fine">fine</option>
                                <option value="answer-sleep-quality-bad">bad</option>
                                <option value="answer-sleep-quality-terrible">terrible</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="difficultyWakingUp">Waking up was...</label>
                            <select class="form-control" id="difficultyWakingUp" name="question_type_difficulty_waking_up" required aria-required="true">
                                <option selected disabled hidden value="">----</option>
                                <option value="answer-difficulty-waking-up-very-easy">very easy</option>
                                <option value="answer-difficulty-waking-up-easy">easy</option>
                                <option value="answer-difficulty-waking-up-fine">fine</option>
                                <option value="answer-difficulty-waking-up-difficult">difficult</option>
                                <option value="answer-difficulty-waking-up-very-difficult">very difficult</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
