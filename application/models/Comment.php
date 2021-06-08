<?php


class Comment extends Model
{
    private $review;
    private $rating;

    public function setReview($review)
    {
        $this->review = $review;
    }

    public function getReview()
    {
        return $this->review;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function getCommentByBookId($id)
    {
        $sql = "SELECT * FROM `review` WHERE `book_id`=".$id;
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }

    public function deleteComment($id_book, $id_client)
    {
        $sql = "DELETE FROM `review` WHERE `book_id`=".$id_book." AND `client_id`=".$id_client;
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }
}