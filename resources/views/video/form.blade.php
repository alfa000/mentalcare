<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Video
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <form method="post" action="{{ $video->exists ? route('video.update',$video->id) : route('video.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{ $video->exists ? method_field('PATCH') : ''}}
                    <div class="mb-6">
                      <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                      <input type="text" id="judul" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ $video->judul }}">
                    </div>
                    <div class="mb-6">
                      <label for="video" class="block mb-2 text-sm font-medium text-gray-900">Video</label>
                      <input type="file" id="video" name="video" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-6">
                      <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                      <select name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value=""></option>
                        <option value="Pengembangan Diri"  @selected($video->kategori == "Pengembangan Diri")>Pengembangan Diri</option>
                        <option value="Romansa"  @selected($video->kategori == "Romansa")>Romansa</option>
                        <option value="Kehidupan Sehari-hari"  @selected($video->kategori == "Kehidupan Sehari-hari")>Kehidupan Sehari-hari</option>
                        <option value="Penelitian dan Wawasan"  @selected($video->kategori == "Penelitian dan Wawasan")>Penelitian dan Wawasan</option>
                        <option value="Motivasi"  @selected($video->kategori == "Motivasi")>Motivasi</option>
                      </select>
                    </div>
                    <div class="mb-6">
                      <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                      <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ $video->deskripsi }}</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
