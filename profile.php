<?php
include_once 'config/init.php';

$user = new User();
$username = $_SESSION['username'];

if ($user->isLoggedIn() || isset($username)) {
    $template = new Template('template/profile.php');
    $template->userInformation = $user->getUser($username,'jobs');
    $u_id = $user->getUser($username,'jobs');
    $template->userid = $u_id->id;

    echo $template;
} else {
    redirect('index.php','Please Log In', 'Success!');
}
