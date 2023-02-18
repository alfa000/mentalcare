<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Soal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <form method="post" action="{{ $soal->exists ? route('soal.update',$soal->id) : route('soal.store') }}" enctype="multipart/form-data">
                    @csrf
                    {{ $soal->exists ? method_field('PATCH') : ''}}
                    <div class="mb-6">
                      <label for="soal" class="block mb-2 text-sm font-medium text-gray-900">Soal</label>
                      <input type="text" id="soal" name="soal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required value="{{ $soal->soal }}">
                    </div>
                    <div class="mb-6">
                      <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900">Tipe</label>
                      <select name="tipe" id="tipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value=""></option>
                        <option value="i"  @selected($soal->tipe == "i")>Mind Intorvert (I)</option>
                        <option value="e"  @selected($soal->tipe == "e")>Mind Extropert (E)</option>
                        <option value="n"  @selected($soal->tipe == "n")>Energy Intuitive (N)</option>
                        <option value="s"  @selected($soal->tipe == "s")>Energy Observant (S)</option>
                        <option value="t"  @selected($soal->tipe == "t")>Nature Thinking (T)</option>
                        <option value="f"  @selected($soal->tipe == "f")>Nature Feeling (F)</option>
                        <option value="j"  @selected($soal->tipe == "j")>Tactics Judging (J)</option>
                        <option value="p"  @selected($soal->tipe == "p")>Tactics Prospecting (P)</option>
                        <option value="a"  @selected($soal->tipe == "a")>Identity Assertive</option>
                        <option value="tu"  @selected($soal->tipe == "t")>Identity Turbulent</option>
                      </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
