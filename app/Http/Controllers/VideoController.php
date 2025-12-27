<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        return view('backEnd.campaign.videos.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,avi,webm|max:51200',
            'pages' => 'required|array'
        ]);

        // 🔥 SAME PAGE = ONLY ONE ACTIVE VIDEO
        foreach ($request->pages as $page) {
            Video::whereJsonContains('pages', $page)
                ->update(['status' => 0]);
        }

        $path = $request->file('video')->store('videos', 'public');

        Video::create([
            'title' => $request->title,
            'video' => $path,
            'pages' => $request->pages,
            'status' => 1
        ]);

        return back()->with('success', 'Video uploaded');
    }

    public function toggleStatus($id)
    {
        $video = Video::findOrFail($id);
        $video->status = !$video->status;
        $video->save();

        return back();
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);

        if (file_exists(storage_path('app/public/'.$video->video))) {
            unlink(storage_path('app/public/'.$video->video));
        }

        $video->delete();

        return back()->with('success', 'Video deleted');
    }




    public function ajaxStatus(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $video->status = $request->status;
        $video->save();

        return response()->json([
            'success' => true,
            'status' => $video->status
        ]);
    }

    // Pages update
    public function ajaxPages(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        // 🔥 same page = only one active
        foreach ($request->pages as $page) {
            Video::where('id','!=',$id)
                ->whereJsonContains('pages',$page)
                ->update(['status'=>0]);
        }

        $video->pages = $request->pages;
        $video->save();

        return response()->json(['success'=>true]);
    }
}

