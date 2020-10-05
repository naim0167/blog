<?php
include_once 'config/init.php';

$post = new Post();

$template = new Template('template/frontpage.php');
$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category) {
    $template->posts = $post->getByCategory($category);
    $template->title ='Jobs In '. $post->getCategory($category, 'categories')->name;
} else {
    $template->title ="All Post";
    $template->posts = $post->getAllJobs();
}
$template->categories = $post->getCategories();
echo $template;