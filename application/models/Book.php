<?php  
	/**
	 * 
	 */
	class Book extends Model
	{
        private $title;
        private $author;
        private $description;
        private $publisher;
        private $thumbnail;
        private $PDF;

		function __construct()
		{
			parent::__construct();
		}

		public function setTitle($title){
		    $this->title = $title;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setAuthor($author){
            $this->author = $author;
        }

        public function getAuthor(){
            return $this->author;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function getDescription(){
            return $this->description;
        }

        public function setPublisher($publisher){
            $this->publisher = $publisher;
        }

        public function getPublisher(){
            return $this->publisher;
        }

        public function setThumbnail($thumbnail){
		    $this->thumbnail = $thumbnail;
        }

        public function getThumbnail(){
            return $this->thumbnail;
        }

        public function setBookPDF($bookPDF){
		    $this->PDF = $bookPDF;
        }

        public function getBookPDF(){
            return $this->PDF;
        }

		function getAllBook() {
			$sql = "SELECT * FROM `book`";
			if ($this->db) {
				return $this->db->query($sql);
			}
			return NULL;
		}

        function getBookById($id) {
            $sql = "SELECT * FROM `book` WHERE book_id = ". $id ." ";
            echo $sql;
            if ($this->db) {
                return $this->db->query($sql);
            }
            return NULL;
        }

		function getBookByName($bookName) {
            $sql = "SELECT * FROM `book` WHERE title LIKE '%". $bookName ."%' ";
            echo $sql;
            if ($this->db) {
                return $this->db->query($sql);
            }
            return NULL;
        }

		function addBookToDb() {
		    $sql = "INSERT INTO `book` 
                    (`book_id`, `title`, `author`, `description`, `rating`, `number_of_review`, `publisher`, `thumbnail_address`, `bookPDF`) 
                    VALUES 
                    (NULL, '" . $this->title . "','" . $this->author . "','" . $this->description . "', '0', '0', '" . $this->publisher . "', '". $this->thumbnail . "', '".$this->PDF."');";
		    //echo $sql;
            if ($this->db) {
                return $this->db->query($sql);
            }
            return NULL;
        }

        function deleteBook($id) {
		    $sql = "DELETE FROM `book` WHERE book_id = ".$id;
            if ($this->db) {
                return $this->db->query($sql);
            }
            return NULL;
        }


	}