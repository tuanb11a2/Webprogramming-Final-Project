<?php


class Category extends Model
{

    private $category = array();
    private $name;

    function __construct()
    {
        parent::__construct();
    }

    public function setCategory(array $category)
    {
        $this->category = $category;
    }
    public function setCategoryName($name)
    {
        $this->name = $name;
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
    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM category WHERE category_id =".$id;
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }

    public function editCategory($id)
    {

        $sql = "UPDATE `category` SET `category_name`='".$this->name."' WHERE category_id =". $id;
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }

    public function addCategory()
    {
        $sql = "INSERT INTO `category`(`category_id`, `category_name`) VALUES (NULL, '".$this->name."')";
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }

    public function deleteCategory($id)
    {

        $sql = "DELETE FROM `bookcategory` WHERE `category_id`=".$id;
        $this->db->query($sql);
        $sql = "DELETE FROM `category` WHERE category_id =". $id;
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }

}