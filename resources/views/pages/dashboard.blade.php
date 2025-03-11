@extends('app')
@section('content')
    @include('components.topnav', ['title' => 'Dashboard'])
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div id="defaultTabContent">
                    <div class="p-4 md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <h2 class="mb-3 text-3xl text-center font-extrabold tracking-tight text-gray-900 dark:text-white">
                            All Tasks</h2>

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
                            <a href="/task/{{$task->id}}" class="px-4 inline-flex items-center font-medium text-yellow-600 hover:text-yellow-800 dark:text-yellow-500 dark:hover:text-yellow-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                  </svg>
                                Edit Task
                                </a>
                            <form action="{{ route('task.complete', $task->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="px-4 inline-flex items-center font-medium text-green-600 hover:text-green-800 dark:text-green-500 dark:hover:text-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                      </svg>
                                    Complete Task
                                </button>
                            </form>
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
