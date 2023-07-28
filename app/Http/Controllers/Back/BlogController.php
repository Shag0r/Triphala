<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    //
    public function index(){
        return view('Back.addblog');
    }
    public function addblog(Request $request)
    {
    $request->validate([
        'blogImg' => 'required|mimes:png,jpg,jpeg', 
    ]);

    $blog = new Blog();

    $imageName = "";
    if ($image = $request->file('blogImg')) {
        $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move('images/blogimgs', $imageName);
    }

    $blog->blogtitle = $request->input('blogtitle');
    $blog->blogauthor = $request->input('blogauthor');
    $blog->blogdes = $request->input('blogdes');
    $blog->blogcata = $request->input('blogcata');
    $blog->blogImg = $imageName;
    $blog->blogsum = $request->input('blogsum');
    $blog->blogstatus = $request->input('blogstatus');

    $blog->save();

    return back();
    // dd($blog);
}
//for manage blog 
public function manageblog(){
    $blogs= Blog::all();
    return view('Back.manageblog',compact('blogs'));

}
// delete blog 
public function deleteblog($id)
{
    $blog = Blog::find($id);

    $deleteOldImage = 'images/blogimgs/' . $blog->blogImg;
    if (file_exists($deleteOldImage)) {
        File::delete($deleteOldImage);
    }

    $blog->delete();

    return back();
}
public function activeblog($id)
{
    $blog = Blog::find($id);
    $blog->blogstatus = '1';
    $blog->save();

    return redirect()->route('manageblog');
}
public function inactiveblog($id)
{
    $blog = Blog::find($id);
    $blog->blogstatus = '0';
    $blog->save();

    return redirect()->route('manageblog');
}

public function updateblog($id){
    $blogs= Blog::find($id);
    return view('Back.updateblog',compact('blogs'));
}
public function updateblogsave(Request $request, $id)
{
    $request->validate([
        'blogImg' => 'nullable|mimes:png,jpg,jpeg',
    ]);

    $blog = Blog::find($id);

    // Update blog details
    $blog->blogtitle = $request->input('blogtitle');
    $blog->blogauthor = $request->input('blogauthor');
    $blog->blogdes = $request->input('blogdes');
    $blog->blogcata = $request->input('blogcata');
    $blog->blogsum = $request->input('blogsum');
    $blog->blogstatus = $request->input('blogstatus');

    // Check if a new image is uploaded
    if ($request->hasFile('blogImg')) {
        // Delete the old image file
        $oldImagePath = public_path('images/blogimgs/' . $blog->blogImg);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        // Upload and save the new image
        $image = $request->file('blogImg');
        $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move('images/blogimgs', $imageName);
        $blog->blogImg = $imageName;
    }

    // Save the updated blog
    $blog->save();

    return redirect()->route('manageblog');
}



}
