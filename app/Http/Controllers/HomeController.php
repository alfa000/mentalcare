<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\MbtiTest;
use App\Models\MbtiTestDetail;
use App\Models\Soal;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function test()
    {
        $soals = Soal::all();
        return view('test', compact('soals'));
    }

    public function sumResult()
    {
        $soals = Soal::all();

        $mbti_test = MbtiTest::create([
            'user_id' => Auth::user()->id,
            'hasil_tes' => json_encode([]),
        ]);

        $e = 0;
        $i = 0;
        $n = 0;
        $s = 0;
        $t = 0;
        $f = 0;
        $j = 0;
        $p = 0;
        $a = 0;
        $tu = 0;

        foreach ($soals as $soal) {
            $jawaban = explode('-', request('soal-'.$soal->id));

            switch ($jawaban[0]) {
                case 'i':
                    $i += $jawaban[1];
                    break;
                case 'e':
                    $e += $jawaban[1];
                    break;
                case 'n':
                    $n += $jawaban[1];
                    break;
                case 's':
                    $s += $jawaban[1];
                    break;
                case 't':
                    $t += $jawaban[1];
                    break;
                case 'f':
                    $f += $jawaban[1];
                    break;
                case 'j':
                    $j += $jawaban[1];
                    break;
                case 'p':
                    $p += $jawaban[1];
                    break;
                case 'a':
                    $a += $jawaban[1];
                    break;
                case 'tu':
                    $tu += $jawaban[1];
                    break;
            }

            $mbti_test_detail = MbtiTestDetail::create([
                'mbti_test_id' => $mbti_test->id,
                'soal_id' => $soal->id,
                'jawaban' => request('soal-'.$soal->id),
            ]);
        }
        if ($i > $e) {
            $mind = ['i', $i];
        }else{
            $mind = ['e', $e];
        }
        if ($n > $s) {
            $energy = ['n', $n];
        }else{
            $energy = ['s', $s];
        }

        if ($t > $f) {
            $nature = ['t', $t];
        }else{
            $nature = ['f', $f];
        }

        if ($j > $p) {
            $tactics = ['j', $j];
        }else{
            $tactics = ['p', $p];
        }

        if ($a > $tu) {
            $identity = ['a', $a];
        }else{
            $identity = ['tu', $tu];
        }

        $mbti_test->update([
            'hasil_tes' => json_encode([
                'mind' => $mind,
                'energy' => $energy,
                'nature' => $nature,
                'tactics' => $tactics,
                'identity' => $identity,
            ]),
        ]);

        return redirect(route('result'));
    }

    public function result()
    {
        $result = MbtiTest::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->limit(1)->first();
        return view('result', compact('result'));
    }

    public function artikel()
    {
        $artikels = Artikel::all();
        return view('artikel', compact('artikels'));
    }

    public function detailArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('detail-artikel', compact('artikel'));
    }

    public function cariArtikel()
    {
        $artikels = Artikel::where(function ($query) {
            $query->where('judul', 'like', '%'.request('cari').'%')->orWhere('konten', 'like', '%'.request('cari').'%');
        });

        if (request('tanggal')) {
            $artikels = $artikels->whereBetween('created_at', [request('tanggal'), now()]);
        }

        if (request('kategori')) {
            $artikels = $artikels->where('kategori', request('kategori'));
        }

        $artikels = $artikels->get();

        return view('cari-artikel', compact('artikels'));
    }

    public function video()
    {
        $videos = Video::all();
        return view('video', compact('videos'));
    }

    public function detailVideo($id)
    {
        $video = Video::findOrFail($id);
        return view('detail-video', compact('video'));
    }

    public function cariVideo()
    {
        $videos = Video::where(function ($query) {
            $query->where('judul', 'like', '%'.request('cari').'%')->orWhere('deskripsi', 'like', '%'.request('cari').'%');
        });

        if (request('tanggal')) {
            $videos = $videos->whereBetween('created_at', [request('tanggal'), now()]);
        }

        if (request('kategori')) {
            $videos = $videos->where('kategori', request('kategori'));
        }

        $videos = $videos->get();

        return view('cari-video', compact('videos'));
    }

    public function profile()
    {
        return view('profile.edit-user');
    }
}
