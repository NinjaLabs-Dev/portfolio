@extends('layouts.main')
@section('title', 'Home')
@section('flex-wrapper', true)

@section('content')
    <div class="grid grid-cols-12 gap-8 justify-center items-center w-full">
        <div class="col-span-12 xl:col-span-4 xl:col-start-2 text-center xl:text-left mt-8 px-8 xl:px-0 xl:mt-0">
            <h1 class="text-2xl font-bold mb-2 text-green-400">Ninja@ninjalabs.dev: <span class="text-white">$ cat contact.txt</span></h1>
            <h2 class="text-4xl">Wanting to Connect?</h2>
            <p class="text-lg">Great! I'm always looking to speak with new people about new ideas, projects or just to have a chat.
                <br> <br>
                If you're interested in working with me or want to know more about what I can offer, feel free to reach out to one of my socials.
                <br> <br>
                However, if you want to get a little more <span class="italic">personal</span>, you can always send me an email at <a href="mailto:frsaer@ninjalabs.dev" class="underline font-bold">fraser@ninjalabs.dev</a>!
            </p>
        </div>

        <div class="col-span-12 xl:col-span-6 gap-4 flex flex-col sm:flex-row justify-center xl:justify-end mb-8 xl:mb-0">
            <a href="https://discord.com/" target="_blank" class="flex justify-center group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222] hover:border-[#333] transition cursor-pointer">
                <div class="flex flex-col text-center">
                    <h1 class="text-2xl font-bold">Discord</h1>
                    <p>@ninjalabs_</p>
                </div>
            </a>

            <a href="https://x.com/Ninjalabs_" target="_blank" class="flex justify-center group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222] hover:border-[#333] transition cursor-pointer">
                <div class="flex flex-col text-center">
                    <h1 class="text-2xl font-bold">X (Twitter)</h1>
                    <p>@ninjalabs_</p>
                </div>
            </a>

            <a href="https://github.com/NinjaLabs-Dev" target="_blank" class="flex justify-center group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222] hover:border-[#333] transition cursor-pointer">
                <div class="flex flex-col text-center">
                    <h1 class="text-2xl font-bold">Github</h1>
                    <p>@NinjaLabsDev</p>
                </div>
            </a>

            <a href="https://tech.lgbt/@NinjaLabs" target="_blank" class="flex justify-center group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222] hover:border-[#333] transition cursor-pointer">
                <div class="flex flex-col text-center">
                    <h1 class="text-2xl font-bold">Mastodon</h1>
                    <p>@NinjaLabs</p>
                </div>
            </a>
        </div>
    </div>
@endsection

