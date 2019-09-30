<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
// use App\User;
// use App\Profile;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('welcome')
                ->with('title',Setting::first()->site_name)
                ->with('categories',Category::take(4)->get())
                ->with('tags',Tag::all())
                ->with('slugs',Post::all())
                // ->with('user',User::first()->name)
                // ->with('profile',Profile::first()->avatar)
                ->with('first_post',Post::orderBy('created_at','desc')->first())
                ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                ->with('settings',Setting::first());
    }
}
