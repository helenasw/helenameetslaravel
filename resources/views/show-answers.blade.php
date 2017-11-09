@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Your answers for 'How did you sleep last night?'</h3>
            </div>

            <div class="panel-body">
                <p>
                    You slept {{ $question_type_sleep_time->formattedAnswer() }}.
                </p>
                <p>
                    You said that your sleep quality was {{ $question_type_sleep_quality->formattedAnswer() }}.
                </p>
                <p>
                    You said that waking up was {{ $question_type_difficulty_waking_up->formattedAnswer() }}.
                </p>
            </div>
        </div>
    </div>

@endsection
