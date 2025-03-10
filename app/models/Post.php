<?php

namespace App\Models;

class Post
{
    public $id;
    public $title;
    public $content;

    public function __construct($id, $title, $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    // Simulação de um método que busca posts no banco de dados
    public static function getAllPosts()
    {
        return [
            new Post(1, 'Primeiro Post', 'Conteúdo do primeiro post'),
            new Post(2, 'Segundo Post', 'Conteúdo do segundo post')
        ];
    }
}
