@extends('layouts.web')

@section('content')

<header class="bg-white shadow">
    <div class="flex items-center justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Test MBTI
        </h2>
    </div>
</header>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('sumResult') }}" method="post">
            @csrf

            @foreach ($soals as $soal)
                <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-6 mb-5">
                    <h3 class="text-xl font-bold mb-5 text-center">{{ $soal->soal }}</h3>
                    <div class="text-gray-900 flex justify-center">
                        <div class="flex items-center mb-4">
                            <label for="soal-1" class="ml-2 text-xl font-bold text-yellow-600 mr-5">Tidak Setuju</label>
                            <input id="soal-1" type="radio" value="{{$soal->tipe}}-10" name="soal-{{ $soal->id }}" class="w-16 h-16 text-yellow-600 bg-yellow-100 border-yellow-300 focus:ring-yellow-500 mr-5">
                            <input id="soal-1" type="radio" value="{{$soal->tipe}}-5" name="soal-{{ $soal->id }}" class="w-12 h-12 text-yellow-600 bg-yellow-100 border-yellow-300 focus:ring-yellow-500 mr-5">
                            <input id="soal-1" type="radio" value="{{kebalikanJawaban($soal->tipe)}}-5" name="soal-{{ $soal->id }}" class="w-12 h-12 text-green-600 bg-green-100 border-green-300 focus:ring-green-500 mr-5">
                            <input id="soal-1" type="radio" value="{{kebalikanJawaban($soal->tipe)}}-10" name="soal-{{ $soal->id }}" class="w-16 h-16 text-green-600 bg-green-100 border-green-300 focus:ring-green-500 mr-5">
                            <label for="soal-1" class="ml-2 text-xl font-bold text-green-600">Setuju</label>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                <button type="submit" class="inline-block text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-semibold rounded-full text-2xl px-10 py-4 mr-2 mb-5 focus:outline-none" style="background: #478396">Lihat Hasil</button>
            </div>
        </form>
    </div>
</div>
@endsection
