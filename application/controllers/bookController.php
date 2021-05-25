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
			$this->view('category', $books);
		}
	}
