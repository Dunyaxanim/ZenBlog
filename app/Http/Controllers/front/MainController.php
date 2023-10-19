<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Sliders;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function getView()
    {
        $slider = Sliders::all();
        $blogs = Blog::with('category')->get();
        $firstblog = Blog::with('category')->get()->first();
        return view('front.pages.main', ['sliders' => $slider,'blogs'=> $blogs, 'firstblog'=> $firstblog]);
    }
}
