@extends('app')
@section('content')
    @include('components.topnav', ['title' => 'Dashboard'])
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div id="defaultTabContent">
                    <div class="p-4 md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <h2 class="mb-3 text-3xl text-center font-extrabold tracking-tight text-gray-900 dark:text-white">
                            Completed Tasks</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($tasks->isEmpty())
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div id="defaultTabContent">
                    <div class="p-4 md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <h2 class="mb-3 text-3xl text-center font-extrabold tracking-tight text-gray-900 dark:text-white">
                            No Tasks Found.</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
    @foreach ($tasks as $task)
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div id="defaultTabContent">
                    <div class="p-4 md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <h2 class="mb-3 text-3xl text-center font-extrabold tracking-tight text-gray-900 dark:text-white">
                            {{ $task->title}}</h2>
                        <p class="mb-3 text-gray-500 dark:text-gray-400">{{$task->body}}</p>
                        <p class="mb-3 text-gray-500 dark:text-gray-400">{{$task->created_at->diffForHumans()}}</p>
                        <div class="flex space-x-4 mx-auto justify-center">
                            <form action="{{ route('task.delete', $task->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="px-4 inline-flex items-center font-medium text-red-600 hover:text-red-800 dark:text-red-500 dark:hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                      </svg>
                                    Delete Task
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach


@endsection
