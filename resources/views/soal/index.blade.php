<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Soal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <a href="{{route('soal.create')}}" class="inline-block text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 focus:outline-none">+ Tambah Data</a>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Soal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tipe
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($soals as $soal)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{$soal->soal}}
                                </th>
                                <td class="px-6 py-4">
                                    @switch($soal->tipe)
                                        @case('i')
                                            Mind Introvert (I)
                                            @break
                                        @case('e')
                                            Mind Extropert (E)
                                            @break
                                        @case('n')
                                            Energy Intuitive (N)
                                            @break
                                        @case('s')
                                            Energy Observant (S)
                                            @break
                                        @case('t')
                                            Nature Thinking (T)
                                            @break
                                        @case('f')
                                            Nature Feeling (F)
                                            @break
                                        @case('j')
                                            Tactics Introvert (J)
                                            @break
                                        @case('p')
                                            Tactics Introvert (P)
                                            @break
                                        @case('a')
                                            Identity Introvert (A)
                                            @break
                                        @case('t')
                                            Identity Introvert (T)
                                            @break
                                        @default

                                    @endswitch
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('soal.edit', $soal->id) }}" class="inline-block text-white bg-yellow-500 hover:bg-yellow-700 focus:ring-4 focus:ring-yellow-300 font-semibold rounded-lg text-sm px-5 py-2.5 mr-2 mb-5 focus:outline-none">Edit</a>
                                    <form method="POST" class="inline-block" action="{{ route('soal.destroy', $soal->id) }}">
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
