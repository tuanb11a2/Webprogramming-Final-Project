<?php


class Email extends Model
{
    private $email;

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

    public function getAllEmail()
    {
        $sql = "SELECT * FROM `subcribelist` WHERE 1";
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }

    public function updateEmail()
    {
        $sql = "INSERT INTO `subcribelist`(`email`) VALUES ('".$this->email."')";
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }

    public function deleteEmail()
    {
        $sql = "DELETE FROM `subcribelist` WHERE `email` = '".$this->email."'";
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }


}