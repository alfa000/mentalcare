@extends('layouts.web')

@section('content')

<header class="bg-white shadow">
    <div class="flex items-center justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Test MBTI
        </h2>
    </div>
</header>

@php
    $hasil_tes = json_decode($result->hasil_tes);
@endphp

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" text-green-500 text-center uppercase text-md font-bold text-5xl mb-5" style="color : #3CAEA3">
            {{$hasil_tes->mind[0]}}
            {{$hasil_tes->energy[0]}}
            {{$hasil_tes->nature[0]}}
            {{$hasil_tes->tactics[0]}} -
            {{$hasil_tes->identity[0] == "a" ? "A" : "T"}}
        </div>

        <p class="mt-5 px-5">
            @if (strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'INFP')
            INFP adalah seseorang yang idealis, teguh memegang prinsip, dan setia terutama pada orang-orang penting dalam hidupnya. Tipe kepribadian MBTI ini memiliki rasa ingin tahu yang tinggi, terbuka dengan berbagai kemungkinan. Ia adalah sosok yang fleksibel dan adaptif, kecuali pada prinsip yang dipegangnya.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'INTJ')
            INTJ adalah orang-orang yang dapat dengan cepat memahami pola atas suatu peristiwa yang tengah terjadi, kemudian menyusun perspektif dalam jangka panjang. Mereka mandiri, terorganisir, serta memiliki standar kompetensi dan kinerja yang tinggi untuk diri sendiri dan orang lain.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'INFJ')
            INFJ adalah si pencari makna. Ia tertarik untuk memahami pemikiran orang lain, hubungan antar ide, bahkan hubungan sosial. Punya komitmen tinggi dalam bekerja, tipe kepribadian MBTI ini ingin melayani orang-orang di sekitarnya sebaik mungkin.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'INTP')
            Tipe kepribadian MBTI ini lebih tertarik dengan ide ketimbang interaksi sosial. Mereka adalah orang-orang yang teoretis dan abstrak, dengan tampilan yang cerdas dan tenang. Jika memiliki minat, mereka mampu fokus mendalami suatu masalah sampai menemukan solusi.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ENTJ')
            Berkat pengetahuannya yang luas, ENTJ adalah pembaca keadaan yang baik. Ia peka dalam memilah prosedur atau kebijakan yang kurang efisien, bahkan mampu mengembangkan sistem guna mengatasi persoalan dalam organisasi. Tipe kepribadian MBTI ini tak segan memaksakan idenya.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ENTP')
            Sisi ekstrovert kepribadian MBTI ini menjadikannya sosok yang blak-blakan. Mereka tak ragu bila harus memecahkan masalah dengan cara-cara yang menantang, namun sekaligus strategis. Tipe ENTP menyukai kegiatan-kegiatan yang menarik dan mudah merasa jenuh dengan rutinitas.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ENFJ')
            ENFJ adalah sosok yang hangat, berempati tinggi, dan pendengar yang baik. Tipe kepribadian MBTI ini senang bergaul, suka memudahkan urusan dan mendorong orang lain mencapai potensinya. Ia mampu menerima kritik dan pujian dengan baik.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ENFP')
            ENFP juga berkarakter hangat. Ia adalah sosok yang imajinatif dengan antusiasme tinggi. Kemampuannya dalam memahami pola dan hubungan suatu informasi dengan kejadian tertentu membuat ENFP percaya diri dalam melakukan sesuatu. Tipe kepribadian MBTI ini suportif, fleksibel, spontan, dan fasih berbicara.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ISFJ')
            ISFJ itu tenang, teliti, bertanggungjawab, berkomitmen, telaten, cermat, baik hati, loyal, dan perhatian. Sesuatu yang penting akan diingatnya secara spesifik. Kepribadian MBTI ini menyukai ketertiban di tempat tinggal maupun tempat kerja.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ISFP')
            Kepribadian MBTI ISFP adalah sosok yang tenang, sensitif, dan baik hati. Mereka membutuhkan ruang sendiri, bekerja sesuai dengan waktunya sendiri, hadir dan menikmati masa kini. Mereka berkomitmen pada orang atau prinsip yang penting bagi dirinya. Karena tak menyukai perselisihan atau konflik, ISFP takkan memaksakan pendapat atau prinsipnya.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ISTJ')
            ISTJ berkarakter tenang, serius, teliti, tekun, handal, realistis, praktis, dan logis. Orientasinya pada tanggung jawab dan fakta, mengedepankan logika saat memutuskan sesuatu. Ia menyukai pekerjaan dan kehidupan yang tertib dan teratur. Tak heran bila sosok ini loyal dan memegang teguh tradisi.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ISTP')
            Tipe kepribadian MBTI ini berkarakter toleran dan fleksibel. Ketenangannya dalam menganalisis membuatnya mampu bertindak cepat menemukan solusi. Berminat pada hubungan sebab-akibat, ISTP dapat mengolah fakta secara efisien dan logis.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ESFJ')
            ESFJ adalah karakter yang suka bekerja sama dalam lingkungan yang harmonis. Mereka mampu memahami kebutuhan orang lain berusahan memenuhinya. Kepribadian MBTI ESFJ ingin dihargai sebagai pribadi dan atas apa yang telah dikerjakannya.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ESFP')
            Tipe kepribadian MBTI ini adalah sosok yang ramah, bersahat, fleksibel, adaptif, spontan, mencintai kehidupannya sendiri dan orang lain. Ia suka belajar dan bekerja bersama orang lain dengan pendekatan yang logis dan realistis.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ESTJ')
            ESTJ adalah tipe yang praktis, realistis, berorientasi fakta, dan tegas. Ia tahu bagaimana mengatur pekerjaan secara efisien agar diperoleh hasil terbaik. Standar logika yang dimiliki ESTJ membantunya membuat keputusan dengan cepat, hingga terkadang memaksakan rencananya.

            @elseif(strtoupper($hasil_tes->mind[0].$hasil_tes->energy[0].$hasil_tes->nature[0].$hasil_tes->tactics[0]) == 'ESTP')
            Kepribadian MBTI ESTP adalah sosok yang fleksibel dan toleran, suka menjalin berkomunikasi aktif. Bagi ESTP, teori itu membosankan. Justru mereka belajar dengan baik saat harus melakukan sesuatu secara langsung.

            @endif
        </p>
    </div>
</div>
@endsection
