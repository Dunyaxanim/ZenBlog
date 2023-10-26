<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('category')->get();
        return view('admin.pages.MainPage.blog.blogList',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.pages.MainPage.blog.blogCreate',['categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {

        try {
            // $isupload = Sliders::insert([
            //     "title" => $request->title,
            //     "content" => $request->content,
            //     "imgUrl" => $imageName,
            //     "created_at" => now(),
            // ]);
            DB::beginTransaction();

            $imageName = uniqid() . '.' . $request->imgUrl->extension();
            $authorimgUrl = uniqid() . '.' . $request->authorimgUrl->extension();
            $request['imgUrl'] = $imageName;
            $request['authorimgUrl'] = $authorimgUrl;
            $isupload = Blog::create([
                'imgUrl' => $imageName,
                'authorimgUrl' => $authorimgUrl,
                "title" => $request->title,
                "content" => $request->content,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'authorName' => $request->authorName,
            ]);
            if ($isupload) {
                $request->imgUrl->move(public_path('projects/admin/img/Blog'), $imageName);
                $request->authorimgUrl->move(public_path('projects/admin/img/Blog'), $authorimgUrl);
            }
            DB::commit();
            return redirect()->action('App\Http\Controllers\admin\BlogController@index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
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
