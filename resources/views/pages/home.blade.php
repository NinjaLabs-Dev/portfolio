@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <div class="hero grid grid-cols-12 h-[50vh] my-4">
        <div class="col-span-12 2xl:col-span-5 2xl:col-start-2 flex flex-col justify-center items-center 2xl:items-start">
            <h1 class="text-6xl font-bold mb-2">I'm Ninja 👋</h1>
            <p class="text-2xl">I break <span class="underline decoration-red-500">things</span>, then fix them.</p>
        </div>
        <div class="col-span-12 2xl:col-span-5 flex flex-col justify-center items-center 2xl:items-end">
            @if($recentProject)
                <div class="relative rounded-xl shadow-xl overflow-hidden">
                    <img src="{{ asset('/storage/' . $recentProject->snapshot) }}" alt="{{ $recentProject->name }} Showase Image" class="h-[35vh] min-w-[60vh]">

                    <div class="info absolute bottom-0 left-0 bg-zinc-900 w-full py-4 px-4 flex justify-between items-center">
                        <div class="flex flex-col">
                            <p class="uppercase opacity-80">Recent Project</p>
                            <h3 class="text-lg font-bold">{{ $recentProject->name }}</h3>
                            <p>{{ $recentProject->overview }}</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="min-h-[30vh] flex items-center justify-center">
        <div class="grid grid-cols-12 gap-4">
            <a href="{{ route('about') }}" class="2xl:col-span-4 2xl:col-start-2 col-span-12 flex justify-between group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222] hover:border-[#333] transition cursor-pointer">
                <div class="flex flex-col">
                    <p class="opacity-80">$ whoami</p>
                    <h1 class="text-2xl font-bold">Who are you?</h1>
                    <p>Always wondered how I found myself here or want to get into coding yourself? Maybe you're just a bit nosy and just want to know. Checkout my story!</p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 group-hover:translate-x-2.5 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>

            <a href="{{ route('contact') }}" class="2xl:col-span-4 2xl:col-start-8 col-span-12 flex justify-between group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222] hover:border-[#333] transition cursor-pointer">
                <div class="flex flex-col">
                    <p class="opacity-80">$ cat contact-cta.txt</p>
                    <h1 class="text-2xl font-bold">I've got an Idea!</h1>
                    <p>Got an idea that you want to come alive? Need a website, software or some custom integration? Let's have a chat and see what we can work out!</p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 group-hover:translate-x-2.5 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
@endsection
