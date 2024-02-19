@extends('layouts.app')

@section('title' , 'List of tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}" class="link">Create
            task</a>
    </nav>

    @forelse($tasks as $task)
        <p><span>{{$task->id}}</span> - <span><a href={{route('tasks.show', ['task' => $task->id])}}
                    @class(['font-bold', 'line-through text-gray-400' => $task->completed])>{{$task->title}}</a></span></p>
    @empty
        <p>There are no tasks!</p>
    @endforelse

    @if($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif

@endsection
