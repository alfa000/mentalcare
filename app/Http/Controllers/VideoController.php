<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video = new Video();
        return view('video.form', compact('video'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video_path = "";
        if ($request->file('video')) {
            $file = $request->file('video');
            $video_path = $file->store("video", 'public');
        }

        Video::create([
            'judul'              => $request->judul,
            'video'              => $video_path,
            'kategori'           => $request->kategori,
            'deskripsi'          => $request->deskripsi,
            'created_by'         => Auth::user()->id,
            'updated_by'         => Auth::user()->id,
        ]);

        return redirect(route('video.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('video.form', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video_path = $video->video;
        if ($request->file('video')) {
            $file = $request->file('video');
            $video_path = $file->store("video", 'public');
        }

        $video->update([
            'judul'              => $request->judul,
            'video'              => $video_path,
            'kategori'           => $request->kategori,
            'deskripsi'          => $request->deskripsi,
            'updated_by'         => Auth::user()->id,
        ]);

        return redirect(route('video.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect(route('video.index'));
    }
}
