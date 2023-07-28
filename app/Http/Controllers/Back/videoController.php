<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\videoModel;
use Illuminate\Support\Facades\Storage;

class videoController extends Controller
{
    //
    public function index(){
        return view('Back.addvideo');
    }
    public function addvideo(Request $request)
{
    $validatedData = $request->validate([
        'vtitle' => 'required',
        'vcata' => 'required',
        'vsource' => 'required',
        'vsumm' => 'required',
        'video' => 'required|mimes:mp4|max:61440',
        'vstatus' => 'required',
    ]);

    $video = $request->file('video');
    $videoPath = $video->store('public/videos');

    $videoModel = new VideoModel;
    $videoModel->vtitle = $validatedData['vtitle'];
    $videoModel->vcata = $validatedData['vcata'];
    $videoModel->vsource = $validatedData['vsource'];
    $videoModel->vsumm = $validatedData['vsumm'];
    $videoModel->video = $videoPath;
    $videoModel->vstatus = $validatedData['vstatus'];
    $videoModel->save();

    // dd($videoModel->video);

    // Redirect to a success page or display a success message
    // return redirect()->back()->with('success', 'Video added successfully');
    return redirect()->route('managevideo')->with('success', 'Video added successfully');

}
// for the managevideo 
    public function managevideo(){
        $videos= videoModel::all();
        return view('Back.managevideo',compact('videos'));

    }
    public function active($id)
{
    $video = videoModel::find($id);
    $video->vstatus = '1';
    $video->save();

    return redirect()->route('managevideo')->with('success', 'Video activated successfully');
}

public function inactive($id)
{
    $video = videoModel::find($id);
    $video->vstatus = '0';
    $video->save();

    return redirect()->route('managevideo')->with('success', 'Video deactivated successfully');
}
public function deletevideo($id)
{
    $video = videoModel::find($id);

    $deleteOldVideo = 'public/videos/' . $video->video;
    if (Storage::exists($deleteOldVideo)) {
        Storage::delete($deleteOldVideo);
    }

    $video->delete();

    return back()->with('success', 'Video deleted successfully');
}
public function updatevideo($id)
{
    $video = videoModel::find($id);
    return view('Back.updatevideo')->with('video', $video);
}
public function updatevideosave(Request $request, $id)
{
    $video = videoModel::find($id);

    $validatedData = $request->validate([
        'vtitle' => 'required',
        'vcata' => 'required',
        'vsource' => 'required',
        'vsumm' => 'required',
        'vstatus' => 'required',
    ]);

    $video->vtitle = $validatedData['vtitle'];
    $video->vcata = $validatedData['vcata'];
    $video->vsource = $validatedData['vsource'];
    $video->vsumm = $validatedData['vsumm'];

    // Check if a new video file is uploaded
    if ($request->hasFile('video')) {
        $validatedFile = $request->validate([
            'video' => 'required|mimes:mp4|max:61440',
        ]);

        // Delete the old video file
        Storage::delete($video->video);

        // Store the new video file
        $videoPath = $request->file('video')->store('public/videos');
        $video->video = $videoPath;
    }

    $video->vstatus = $validatedData['vstatus'];
    $video->save();

    return redirect()->route('managevideo')->with('success', 'Video updated successfully');
}



}
