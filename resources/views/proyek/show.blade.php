@extends('layouts.master')

@section('content')
    <div class="ml-2 mt-2">
        <h4>
            {{ $question->title }}
        </h4>
        <p>
            {{ $question->content }}
        </p>
    </div>
@endsection
