<?php
include_once 'config/init.php';
$user = new User();
$cookie = new Cookie();
if ($user->isLoggedIn() || isset($_COOKIE['username'])) {
    redirect('index.php','Your are already Logged In', 'Success!');
} else {
    $template = new Template('template/log-in.php');

    if(isset($_POST['submit'])) {
        $data = array();
        $data['username'] = $_POST['username'];
        $data['password'] =$_POST['password'];
        $data['remember'] =$_POST['remember'];

        if ($user->login($data)) {
            redirect('index.php','You have been logged in!', 'Success!');
        } else {
            redirect('index.php','Something Went Wrong', 'Error!');
        }
    }
    echo $template;
}
