<?php  
	/**
	 * 
	 */
	class readController extends Controller
	{
		public function __construct()
		{
			$this->userModel = $this->model('Book');
		}

		public function index($id=0)
		{
			// $books = $this->userModel->getAllBook();
			$this->userModel->setBookId($id);
			echo $this->userModel->getBookId();
			$book = $this->userModel->getBookById($id);
			// print_r($book);
			// echo "<br>".$book[0]["Book"]["author"];
			if( sizeof($book) == 0 ){
				header("Location: ".LINK."/book");
			}else{
				$this->view('read',$book);
			}
		}

		public function comment($book_id){
			if(isset($_SESSION["client_id"])){
				if(isset($_POST["your-rate"])){
					$this->userModel->comment($book_id,$_SESSION["client_id"],$_POST["your-rate"],$_POST["your-review"]);
					header("Location: ".LINK."/detail/".$book_id);
				}else{
					echo "Error";
					//header("Location: ".LINK."/book");
				}
			}else{
				echo "Error";
				//header("Location: ".LINK."/book");
			}
		}
	}
?>