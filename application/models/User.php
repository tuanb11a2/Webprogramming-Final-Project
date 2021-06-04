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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getAllUser()
    {
        $sql = "SELECT * from client";
        if ($this->db) {
            return $this->db->query($sql);
        }
        return NULL;
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM `client` WHERE client_id = " . $id;
        if ($this->db) {
            return $this->db->query($sql);
        }
        return NULL;
    }

    public function getLoginStatus()
    {
        $sql = "SELECT * FROM `client` WHERE email='".$this->email."'";/* AND password=".$this->password." ";*/
        if ($this->db) {
            if ($this->db->query($sql)){
                $userInfo = $this->db->query($sql);
                $this->role = $userInfo[0]["Client"]["role_id"];
                $this->name = $userInfo[0]["Client"]["name"];
                
                $salt = $userInfo[0]["Client"]["Salt"];
                $savedPwd = $userInfo[0]["Client"]["password"];
                
                $hashedPwd = hash("sha256", $this->password . $salt);
                // reset password to blank for security
                $this->setPassword("");
                if(strcmp($hashedPwd, $savedPwd) == 0) {
                    return 1;
                } else {
                    return 0;
                }
            }
            else{
                return 0;
            }
        }
        return 0;
    }

    public function getSigninStatus()
    {
        $sql = "SELECT * FROM `client` WHERE email='".$this->email."' ";
        if ($this->db) {
            if (count($this->db->query($sql))!=0){
                return 0;
            }else{
                $salt = $this->generageSalt();
                $hashedPwd = hash("sha256", $this->password . $salt);
                $sql_user_insert = "INSERT INTO `client`(`client_id`, `email`, `name`, `password`, `role_id`, `Salt`) 
                                    VALUES (NULL, 
                                            '".$this->email."', 
                                            '".$this->name."', 
                                            '".$hashedPwd."', 
                                            '2',
                                            '".$salt."')";
                // echo "<script type='text/javascript'>alert('$salt and $hashedPwd');</script>";
                if($this->db->query($sql_user_insert)){
                    $this->role = '2';
                    if($this->db){
                        $sql_subcrible_insert = "INSERT INTO `subcribelist`(`email`) VALUES ('".$this->email."')";
                        if($this->db->query($sql_subcrible_insert))
                            return 1;
                        return 0;
                    }
                    return 1;
                }
                else
                    return 0;
            }
        }
        return 0;
    }

    private function generageSalt(){
        return substr(md5(rand()), 0, 100);  
    }

}