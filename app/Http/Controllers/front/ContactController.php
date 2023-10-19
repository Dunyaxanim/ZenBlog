<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getView()
    {
        return view('front.pages.contact');
    }
    public function postdata(Request $request)
    {
        // dd($request->all);
        return $request->email;
        // return response()->json(["success" => true, "message" => "Data saved successfully"], 200);
    }
}
