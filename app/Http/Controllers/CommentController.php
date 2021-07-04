<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /** 
    * @var Comment
    */
    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function store(Request $request)
    {
        $comment = $request->all('post_id', 'text');
        $this->comment->create($comment);

        return redirect(route('posts.show', ['post_id' => $comment['post_id']]));
    }

    public function delete($comment_id, $post_id)
  {
    $this->comment->destroy($comment_id);

    return redirect(route('posts.show', ['post_id' => $post_id]));
  }
}
