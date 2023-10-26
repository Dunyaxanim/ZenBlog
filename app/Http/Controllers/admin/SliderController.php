<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sliders;

use Illuminate\Support\Str;
use function PHPUnit\Framework\isNull;

class SliderController extends Controller
{

    public function index()
    {
        $slider = Sliders::all();
        return view('admin.pages.MainPage.slider.allslider', ['sliders' => $slider]);
    }
    public function create(Request $request)
    {
        return view('admin.pages.MainPage.slider.formslider');
    }
    public function store(Request $request)
    {
        $slider = Sliders::where('title',$request->title)->first();
        if($slider !== null){
            $slider = Sliders::all();
            return view('admin.pages.MainPage.slider.allslider', ['sliders' => $slider]);
        }
        $imageName = time() . '.' . $request->imgUrl->extension();
        $isupload = Sliders::insert([
            "title" => $request->title,
            "content" => $request->content,
            "imgUrl" => $imageName,
            "created_at" => now(),
        ]);
        
        if($isupload){
            $request->imgUrl->move(public_path('projects/admin/img/slider'), $imageName);
            $slider = Sliders::all(); 
        }
        return view('admin.pages.MainPage.slider.allslider', ['sliders' => $slider]);
    }
    public function show(string $id)
    {
        $slider = Sliders::where('id', $id)->first();
        return view('admin.pages.MainPage.slider.detail', ['slider' => $slider]);
    }
    public function edit(string $id)
    {
        $slider= Sliders::find($id);
        return view('admin.pages.MainPage.slider.updateFormSlider', ['slider'=> $slider,'id'=> $id]);
    }

    public function update(Request $request, string $id)
    {
        if($request->get('title')!==null){
            if($request->hasFile('imgUrl')){
                $imageName = Str::uuid() . '.' . $request->imgUrl->extension();
            }
            else{
                $imageName = Sliders::find($id)->imgUrl;
            }
            $isupload = Sliders::find($id)->update([
                "title" => $request->title,
                "content" => $request->content,
                "imgUrl" => $imageName,   
            ]);
        }
        if ($isupload && $request->hasFile('imgUrl')) {
            $request->imgUrl->move(public_path('projects/admin/img/slider'), $imageName);
        }
        $slider = Sliders::all();
        return view('admin.pages.MainPage.slider.allslider', ['sliders' => $slider]);
    }

    public function destroy(string $id)
    {
        $slider = Sliders::get();
       if(Sliders::find($id)){
            $isdeleted = Sliders::destroy($id);
            if($isdeleted){
                return view('admin.pages.MainPage.slider.allslider',['sliders'=> $slider]);
            }
       }else{
            return view('admin.pages.MainPage.slider.allslider', ['sliders' => $slider]);
       }
       
    }
}
