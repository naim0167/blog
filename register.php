<?php
include_once 'config/init.php';

$user = new User();
$template = new Template('template/register.php');

if(isset($_POST['submit'])) {
    $data = array();
    $data['username'] = $_POST['username'];
    $data['password'] = Hash::make($_POST['password']);
    $data['name'] = $_POST['name'];
    $data['joined'] = date('Y-m-d H:i:s');

    if ($user->createUser($data, 'users')){
        redirect('index.php','Your Post Has Been Listed', 'Success!');
    }else{
        redirect('index.php','Something Went Wrong', 'Error!');
    }
}



echo $template;