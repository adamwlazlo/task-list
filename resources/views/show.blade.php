@extends('layouts.app')

@section('title' , $task->title)

@section('styles')
    @if(session()->has('success'))
    <style>
        .success-message {
            color: green;
            font-size: 1.1rem;
        }
    </style>
    @endif
@endsection

@section('content')

    <p>{{ $task->description }}</p>
    @if(isset($task->long_description))
        <p>{{ $task->long_description }}</p>
    @endif

@endsection
