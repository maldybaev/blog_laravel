<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostCreateRequest;
use Illuminate\Http\Request;


class PostController extends Controller
{

 public function index()
  {
    $posts = [
      [
        'title' => 'Жесткие диски дорожают',
        'author' => 'Акыл',
        'date' => '28.05.21',
        'description' => 'В связи с увеличением популярности новой криптовалюты "Chia", стоимость качественных жестких дисков с большим объемом, растет не по дням а по часам. В странах Юго-восточной Азии уже наблюдается дефицит носителей размером более 8 ГБ'
      ],
      [
        'title' => 'Нефть падает',
        'author' => 'Иван',
        'date' => '26.05.21',
        'description' => 'Цены на нефть на мировых площадках существенно упал. На сегодняшний день баррель нефти стоит на 17 процентов дешевле, чем на этот же период в прошлом году'
      ],
      [
        'title' => 'В Бишкеке ремонтируют дороги',
        'author' => 'Александр',
        'date' => '25.05.21',
        'description' => 'В Бишкеке на некоторых улицах идут ремонтные работы. Бригады дорожного управления поменяют асфальтовое покрытие. Планируется обновление тротуаров прилегающих к ремонтируемым улицам'
      ]

    ];
    return view('posts.index', ['posts' => $posts]);
  }

    public function show($post_id)
  {
    $posts = [
      [
        'title' => 'Жесткие диски дорожают',
        'author' => 'Акыл',
        'date' => '28.05.21',
        'description' => 'В связи с увеличением популярности новой криптовалюты "Chia", стоимость качественных жестких дисков с большим объемом, растет не по дням а по часам. В странах Юго-восточной Азии уже наблюдается дефицит носителей размером более 8 ГБ'
      ],
      [
        'title' => 'Нефть падает',
        'author' => 'Иван',
        'date' => '26.05.21',
        'description' => 'Цены на нефть на мировых площадках существенно упал. На сегодняшний день баррель нефти стоит на 17 процентов дешевле, чем на этот же период в прошлом году'
      ],
      [
        'title' => 'В Бишкеке ремонтируют дороги',
        'author' => 'Александр',
        'date' => '25.05.21',
        'description' => 'В Бишкеке на некоторых улицах идут ремонтные работы. Бригады дорожного управления поменяют асфальтовое покрытие. Планируется обновление тротуаров прилегающих к ремонтируемым улицам'
      ]

    ];
    $post = $posts[$post_id];
    return view('posts.show', ['post' => $post]);
  }

  public function create()
  {
    return view('posts.create');
  }

  public function store(PostCreateRequest $request)
  {
    $title = $request->post('title');
    $description = $request->post('description');
  }

    public function edit()
  {
    return view('posts.edit');
  }

    public function delete()
  {
    return view('posts.delete');
  }

}

?>