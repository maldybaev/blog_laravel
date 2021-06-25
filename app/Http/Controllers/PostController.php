<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostCreateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

 public function index()
  {
    $posts = DB::table('posts')->get();
    $categories = DB::table('categories')->get();

    return view('posts.index', ['posts' => $posts, 'categories' => $categories]);
  }

    public function show($post_id)
  {
    $post = DB::table('posts')->where('id', $post_id)->first();
    $categories = DB::table('categories')->get();

    if (!isset($post)) {
      throw new ModelNotFoundException();
    }
    
    return view('posts.show', ['post' => $post, 'categories' => $categories]);
  }

  public function create()
  {
    $categories = DB::table('categories')->get();
    return view('posts.create', ['categories' => $categories]);
  }

  public function store(PostCreateRequest $request)
  {
    $title = $request->post('title');
    $text = $request->post('text');
    DB::table('posts')
      ->insert(['title' => $title, 'text' => $text]);

    return redirect()->route('posts.index');
  }

    public function update($post_id)
  {
    $post = DB::table('posts')
    ->where('id', $post_id)
    ->first();

    if (!isset($post)) {
      throw new ModelNotFoundException();
    }

    $categories = DB::table('categories')->get();
  
    return view('posts.update', ['post' => $post, 'post_id' => $post_id, 'categories' => $categories]);
  }

  public function restore(PostCreateRequest $request, int $post_id)
  {
    $title = $request->post('title');
    $text = $request->post('text');

    DB::table('posts')
      ->where('id', $post_id)
      ->update([
        'title' => $title,
        'text' => $text
      ]);

    return redirect()->route('posts.index');
  }

    public function delete($post_id)
  {
    DB::table('posts')
      ->where('id', $post_id)
      ->delete();

    return redirect()->route('posts.index');
  }

}

?>