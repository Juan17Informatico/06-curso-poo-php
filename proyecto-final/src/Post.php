<?php 

namespace App; 

class Post{

    protected $author;
    protected $title;
    protected $content;
    protected $categories;

    public function __construct($author, $title, $content, $categories) {
        $this->author = $author;
        $this->title = $title;
        $this->content = $content;
        $this->categories = $categories;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCategories() {
        return $this->categories;
    }

}
