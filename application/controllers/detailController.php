<?php  
	/**
	 * 
	 */
	class detailController extends Controller
	{
		public function __construct()
		{
			$this->userModel = $this->model('Book');
		}

		public function index($id=0)
		{
			$book = $this->userModel->getBookById($id);
			// print_r($book);
			// echo "<br>".$book[0]["Book"]["author"];
			if( sizeof($book) == 0 ){
				header("Location: ".LINK."/book");
			}else{
				$this->view('details',$book);
			}
		}
	}
?>