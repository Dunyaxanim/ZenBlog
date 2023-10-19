<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getView()
    {
        return view('front.pages.categories');
    }
    public function showPost(Category $category)
    {
        $blogs = Blog::where('id', $category->id)->get();
        return view('front.pages.categories',['blogs'=> $blogs]);
    }
}
