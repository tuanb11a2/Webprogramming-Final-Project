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

		public function bookSearchByName()
        {
            var_dump($_POST);
            $bookName = $_POST["search"];

            $books = $this->userModel->getBookByName($bookName);
//            var_dump($books);
            $this->view('category', $books);
        }
	}
