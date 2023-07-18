@extends('layouts.app')

@section('content')

    {{-- HERO --}}
    <div class="hero-bg-image flex flex-col items-center justify-center text-light">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">Welcom to my blog</h1>
        <a class="bg-gray-100 text-gray-700 py-3 px-4 rounded-lg hover:bg-gray-200 hover:text-gray-900 transition duration-300 font-bold uppercase" href="/">Start Reading</a>
    </div>

    <div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt=""> 
        </div>

        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase">HOW TO BE AN EXPERT IN 2023!</h2>
            <p class="font-bold text-gray-600 text-xl pt-2">You can find here all about programming languages.</p>
            <p class="py-4 text-gray-500 text-sm leading-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae illum ipsa beatae odit architecto consequatur in inventore! Maxime sunt ex quaerat recusandae in rerum, mollitia architecto placeat est reprehenderit dignissimos.</p>
            <a href="/" class="bg-gray-700 text-gray-100 py-3 px-4 rounded-lg text-l place-self-start hover:bg-gray-200 hover:text-gray-900 transition duration-300 font-bold">Read More</a>
        </div>
    </div>

    <div class="text-center p-14 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>

        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-2xl py-2">UX Design Thinking</div>
            <div class="font-bold text-2xl py-2">Programming Languages</div>
            <div class="font-bold text-2xl py-2">Graphic Design</div>
            <div class="font-bold text-2xl py-2">Front-End Development</div>
        </div>
    </div>

    <div class="container mx-auto text-center py-14">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6 px-10">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos laboriosam, amet numquam magni fugit odio cupiditate iusto sint, ipsa molestias doloribus praesentium voluptates animi? Repudiandae culpa illo iure exercitationem autem!
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-14 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <a href="/"><li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">PHP</li></a>
                    <a href="/"><li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">Programming</li></a>
                    <a href="/"><li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">Languages</li></a>
                    <a href="/"><li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">Backend</li></a>
                </ul>

                <h3 class="text-l py-10 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, explicabo accusamus molestias odit quam rerum, sunt repudiandae natus at ea ipsa cupiditate sed hic odio numquam voluptas praesentium nihil in.</h3>
                <a href="/" class=" border-2 text-gray-100 py-2 px-3 rounded-lg uppercase text-l inline-block hover:bg-yellow-600 hover:text-gray-200 transition duration-300">Read More</a>

            </div>
        </div>

        <div class="flex">
            <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
        </div>
    </div>

@endsection