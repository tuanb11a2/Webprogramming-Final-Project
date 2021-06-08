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
        $sql1 = "SELECT number_of_review, rating FROM `book` WHERE book_id = ".$id_book;
            if($this->db) {
                $res = $this->db->query($sql1);
                $sql3 = "SELECT rating FROM `review` WHERE book_id = '".$id_book."' AND client_id = '".$id_client."'";
                if($this->db){
                    $res1 = $this->db->query($sql3);
                    $number_of_review = (int)$res[0]['Book']['number_of_review'];
                    $book_rating = (double)$res[0]['Book']['rating'];
                    $old_client_rating = (double)$res1[0]['Review']['rating'];
                    $new_number_of_review = $number_of_review - 1;
                    if($new_number_of_review>0){
                    $new_book_rating = ($number_of_review*$book_rating-$old_client_rating)/$new_number_of_review;
                    }
                    else{
                    $new_book_rating = 0;
                    }
                    $new_number_of_review = strval($new_number_of_review);
                    $new_book_rating = strval($new_book_rating);
                    $sql2 = "UPDATE `book` 
                        SET `rating`='".$new_book_rating."',`number_of_review`='".$new_number_of_review."'
                        WHERE `book_id` = ".$id_book;
                    if($this->db){
                        $this->db->query($sql2);
                    }
                }
            }
        $sql = "DELETE FROM `review` WHERE `book_id`=".$id_book." AND `client_id`=".$id_client;
        if($this->db){
            return $this->db->query($sql);
        }
        return NULL;
    }
}