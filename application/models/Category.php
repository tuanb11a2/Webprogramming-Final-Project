<?php


class Category extends Model
{

    private $category = array();

    function __construct()
    {
        parent::__construct();
    }

    public function setCategory(array $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM category";
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }

}