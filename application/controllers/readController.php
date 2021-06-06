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
			$book = $this->userModel->getBookById($id);
			$comment = $this->userModel->getComment($id,$_SESSION["client_id"]);
			if( sizeof($book) == 0 ){
				header("Location: ".LINK."/book");
			}else{
				if($comment == NULL){
					$this->view('read',$book);
				}else{
					array_push($book,$comment[0]);
					$this->view('read',$book);
				}				
			}
			// print_r($book);
			// echo "<br>".$book[0]["Book"]["author"];	
		}

		public function comment($book_id){
			if(isset($_SESSION["client_id"])){
				if(isset($_POST["your-rate"])){
					$comment = $this->userModel->getComment($book_id,$_SESSION["client_id"]);
					if($comment == NULL){
						$this->userModel->createComment($book_id,$_SESSION["client_id"],$_POST["your-rate"],$_POST["your-review"]);
						header("Location: ".LINK."/detail/".$book_id);
					}else{
						$this->userModel->updateComment($book_id,$_SESSION["client_id"],$_POST["your-rate"],$_POST["your-review"]);
						header("Location: ".LINK."/detail/".$book_id);
					}
				}else{
					//echo "Error";
					header("Location: ".LINK."/book");
				}
			}else{
				//echo "Error";
				header("Location: ".LINK."/book");
			}
		}
	}
?>