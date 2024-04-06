<?php 

namespace App;
use App\User; 

class Author extends User{

    public function createPost($title, $content, $categories) {
        return new Post($this, $title, $content, $categories);
    }

}