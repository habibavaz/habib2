<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $city=array('mashhad','tehran','tabriz');
        return view('index',compact('city'));
    }

    public function create()
    {
        echo "اجرای متد ایجاد";
    }
}
