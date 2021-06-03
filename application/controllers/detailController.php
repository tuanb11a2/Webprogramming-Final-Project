<?php  
	/**
	 * 
	 */
	class detailController extends Controller
	{
		public function __construct()
		{
			// $this->userModel = $this->model('Book');
		}

		public function index($param=0)
		{
			echo "$param";
			// if($param=="error")
				// echo "hello nhat linh";
			// else
			// echo "$param"."hello nhat linh";
			// $books = $this->userModel->getAllBook();
			$this->view('details');
		}
	}
?>