<?php

namespace App\Http\Controllers;


use App\Http\Requests\CategoryCreateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except(['index', 'show']);
  }

 public function index()
  {
    $categories = DB::table('categories')->get();
    
    return view('categories.index', ['categories' => $categories]);
  }

    public function show($category_id)
  {
    $category = DB::table('categories')->where('id', $category_id)->first();
    $categories = DB::table('categories')->get();

    if (!isset($category)) {
      throw new ModelNotFoundException();
    }
    
    return view('categories.show', ['category' => $category, 'categories' => $categories]);
  }

  public function create()
  {
    $categories = DB::table('categories')->get();

    return view('categories.create', ['categories' => $categories]);
  }

  public function store(CategoryCreateRequest $request)
  {
    $category = $request->post('category');
    DB::table('categories')
      ->insert(['category' => $category]);

    return redirect()->route('categories.index');
  }

    public function update($category_id)
  {
    $category = DB::table('categories')
    ->where('id', $category_id)
    ->first();

    $categories = DB::table('categories')->get();

    if (!isset($category)) {
      throw new ModelNotFoundException();
    }
  
    return view('categories.update', ['category' => $category, 'category_id' => $category_id, 'categories' => $categories]);
  }

  public function restore(CategoryCreateRequest $request, $category_id)
  {
    $category = $request->post('category');

    DB::table('categories')
      ->where('id', $category_id)
      ->update([
        'category' => $category,
      ]);

    return redirect()->route('categories.index');
  }

    public function delete($category_id)
  {
    DB::table('categories')
      ->where('id', $category_id)
      ->delete();

    return redirect()->route('categories.index');
  }

}

?>