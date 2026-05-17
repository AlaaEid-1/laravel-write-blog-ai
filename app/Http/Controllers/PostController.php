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

}
