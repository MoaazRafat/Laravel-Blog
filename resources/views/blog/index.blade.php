@extends('layouts.app')

@section('content')

@if (session()->has('message'))
<div class="bg-indigo-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
        <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}}</span>
    </div>
</div>
@endif
<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">All Posts</h1>
</div>


@if (Auth::check())
<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
    <a href="{{route('blog.create')}}" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Create New Post</a>
</div>
@endif


@foreach ($posts as $post)

<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-500">
    <div class="flex">
        <img class="object-cover" src="{{$post->image_path}}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post->title}}</h2>
        <div>
            By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
            on: <span class="text-gray-500 italic">{{date('m-d-Y',strtotime($post->updated_at))}}</span>
            <p class="text-gray-700 text-l py-8 leading-6">{{$post->description}}</p>
            <a href="{{route('blog.show',$post->slug)}}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </div>
    </div>
</div>

@endforeach

<!--
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-500">
    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/900/960/620" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{}}</h2>
        <div>
            By: <span class="text-gray-500 italic">Moaaz Rafat</span>
            <p class="text-gray-700 text-l py-8 leading-6">
                Laravel is an open-source PHP framework, which is robust and easy to understand. It follows a model-view-controller design pattern. Laravel reuses the existing components of different frameworks which helps in creating a web application. The web application thus designed is more structured and pragmatic.
            </p>
            <a href="http://" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
        </div>
    </div>
</div> -->

@endsection
