

@extends('layouts.app')

@section('content')
    <h2>Quiz Result</h2>
    <p>score: {{ $score }} / {{ count($quiz->questions) }}</p>

@endsection
