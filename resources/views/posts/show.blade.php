@extends('layouts.app')

 @section('title', $post->title)

 @section('content')

 <div><a href="/posts"><Назад</a></div>
  <br>
    <div class="item">
        <div><h2>{{ $post->title }}</h2></div>
        <br>
        <div> {{ $post->text }}</div>
    </div>
    <div>
        <hr>
        <h2>Комментарии к новости</h2>
        <br>
        <div>
            @foreach ($post->comments as $comment)
                <div>
                    {{ $comment->text }}
                    <a href="{{ route('comments.delete', ['comment_id' => $comment->id, 'post_id' => $post->id]) }}">Delete</a>
                </div>
                <br>
            @endforeach
        </div>
        <br>
        <form action="{{ route('comments.create') }}" method="post">
            {{ csrf_field() }}
                <input type="hidden" name="post_id" value="{{ $post->id }}" placeholder="Введите комментарий"></p>
              <p>Комментарий:
                <br>
                <textarea rows="10" cols="45" name="text" placeholder="Введите комментарий"></textarea></p>
            <p>
            <input type="submit" value="Разместить комментарий">
            </p>
          </form>
    </div>

@endsection