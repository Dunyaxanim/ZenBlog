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
        // $blogs = Blog::where('id', $category->id)->get();
        $categories= $category->load('posts.category');
        $lastestCategories= Blog::orderBy('updated_at','desc')->limit(6)->with('category')->get();
        // dd($lastestCategories);
        return view('front.pages.categories',['categories'=> $categories, 'lastestCategories'=> $lastestCategories]);
    }
}