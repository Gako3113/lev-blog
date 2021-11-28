<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts'=>$post->getByLimit()]); 
        //ViewにController内で取得した変数を渡したい場合は、Viewインスタンスに対してwithというメソッドを使用する
    }
}
