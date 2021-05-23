<?php  
	/**
	 * 
	 */
	class bookController extends Controller
	{
		public function __construct()
		{
			$this->userModel = $this->model('Book');
		}

		public function index()
		{
			$books = $this->userModel->getAllBook();
			var_dump($books);
			$this->view('category', $books);
		}
	}
?>