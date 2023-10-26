<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class SingleBlogController extends Controller
{
    public function getView()
    {
        return view('front.pages.SingleBloge');
    }
    public function blogdetail(Blog $blog)
    {
        return view('front.pages.singleBloge',["blog"=>$blog] );
    }
}
