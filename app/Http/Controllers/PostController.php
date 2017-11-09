<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
      $posts = Post::orderBy('created_at','DESC')->paginate(5);
      
      return view('index', compact('posts'));
    }
  
    public function show($id)
    {
      $post = Post::findOrFail($id);
      return view('post.show', compact('post'));
    }
  
    public function create()
    {
      return view('post.create');
    }
    
    public function store()
    {
      return "store";
    }
  
}
