<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\videoModel;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class FrontController extends Controller
{
    public function index(){
        $blogs= Blog::orderBy('id', 'desc')->get();
        // dd($blogs);
        
        $products = Product::orderBy('id', 'desc')->get();
        
        return view('Front.index', compact('blogs', 'products'));
    }
    public function videotrainig(){
        $videos= videoModel::all();
        // dd($videos);
        return view('Front.video',compact('videos'));
    }

    // for the shop
    public function shop(){
        $products = Product::orderBy('id', 'desc')->get();
        
        return view('Front.shop',compact('products'));
    }
    // for home page 
    public function homepage(){
        $products = Product::orderBy('id', 'desc')->get();
        $videos= videoModel::all();
        $blogs= Blog::all();
        return view('Front.homepage',compact('products','videos','blogs'));
        
    }

    public function weather(){
        return view('Front.weather');
    }
}
