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
                <input type="search" name="cari" id="default-search" class="block w-80 p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari" value="{{ request('cari') }}" required>
            </div>
        </form>
    </div>
</header>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-10">
        <form action="">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-6">
                <h4 class="text-lg font-bold mb-5">Filter</h4>
                <div class="mb-5">
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="mb-5">
                    <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                    <select name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                      <option value=""></option>
                      <option value="Pengembangan Diri"  @selected(request('kategori') == "Pengembangan Diri")>Pengembangan Diri</option>
                      <option value="Romansa"  @selected(request('kategori') == "Romansa")>Romansa</option>
                      <option value="Kehidupan Sehari-hari"  @selected(request('kategori') == "Kehidupan Sehari-hari")>Kehidupan Sehari-hari</option>
                      <option value="Penelitian dan Wawasan"  @selected(request('kategori') == "Penelitian dan Wawasan")>Penelitian dan Wawasan</option>
                      <option value="Motivasi"  @selected(request('kategori') == "Motivasi")>Motivasi</option>
                    </select>
                </div>

                <div class="text-right">
                    <button type="submit" class="inline-block text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 focus:outline-none">Filter</button>
                </div>
            </div>
        </form>
        <div class="col-span-2">
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
</div>
@endsection
