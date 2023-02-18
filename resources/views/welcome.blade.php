@extends('layouts.web')

@section('content')
<div style="background: #3CAEA3" class="px-10 pt-5 flex items-center mb-5">
    <div class="tag-line text-white w-1/2">
        <h2 class="text-5xl font-bold mb-2">Kesehatan mental itu penting</h2>
        <p class="mb-3">
            MentalCare akan menjadi tempat yang lebih baik jika kita saling peduli. Pelajari bagaimana Anda dapat membagikan cerita Anda dengan aman dan membantu anggota lain dalam komunitas kita sehubungan dengan kesehatan mental.
        </p>

        <a href="{{ route('test') }}" class="inline-block text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-semibold rounded-full text-xl px-10 py-4 mr-2 mb-5 focus:outline-none" style="background: #478396">Mulai Test</a>
    </div>
    <img src="{{ asset('ilustration.png') }}" class="w-1/2" alt="">
</div>

    <div class="px-5 mb-5 grid grid-cols-3">
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">INFP</h5>
            <p class="font-normal text-gray-700">INFP adalah seseorang yang idealis, teguh memegang prinsip, dan setia terutama pada orang-orang penting dalam hidupnya. Tipe kepribadian MBTI ini memiliki rasa ingin tahu yang tinggi, terbuka dengan berbagai kemungkinan. Ia adalah sosok yang fleksibel dan adaptif, kecuali pada prinsip yang dipegangnya.
            </p>
        </div>
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">INTJ</h5>
            <p class="font-normal text-gray-700">I
                INTJ adalah orang-orang yang dapat dengan cepat memahami pola atas suatu peristiwa yang tengah terjadi, kemudian menyusun perspektif dalam jangka panjang. Mereka mandiri, terorganisir, serta memiliki standar kompetensi dan kinerja yang tinggi untuk diri sendiri dan orang lain.
            </p>
        </div>
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">INFJ</h5>
            <p class="font-normal text-gray-700">
                INFJ adalah si pencari makna. Ia tertarik untuk memahami pemikiran orang lain, hubungan antar ide, bahkan hubungan sosial. Punya komitmen tinggi dalam bekerja, tipe kepribadian MBTI ini ingin melayani orang-orang di sekitarnya sebaik mungkin.
            </p>
        </div>
    </div>

    <nav class="border-gray-200 px-10 md:px-10 py-2.5 text-white" style="background: #3CAEA3">
        &copy; MentalCare
    </nav>

@endsection
