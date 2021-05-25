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
		    echo $_SESSION['role'];
		    if ($_SESSION['role'] && $_SESSION['role'] == 1)
            {
//
                $this->view('admin');
            }
		    else {
                $directory = getAbsolutePath();
                header("Location: http://$_SERVER[HTTP_HOST]$directory");
            }

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
			//print_r($this->userModel);
            $this->userModel->addBookToDb();
            $directory = getAbsolutePath();
            header("Location: http://$_SERVER[HTTP_HOST]$directory");
		}
	}