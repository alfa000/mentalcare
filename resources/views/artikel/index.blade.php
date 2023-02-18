<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Artikel
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <a href="{{route('artikel.create')}}" class="inline-block text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 focus:outline-none">+ Tambah Data</a>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Judul
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gambar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Konten
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikels as $artikel)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{$artikel->judul}}
                                </th>
                                <td class="px-6 py-4">
                                    <img src="{{asset('storage/'.$artikel->gambar)}}" alt="Gambar Artikel" class="w-36 h-36">
                                </td>
                                <td class="px-6 py-4">
                                    {{$artikel->kategori}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$artikel->konten}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('artikel.edit', $artikel->id) }}" class="inline-block text-white bg-yellow-500 hover:bg-yellow-700 focus:ring-4 focus:ring-yellow-300 font-semibold rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 focus:outline-none">Edit</a>
                                    <form method="POST" class="inline-block" action="{{ route('artikel.destroy', $artikel->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="" class="inline-block text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-semibold rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 focus:outline-none" onclick="event.preventDefault();; this.closest('form').submit();">Hapus</a>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr class="bg-white border-b">
                                <td colspan="5" scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Data Kosong
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
