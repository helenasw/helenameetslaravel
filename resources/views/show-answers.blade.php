@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Your answers for 'How did you sleep last night?'</h3>
            </div>

            <div class="panel-body">
                @if (isset($question_type_sleep_time))
                    <p>
                        You slept <u>{{ $question_type_sleep_time->formattedAnswer() }}</u>.
                    </p>
                @endif
                @if (isset($question_type_sleep_quality))
                    <p>
                        You said that your sleep quality was <u>{{ $question_type_sleep_quality->formattedAnswer() }}</u>.
                    </p>
                @endif
                @if (isset($question_type_difficulty_waking_up))
                    <p>
                        You said that waking up was <u>{{ $question_type_difficulty_waking_up->formattedAnswer() }}</u>.
                    </p>
                @endif
            </div>
        </div>
    </div>

@endsection
