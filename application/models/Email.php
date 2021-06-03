<?php


class Email extends Model
{
    private $email;

    function __construct()
    {
        parent::__construct();
    }

    public function setCategory($email)
    {
        $this->email = $email;
    }

    public function getCategory()
    {
        return $this->email;
    }

    public function updateEmail()
    {
        $sql = "INSERT INTO `subcribelist`(`email`) VALUES ('".$this->email."')";
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }
}