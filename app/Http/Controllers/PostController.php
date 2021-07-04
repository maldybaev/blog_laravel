<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

 public function index()
  {
    $posts = Post::get();
    $categories = Category::get();

    return view('posts.index', ['posts' => $posts, 'categories' => $categories]);
  }

    public function show($post_id)
  {
    $post = Post::where('id', $post_id)->with('comments')->first();
    $categories = Category::get();

    return view('posts.show', ['post' => $post, 'categories' => $categories]);
  }

  public function create()
  {
    $categories = Category::get();
    return view('posts.create', ['categories' => $categories]);
  }

  public function store(PostCreateRequest $request)
  {
    $post_data = $request->all();

    Post::create($post_data);
    
    return redirect()->route('posts.index');
  }

    public function update($post_id)
  {
    $post = Post::findOrFail($post_id);

    $categories = Category::get();
  
    return view('posts.update', ['post' => $post, 'post_id' => $post_id, 'categories' => $categories]);
  }

  public function restore(PostCreateRequest $request, int $post_id)
  {
    $post_data = $request->all('title', 'text');

    Post::where('id', $post_id)
      ->update($post_data);

    return redirect()->route('posts.index');
  }

    public function delete($post_id)
  {
    /* $post = Post::findOrFail($post_id);

    $post->delete(); */

    Post::destroy($post_id);

    return redirect()->route('posts.index');
  }

}

?>