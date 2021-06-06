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
			$author = $this->userModel->getAllAuthor();
			$publisher = $this->userModel->getAllPublisher();
			$category = $this->model('Category')->getAllCategory();
//			var_dump($books);
			$this->view('category1');
			$this->view('category/category', $category);
			$this->view('category2');
			$this->view('category/publisher', $publisher);
			$this->view('category3');
			$this->view('category/author', $author);
			$this->view('category4');
			$this->view('card/category-card-div', $books);
			$this->view('category5');
		}

		public function bookSearchByName()
        {
//            var_dump($_POST);
            $bookName = $_POST["search"];

            $books = $this->userModel->getBookByName($bookName);
//            var_dump($books);
            $this->view('category', $books);
        }
	}
