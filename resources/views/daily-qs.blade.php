@section('content')
    <h1 class="text-center">
        Hey (user?) -- quick question for you
    </h1>

    <form method="post" action="/daily-qs">
        <h3>How did you sleep last night?</h3>
        <div class="form-group">
            {{ csrf_field() }}
            <label for="sleepTime">I slept for...</label>
            <select class="form-control" id="sleepTime">
                <option selected disabled hidden>----</option>
                <option>less than 4 hours</option>
                <option>between 4 and 6 hours</option>
                <option>between 6 and 8 hours</option>
                <option>more than 8 hours</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sleepQuality">I would say my sleep quality was...</label>
            <select class="form-control" id="sleepQuality">
                <option selected disabled hidden>----</option>
                <option>excellent</option>
                <option>good</option>
                <option>fine</option>
                <option>bad</option>
                <option>terrible</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sleepWakingUp">Waking up was...</label>
            <select class="form-control" id="sleepWakingUp">
                <option selected disabled hidden>----</option>
                <option>very easy</option>
                <option>easy</option>
                <option>fine</option>
                <option>difficult</option>
                <option>very difficult</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@extends('partials/layout')
