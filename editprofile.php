<?php
include_once 'config/init.php';
$post = new Post();
$user = new User();

$user_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])) {
    $data = array();
    $data['id'] = $user_id;
    $data['name'] = $_POST['name'];
    $data['username'] = $_POST['username'];
    $data['password'] = Hash::make($_POST['password']);
    $data['joined'] = date('Y-m-d H:i:s');
    if ($user->userUpdate($user_id, $data)){
         redirect('index.php','Your Profile Has Been Updated', 'Success!');
    }else{
        redirect('index.php','Something Went Wrong', 'Error!');
    }
//    var_dump($data);
//    if ($user->userUpdate($user_id, $data)){
//        redirect('index.php','Your Profile Has Been Updated', 'Success!');
//    }else{
//        redirect('index.php','Something Went Wrong', 'Error!');
//    }
}

$template = new Template('template/profile-edit.php');
$template->userinfo = $user->getUserById($user_id);

echo $template;