<?php  
	/**
	 * 
	 */
	class mainController extends Controller
	{
		public function __construct()
		{
			// echo "main";
			$this->userModel = $this->model('Book');
		}

		public function index()
		{
			$books = $this->userModel->getAllBook();
			$this->view('home', $books);
		}
	}
?>