@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hey, {{ $user_name }}. Have you filled out your daily q's yet?
                    <a href="/daily-qs" class="btn btn-default">Not yet</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
