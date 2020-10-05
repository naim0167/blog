<?php
class Cookie {
    private $db;
    private $isLoggedIn;
    private $cookie;
    public function __construct() {
        $this->db = new Database();
//        $this->cookie = $_COOKIE['username'];
    }
    public function rememberUser($cookie){
        $this->db->query("SELECT * FROM users WHERE username = :username");
        $this->db->bind(':username',  $cookie);
        //Assign result set
        $row = $this->db->single();
        return $row;
        if(!empty($row)){
        $_SESSION['username'] = $_SESSION['username'];
        } else
        {session_destroy();}
    }
}