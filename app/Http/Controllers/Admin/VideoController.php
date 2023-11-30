<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video = Video::all();
        return view('admin/video', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/videoupload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'categories' => 'required',
        //     'privacy' => 'required',
        //     'title' => 'required',
        //     'description' => 'required',
        //     'models_present' => 'required',
        //     'agree' => 'required',
        //     'file' => 'required|mimetypes:video/mp4,video/webm,video/quicktime|max:2048000', // 2GB limit (2048000 KB)
        // ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // Continue with your file processing logic...
            $file->move('upload',$file->getClientOriginalName());
            $file_name=$file->getClientOriginalName();
        } else {
            // Handle the case where no file is present in the request.
            dd('no video');
        }

        $video = new Video();

        $video->title = $request->input('title');
        $video->categories = $request->input('categories');
        $video->privacy = $request->input('privacy');
        $video->description = $request->input('description');
        $video->models_present = $request->input('models_present');
        $video->new_models = $request->input('new_models');
        $video->block_countries = $request->input('block_countries');
        $video->agree = $request->input('agree');
        $video->type = $request->input('type');
        $video->file = $file_name;

        $video->save();

        return redirect()->route('videos')->with('success', 'Video uploaded successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
