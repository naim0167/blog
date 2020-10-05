<?php
include_once 'config/init.php';

$post = new Post();

if(isset($_POST['del_id'])) {
    $del_id = $_POST['del_id'];
    if($post->delete($del_id, 'jobs')) {
        redirect('index.php', 'Post Deleted', 'success');
    } else {
        redirect('index.php', 'Post Not Deleted', 'error');
    }
}
$template = new Template('template/single-post.php');
$post_id = isset($_GET['id']) ? $_GET['id'] : null;


$template->post = $post->getPost($post_id,'jobs');
echo $template;