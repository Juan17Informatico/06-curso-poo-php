<?php 

include __DIR__ . "/vendor/autoload.php";

use App\Author;
use App\Category;
use App\Post;

$author = new Author("JohnDoe");
$post = $author->createPost(
    "Introducción a PHP",
    "PHP es un lenguaje de programación de propósito general ampliamente utilizado para el desarrollo web.",
    [new Category("PHP"), new Category("Desarrollo Web")]
);

echo "Autor: " . $post->getAuthor()->getUsername() . "\n";
echo "Título: " . $post->getTitle() . "\n";
echo "Contenido: " . $post->getContent() . "\n";
echo "Categorías: ";
foreach ($post->getCategories() as $category) {
    echo $category->getName() . ", ";
}