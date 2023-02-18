@extends('layouts.web')

@section('content')

<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $video->judul }}
        </h2>
    </div>
</header>

<div class="py-12">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-6">
            <h3 class="text-xl font-bold mb-5 text-center">{{ $video->judul }}</h3>
            <div class="flex justify-center mb-5">
                <video controls>
                    <source src="{{asset('storage/'.$video->video)}}" type="video/mp4">
                </video>
            </div>
            <p class="text-gray-900">
                {{ $video->deskripsi }}
            </p>
        </div>
    </div>
</div>
@endsection
