@extends('layouts.main')
@section('title', 'Home')
@section('flex-wrapper', true)

@section('content')
    <div class="grid grid-cols-12 gap-8 justify-center items-center w-full">
        <div class="col-span-12 xl:col-span-4 xl:col-start-2 text-center xl:text-left mt-8 px-8 xl:px-0 xl:mt-0">
            <h1 class="text-2xl font-bold mb-2 text-green-400">Ninja@ninjalabs.dev: <span class="text-white">$ whoami</span></h1>
            <h2 class="text-4xl">Ninja <span class="text-md opacity-75">She/Her</span></h2>
            <p class="text-lg">
                I'm a {{ $age }} year old software engineer from the UK, the north to be exact. I started playing around in <a href="https://scratch.mit.edu/" target="_blank" nofollow class="underline font-bold">Scratch</a> and HTML when I was 11 and I never took my hands off the keyboard.
                <br> <br>
                I love playing around with tech, both via code and hardware. I've done the usual, build a PC, setup a network, converted some LED lights to use <a href="https://kno.wled.ge/" target="_blank" nofollow class="underline font-bold">WLED</a> and often enough find myself at my Grandma's fixing her garden lights...
                <br> <br>
                Recently I've been developing my skills further with Laravel while also getting a deeper understanding in the world of FiveM and RedM.
            </p>
        </div>

        <div class="col-span-12 xl:col-span-6 flex justify-center xl:justify-end mb-8 xl:mb-0">
            <img src="{{ asset('assets/me.jpg') }}" alt="Picture of me taking a picture, facing away." class="h-[60vh] rounded-md shadow-md">
        </div>
    </div>
@endsection
