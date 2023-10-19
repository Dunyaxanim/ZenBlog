<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleBlogController extends Controller
{
    public function getView()
    {
        return view('front.pages.SingleBloge');
    }
}
