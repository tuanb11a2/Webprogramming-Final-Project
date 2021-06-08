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
			if(intval($id) == 0){
				header("Location: ".LINK."/book");
			}
			$book = $this->userModel->getBookById($id);
			$comment = $this->userModel->getAllComment($id);

			if($book == NULL){
				header("Location: ".LINK."/book");
			}

			if($comment != NULL){
				array_push($book,$comment);
			}else{
				$comment = 'NULL';
				array_push($book,$comment);
			}
			$this->view('detail',$book);
		}
	}
?>