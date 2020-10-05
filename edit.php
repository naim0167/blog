<?php
include_once 'config/init.php';

$post = new Post();
$post_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])) {
    $data = array();
    $data['job_title']=$_POST['job_title'];
    $data['company']=$_POST['company'];
    $data['category_id']=$_POST['category'];
    $data['description']=$_POST['description'];
    $data['location']=$_POST['location'];
    $data['salary']=$_POST['salary'];
    $data['contact_user']=$_POST['contact_user'];
    $data['contact_email']=$_POST['contact_email'];

    if ($post->update($post_id, $data, 'jobs')){
        redirect('index.php','Your Post Has Been Updated', 'Success!');
    }else{
        redirect('index.php','Something Went Wrong', 'Error!');
    }
} else {

}
$template = new Template('template/post-edit.php');

$template->post = $post->getPost($post_id,'jobs');
$template->categories = $post->getCategories();
echo $template;