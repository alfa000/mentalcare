@extends('layouts.web')

@section('content')

<header class="bg-white shadow">
    <div class="flex items-center justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artikel
        </h2>
        <form action="{{ route('artikel.cari') }}">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" name="cari" id="default-search" class="block w-80 p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari" required>
            </div>
        </form>
    </div>
</header>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($artikels as $artikel)
        <a href="{{ route('artikel.detail', ['id' => $artikel->id]) }}" class="block mb-5">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-6">
                <h3 class="text-xl font-bold">{{ $artikel->judul }}</h3>
                <small class="text-gray-500 block mb-5">{{ $artikel->kategori }}</small>
                <div class="text-gray-900 flex">
                    <img src="{{ asset('storage/'.$artikel->gambar) }}" width="100" alt="" class="mr-5">
                    <div class="">
                        <p>
                            {{ $artikel->konten }}
                        </p>
                        <br>
                        <b>{{ $artikel->userCreate->name }}</b><br>
                        {{ $artikel->created_at->format('d M Y') }}
                    </div>

                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
