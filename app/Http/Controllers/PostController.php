<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function tampil()
    {
        $post = Post::all();
        return view('post.index',compact('post'));
    }

    public function search($id)
    {
        $post = post::find($id);
        return $post;
    }

    public function search_title($title)
    {
        $post = post::where('title','like','%'.$title.'%')->get();
        return $post;
    }

    public function edit($id,$a,$b)
    {
        $post = post::find($id);
        $post->title =$a;
        $post->content = $b;
        $post ->save();
        return $post;
    }

    public function tambah($a,$b)
    {
        $post = new post();
        $post->title =$a;
        $post->content = $b;
        $post ->save();
        return $post;
    }

    public function hapus($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('post');
    }
}
