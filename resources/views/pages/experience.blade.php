@extends('layouts.main')
@section('title', 'Home')
@section('flex-wrapper', true)

@section('content')
    <div class="grid grid-cols-12 gap-8 justify-center w-full mt-10 xl:mt-40">
        <div class="col-span-12 xl:col-span-5 xl:col-start-2 flex flex-col gap-4 text-center xl:text-left mt-8 px-8 xl:px-0 xl:mt-0">
            <div class="2xl:col-span-4 2xl:col-start-8 col-span-12 flex justify-between group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222]">
                <div class="flex flex-col text-center w-full">
                    <h1 class="text-2xl font-bold">Work Experience</h1>
                    <p>Below you can see my past experience and what I've spent my time on. This includes both professional and personal experience.</p>
                </div>
            </div>

           @foreach($experiences as $experience)
                <div class="2xl:col-span-4 2xl:col-start-8 col-span-12 flex justify-between group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222]">
                    <div class="flex flex-col w-full">
                        <div class="flex justify-between items-center text-left mb-2">
                            @if($experience->external_url)
                                <a href="{{ $experience->external_url }}" target="_blank" nofollow class="flex items-center gap-2 underline hover:opacity-80 transition-all">
                                    <h1 class="text-2xl font-bold">{{ $experience->name }}</h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 0 0-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 0 0 .75-.75v-4a.75.75 0 0 1 1.5 0v4A2.25 2.25 0 0 1 12.75 17h-8.5A2.25 2.25 0 0 1 2 14.75v-8.5A2.25 2.25 0 0 1 4.25 4h5a.75.75 0 0 1 0 1.5h-5Z" clip-rule="evenodd" />
                                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 0 0 1.06.053L16.5 4.44v2.81a.75.75 0 0 0 1.5 0v-4.5a.75.75 0 0 0-.75-.75h-4.5a.75.75 0 0 0 0 1.5h2.553l-9.056 8.194a.75.75 0 0 0-.053 1.06Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            @else
                                <div class="flex items-center gap-2">
                                    <h1 class="text-2xl font-bold">{{ $experience->name }}</h1>
                                </div>
                            @endif

                            <h3 class="text-sm mb-2">{{ $experience->start_date->format('d/m/Y') }} - {{ $experience->end_date ? $experience->end_date->format('d/m/Y') : 'Present' }}</h3>
                        </div>
                        <p>{{ $experience->overview }}</p>

                        <ul class="mt-2 pl-2 border-l-4 border-[#555] rounded">
                            @foreach($experience->roles as $role)
                                <li>{{ $role->name }} ({{ $role->start_date->format('d/m/Y') }} - {{ $role->end_date ? $role->end_date->format('d/m/Y') : 'Present' }})</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
           @endforeach
        </div>

        <div class="col-span-12 xl:col-span-5 flex flex-col gap-4 text-center xl:text-left mt-8 px-8 xl:px-0 xl:mt-0">
            <div class="2xl:col-span-4 2xl:col-start-8 col-span-12 flex justify-between group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222]">
                <div class="flex flex-col text-center w-full">
                    <h1 class="text-2xl font-bold">Projects</h1>
                    <p>Below you'll find a collection of my projects recent and past showcasing what I've been upto in my spare time.</p>
                </div>
            </div>

            @foreach($projects as $project)
                <div class="2xl:col-span-4 2xl:col-start-8 col-span-12 flex justify-between group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222]">
                    <div class="flex justify-between gap-4 w-full">
                        <div class="flex flex-col text-left">
                            <div class="flex justify-between items-center">
                                @if($project->project_url)
                                    <a href="{{ $project->project_url }}" target="_blank" nofollow class="flex items-center gap-2 underline hover:opacity-80 transition-all">
                                        <h1 class="text-2xl font-bold">{{ $project->name }}</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 0 0-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 0 0 .75-.75v-4a.75.75 0 0 1 1.5 0v4A2.25 2.25 0 0 1 12.75 17h-8.5A2.25 2.25 0 0 1 2 14.75v-8.5A2.25 2.25 0 0 1 4.25 4h5a.75.75 0 0 1 0 1.5h-5Z" clip-rule="evenodd" />
                                            <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 0 0 1.06.053L16.5 4.44v2.81a.75.75 0 0 0 1.5 0v-4.5a.75.75 0 0 0-.75-.75h-4.5a.75.75 0 0 0 0 1.5h2.553l-9.056 8.194a.75.75 0 0 0-.053 1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                @else
                                    <div class="flex items-center gap-2">
                                        <h1 class="text-2xl font-bold">{{ $project->name }}</h1>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            <p class="mt-2">{{ $project->overview }}</p>
                        </div>
                        <div class="hidden lg:block">
                            @if($project->snapshot)
                                <a href="{{ asset('/storage/' . $project->snapshot) }}" target="_blank">
                                    <img src="{{ asset('/storage/' . $project->snapshot) }}" alt="{{ $project->name }} Snapshop Picture" class="w-24 h-20 rounded-md">
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="2xl:col-span-4 2xl:col-start-8 col-span-12 flex justify-between group items-center gap-4 p-6 border-4 rounded-lg shadow bg-[#111] border-[#222]">
                <div class="w-full">
                    <p class="text-center">Want to see more of my work? Check out my <a href="https://github.com/NinjaLabs-Dev" target="_blank" nofollow class="underline font-bold">Github</a>!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
