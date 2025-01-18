<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemController extends Controller
{
    public function index(){
        return view('them.index');

    }
    public function category(){
        return view('them.category');

    }
    public function contact(){
        return view('them.contact');

    }
    public function singleBlog(){
        return view('them.single-blog');

    }
    public function login(){
        return view('them.login');

    }
    public function register(){
        return view('them.register');

    }




}
