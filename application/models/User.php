<?php


class User extends Model
{

    private $email;
    private $password;
    private $role;
    private $name;

    function __construct()
    {
        parent::__construct();
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getLoginStatus()
    {
        $sql = "SELECT * FROM `client` WHERE email='".$this->email."' AND password=".$this->password." ";
        if ($this->db) {
            if ($this->db->query($sql)){
                $userInfo = $this->db->query($sql);
                $this->role = $userInfo[0]["Client"]["role_id"];
                $this->name = $userInfo[0]["Client"]["name"];
                return 1;
            }
            else{
                return 0;
            }
        }
        return 0;
    }


}