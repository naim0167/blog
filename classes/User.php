<?php
class User {
    private $db;
    private $isLoggedIn;
    private $user;

    public function __construct() {
        $this->db = new Database();
    }

    public function createUser($data, $table) {
        $this->db->query("INSERT INTO {$table} (username, password, name, joined) VALUES (:username, :password, :name, :joined)");
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':joined', $data['joined']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function userUpdate($user_id, $data) {
        $this->db->query("    UPDATE users SET
                                    id = :id,
                                    username = :username,
                                    password = :password,
                                    name = :name, 
                                    joined = :joined,
                                    `group` = :group
                                    WHERE id = $user_id");
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':joined', $data['joined']);
        $this->db->bind(':group', $data['group']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getUser($username) {
        $this->db->query("SELECT * FROM users WHERE username = :username");
        $this->db->bind(':username', $username);
        //Assign result set
        $row = $this->db->single();
        return $row;
    }
    public function getUserById($id) {
        $this->db->query("SELECT * FROM users WHERE id = :id");
        $this->db->bind(':id', $id);
        //Assign result set
        $row = $this->db->single();
        return $row;

    }
    public function findUser($data, $table) {
        $this->db->query("SELECT * FROM {$table} WHERE username = :username");
        $this->db->bind(':username',  $data['username']);
        //Assign result set
        $row = $this->db->single();
        return $row;
    }

    public function login($data) {
        $user_row = $this->findUser($data,'users');
        $db_password = $user_row->password;

        if(password_verify($data['password'], $db_password)) {
            if(isset($data['remember'])){ setcookie('username',$data['username'], time()+60*60*24*30);}
            if($data['username']) {
                $_SESSION['username'] = $data['username'];
            }
            return true;
        }
        else {
            $this->logout();
        }
        return false;
    }

    public function isLoggedIn(){
        return (isset($_SESSION['username'])) ? true : false;
    }

    public function logout() {
        session_destroy();
        setcookie('username', '',time() - 3600);
        return true;
    }


}