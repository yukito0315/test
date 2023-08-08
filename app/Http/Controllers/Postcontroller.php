<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Postcontroller extends Controller
{
    public function show(Post $post)
    {
        return view('posts/show')->with(['post'=>$post]);
    }
}
