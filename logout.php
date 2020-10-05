<?php
include_once 'config/init.php';

$user = new User();
    if($user->logout()){
        redirect('index.php','You have successfully logged out', 'Success!');
    }else{
        redirect('index.php','Something Went Wrong', 'Error!');
    }
