<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public $posts = [
        [
            'id' => 1,
            'title' => 'Belajar Laravel Menyenangkan!',
            'content' => 'Laravel membuat pengembangan web menjadi mudah...'
        ],
        [
            'id' => 2,
            'title' => 'MVC dalam Laravel',
            'content' => 'Model-View-Controller adalah...'
        ],
        [
            'id' => 3,
            'title' => 'Mengenal Routing di Laravel',
            'content' => 'Routing memungkinkan kita menentukan URL dan aksi yang dijalankan...'
        ],
        [
            'id' => 4,
            'title' => 'Eloquent ORM: Cara Mudah Akses Database',
            'content' => 'Eloquent menyediakan cara sederhana untuk berinteraksi dengan database...'
        ],
        [
            'id' => 5,
            'title' => 'Blade Templating Engine',
            'content' => 'Blade adalah templating engine powerful yang disediakan Laravel...'
        ],
    ];

    public function index()
    {
        $posts = $this->posts;
        return view('blog.index', compact('posts'));
    }

    public function detail($id)
    {
        $post = $this->posts[$id];
        return view('blog.detail', compact('post'));
    }
}
