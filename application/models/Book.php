<?php  
	/**
	 * 
	 */
	class Book extends Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function getAllBook() {
			$sql = "SELECT * FROM `book`";
			if ($this->db) {
				return $this->db->query($sql);
			}
			return NULL;
		}
	}
?>