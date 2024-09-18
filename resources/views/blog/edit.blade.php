@extends('layouts.app')


@section('content')

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">Edit Post</h1>
</div>
<div class="container m-auto  pt-15 pb-5">
    <form action="{{route('blog.update',$post->slug)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="title" id="title"
                class="block w-full h-20
                       text-4xl text-gray-900
                       bg-transparent border-0 px-2 border-b-2 border-gray-300
                       appearance-none dark:text-white dark:border-gray-600
                       dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600"
                value="{{$post->title}}" required />
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <textarea name="description" id="description"
                class="block w-full h-20
                  text-ll text-gray-900
                  bg-transparent border-0 px-2 border-b-2 border-gray-300
                  appearance-none dark:text-white dark:border-gray-600
                  dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600"
                required>{{$post->description}}</textarea>
        </div>
        <div class="flex w-full">
            <label for="image" class="bg-gray-200 hover:bg-gray-700 text-gray-700 hover:text-gray-200 transition duration-300 cursor-pointer p-5 rounded-lg font-bold ">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p>Select an image to upload</p>
                </div>
                <input id="image" type="file" name="image" class="hidden"/>
            </label>
        </div>
        <button type="submit" class="bg-green-700 hover:bg-green-200 text-gray-200 hover:text-gray-700 transition duration-300 cursor-pointer p-5 mt-5 rounded-lg font-bold">Update Post</button>
    </form>
</div>

@endsection
