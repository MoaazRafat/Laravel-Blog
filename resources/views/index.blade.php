@extends('layouts.app')

@section('content')

<!-- HERO -->
<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="suse-head text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome To My Blog</h1>
    <a href="/blog" class="suse-btn text-gray-700 bg-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
</div>

<!-- How To Be An Expert -->
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">

    <div class="mx-2 md:mx-0">
        <img class="sm:rounded-lg" src="https://picsum.photos/id/432/960/620" alt="">
    </div>

    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-4xl uppercase">How To Be An Expert In 2025</h2>
        <p class="font-bold text-gray-600 text-xl pt-2">
            You Can Find A List Of All Programming Languages Here
        </p>
        <p class="py-4 text-gray-500 text-sm leading-5">
            Twisting and turning, spinning and shouting, hissing and roaring, fearing and jeering, stomping and yelling, running and jumping, peeling and dicing, cooking and weighing, costing and pricing, eating and drinking, all in a day’s work.
        </p>
        <a href="http://" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">Read More</a>
    </div>


</div>

<!-- Blog Categories -->
<div class="text-center p-15 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold text-2xl py-2">UX Design Thinking</div>
        <div class="font-bold text-2xl py-2">Programming Languages</div>
        <div class="font-bold text-2xl py-2">Graphic Design</div>
        <div class="font-bold text-2xl py-2">Front-End Development</div>
    </div>
</div>

<!-- Recent Posts -->
<div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
    <p class="text-gray-400 leading-6 px-10">PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.
        PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code—which may be any type of data, such as generated HTML or binary image data—would form the whole or part of an HTTP response.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">
            <ul class="md:flex text-xs gap-2">
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition dyration-300"><a href="http://">PHP</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition dyration-300"><a href="http://">Programming</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition dyration-300"><a href="http://">Languages</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition dyration-300"><a href="http://">Backend</a></li>
            </ul>
            <h3 class="text-l py-10 leading-6">
                PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.The PHP reference implementation is now produced by the PHP Group. PHP was originally an abbreviation of Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.
                PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code—which may be any type of data, such as generated HTML or binary image data—would form the whole or part of an HTTP response.
            </h3>
            <a href="http://" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">Read More</a>
        </div>
    </div>
    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/551/960/620" alt="">
    </div>
</div>




@endsection
