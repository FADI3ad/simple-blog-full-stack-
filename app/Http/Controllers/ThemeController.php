<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThemeController extends Controller
{

    public function index(){
        $blogs=Blog::lazy();
        return view('/theme.index' , compact(['blogs']));
    }
    public function category(Request $request){



        $blogs = Blog::where('category_id', '=', $request->id)->get();
        //  dd($blogs);
        return view('/theme.category' , compact(['blogs']));

    }
    public function contact(){
        return view('/theme.contact');
    }
    public function login(){
        return view('/theme.login');
    }

    public function register(){
        
        return view('/theme.register');
    }

    public function singleblog(){
      return view('/theme.singleblog');
    }



}
