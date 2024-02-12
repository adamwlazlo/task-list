@extends('layouts.app')

@section('title' , 'List of tasks')

@section('content')

    @forelse($tasks as $task)
        <p><span>{{$task->id}}</span> - <span><a href={{route('tasks.show', ['id' => $task->id])}}> {{$task->title}}</a></span></p>
    @empty
        <p>brak zadań</p>
    @endforelse

@endsection
