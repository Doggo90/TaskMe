@extends('app')
@section('content')
@include('components.topnav', ['title' => 'Create Task'])
<div class="flex justify-center">
    <div class="w-full max-w-2xl">
        <form action="{{ route('task.store') }}" method="POST">
            @method('POST')
            @csrf
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div id="defaultTabContent">
                <div class="p-4 md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <h2 class="mb-3 text-3xl text-center font-extrabold tracking-tight text-gray-900 dark:text-white">
                        Create Task</h2>
                        <input type="text" name="title" id="title" class="w-full px-3 py-2 mb-3 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300 focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Ex. Walk the dog." required>
                        <textarea name="body" id="body" class="w-full px-3 py-2 mb-3 border border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300 focus:outline-none focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Ex. Talk the dog out for about 30 mins until they finish their things." required></textarea>

                    <div class="flex space-x-4 mx-auto justify-center">
                        <button type="submit" class="px-4 inline-flex items-center font-medium text-green-600 hover:text-green-800 dark:text-green-500 dark:hover:text-green-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                              </svg>

                            Create Task
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>
    </div>
</div>
@endsection
