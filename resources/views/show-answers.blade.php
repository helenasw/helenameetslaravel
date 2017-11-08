@section('content')
    <h1 class="text-center">
        Hey (user?) -- quick question for you
    </h1>

    <div class="row">
        <h3>How did you sleep last night?</h3>
    </div>
    <div class="row">
        You slept for {{ $question_type_sleep_time->answer }}.
    </div>
    <div class="row">
        You said that your sleep quality was {{ $question_type_sleep_quality->answer }}.
    </div>
    <div class="row">
        You said that waking up was {{ $question_type_difficulty_waking_up->answer }}.
    </div>
@endsection

@extends('partials/layout')
