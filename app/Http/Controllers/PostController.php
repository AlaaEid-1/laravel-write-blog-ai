<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('layoutinhertins.home');
    }
    public function single(){
        return view('layoutinhertins.single-standerd');
    }
     public function homecomp(){
        return view('homelayoutcomponent');
    }
     public function compon(){
        return view('components.layouts.main');
    }
     public function category(){
        return view('category');
    }

}
