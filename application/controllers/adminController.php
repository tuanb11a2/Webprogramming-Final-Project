<?php  
	/**
	 * 
	 */
	class adminController extends Controller
	{
        /**
         * @var mixed
         */
        private $userModel;

        public function __construct()
		{
		    $this->userModel = $this->model('Book');
		}

		public function index()
		{
			$this->view('admin');
		}

		public function addBook()
		{
			$this->view('adminAddBook');
		}

		public function addBookQuery()
		{
//			print_r($_POST);
			$title = $_POST["title"];
			$author = $_POST["author"];
			$description = $_POST["description"];
			$publisher = $_POST["publisher"];
            $this->userModel->setTitle($title);
            $this->userModel->setAuthor($author);
            $this->userModel->setDescription($description);
            $this->userModel->setPublisher($publisher);
            $this->userModel->addBookToDb();
            $directory = getAbsolutePath();
            header("Location: http://$_SERVER[HTTP_HOST]$directory");
		}
	}