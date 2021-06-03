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

		public function index($id)
		{
			$book = $this->userModel->getBookById($id);
			print_r($book);
			if( sizeof($book) == 0 ){
				header("Location: ".LINK."/book");
			}else{
				$this->view('details',$book);
			}
		}
	}
?>