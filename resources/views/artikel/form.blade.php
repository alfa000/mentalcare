<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artikel
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <form method="post" action="{{ $artikel->exists ? route('artikel.update',$artikel->id) : route('artikel.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{ $artikel->exists ? method_field('PATCH') : ''}}
                    <div class="mb-6">
                      <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                      <input type="text" id="judul" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ $artikel->judul }}">
                    </div>
                    <div class="mb-6">
                      <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900">Gambar</label>
                      <input type="file" id="gambar" name="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-6">
                      <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                      <select name="kategori" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value=""></option>
                        <option value="Pengembangan Diri"  @selected($artikel->kategori == "Pengembangan Diri")>Pengembangan Diri</option>
                        <option value="Romansa"  @selected($artikel->kategori == "Romansa")>Romansa</option>
                        <option value="Kehidupan Sehari-hari"  @selected($artikel->kategori == "Kehidupan Sehari-hari")>Kehidupan Sehari-hari</option>
                        <option value="Penelitian dan Wawasan"  @selected($artikel->kategori == "Penelitian dan Wawasan")>Penelitian dan Wawasan</option>
                        <option value="Motivasi"  @selected($artikel->kategori == "Motivasi")>Motivasi</option>
                      </select>
                    </div>
                    <div class="mb-6">
                      <label for="konten" class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
                      <textarea name="konten" id="konten" cols="30" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ $artikel->konten }}</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
