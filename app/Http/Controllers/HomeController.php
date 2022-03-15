<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $blogs = Blog::all();
//        $faqs = Faq::all();
        $user = User::all();

        print_r($user->all());

        return view('home.anasayfa');
    }
}
