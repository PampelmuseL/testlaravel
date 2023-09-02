<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(csrf_token());
    }

    public function store()
    {
        $post = new Post();
        $post->title = request('title');
        $post->description = request('description');
        $post->user_id = request('user_id');
        $post->category_id = request('category_id');
        $post->price = request('price');
        $post->status = request('status');
        $post = $post->save();

        return response()->json($post);
    }
}
