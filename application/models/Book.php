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
        private $category = array();
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

        public function setCategory($category){
            $this->category = $category;
        }

        public function getCategory(){
            return $this->category;
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
            // echo $sql;
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

        function getBookName($name) {
            $sql = "SELECT * FROM `book` WHERE title LIKE '%". $name ."%' ";
            // echo $sql;
            if ($this->db) {
                return  $this->db->query($sql);
            }
            return NULL;
        }
        function getLatestInsertedBook(){
            $sql = "SELECT book_id FROM book ORDER BY book_id DESC LIMIT 1 ";
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
            if ($this->db) {
                if($this->db->query($sql)){
                    $book_id = $this->getLatestInsertedBook();
                    foreach($this->category as $category_value){
                        $sql = "INSERT INTO `bookcategory` (`book_id`, `category_id`) VALUES ('".$book_id[0]['Book']['book_id']."', '".$category_value."')";
                        $this->db->query($sql);
                    }
                };
            }
            return NULL;
        }

        function updateBook($id){
		    $sql = "UPDATE `book` 
                    SET `title`='".$this->title."',
                        `author`='".$this->author."',
                        `description`='".$this->description."',
                        `publisher`='".$this->publisher."',
                        `thumbnail_address`='".$this->thumbnail."',
                        `bookPDF`='".$this->PDF."' 
                    WHERE `book_id`=".$id;
            if ($this->db) {
                return $this->db->query($sql);
            }
            return NULL;
        }

        function updateCategory($book_id)
        {
            echo $book_id;
            $sql = "DELETE FROM `bookcategory` WHERE `book_id`=".$book_id;
            $this->db->query($sql);
            foreach($this->category as $category_key => $value){
                print("<pre>".print_r($category_key,true)."</pre>");
                $sql = "INSERT INTO `bookcategory` (`book_id`, `category_id`) VALUES ('".$book_id."', '".$value."')";
                $this->db->query($sql);
            }
            return;
        }

        function deleteBook($id) {
		    $sqlDeleteBookCategory = "DELETE FROM `bookcategory` WHERE book_id=".$id;
		    $sql = "DELETE FROM `book` WHERE book_id = ".$id;
            if ($this->db) {
                $this->db->query($sqlDeleteBookCategory);
                return $this->db->query($sql);
            }
            return NULL;
        }


	}