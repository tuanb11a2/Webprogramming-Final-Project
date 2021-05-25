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

                $this->view('admin');
            }
		    else {
                $directory = getAbsolutePath();
                header("Location: http://$_SERVER[HTTP_HOST]$directory");
            }

		}

		public function listBook()
        {
            $books = $this->userModel->getAllBook();
            $this->view('adminListBook', $books);
        }

		public function addBook()
		{
			$this->view('adminAddBook');
		}

		public function addBookQuery()
		{
			// $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
			// if (in_array($fileExtension, $allowedfileExtensions)) {
			// 	...
			// }

			$uploadFileDir = "../tmp/fileupload/";

			//print_r($_POST);
			//print_r($_FILES);
			$title = $_POST["title"];
			$author = $_POST["author"];
			$description = $_POST["description"];
			$publisher = $_POST["publisher"];
			
			//Get thumbnail file
			$thumbnail["tmpPath"] = $_FILES['thumbnail']['tmp_name'];
			$thumbnail["name"] = $_FILES['thumbnail']['name'];
			$thumbnail["size"] = $_FILES['thumbnail']['size'];
			$thumbnail["type"] = $_FILES['thumbnail']['type'];
			$thumbnailNameCmps = explode(".",$thumbnail["name"]);
			$thumbnail["extension"] = strtolower(end($thumbnailNameCmps));
			$thumbnail["newFileName"] = md5(time() . $thumbnail["name"]) . '.' . $thumbnail["extension"];
			$thumbnail["path"] = $uploadFileDir . "thumbnail" . $thumbnail["newFileName"];
			if(!move_uploaded_file($thumbnail["tmpPath"], $thumbnail["path"])){
  				echo 'There was some error moving the thumbnail file to upload directory. Please make sure the upload directory is writable by web server.';
				exit(1);
			}
			//print_r($thumbnail);

			//Get PDF file
			$bookPDF["tmpPath"] = $_FILES['bookPDF']['tmp_name'];
			$bookPDF["name"] = $_FILES['bookPDF']['name'];
			$bookPDF["size"] = $_FILES['bookPDF']['size'];
			$bookPDF["type"] = $_FILES['bookPDF']['type'];
			$bookPDFNameCmps = explode(".",$bookPDF["name"]);
			$bookPDF["extension"] = strtolower(end($bookPDFNameCmps));
			$bookPDF["newFileName"] = md5(time() . $bookPDF["name"]) . '.' . $bookPDF["extension"];
			$bookPDF["path"] = $uploadFileDir . "bookPDF" . $bookPDF["newFileName"];
			if(!move_uploaded_file($bookPDF["tmpPath"], $bookPDF["path"])){
  				echo 'There was some error moving the book PDF file to upload directory. Please make sure the upload directory is writable by web server.';
				exit(1);
			}
			//print_r($bookPDF);

            $this->userModel->setTitle($title);
            $this->userModel->setAuthor($author);
            $this->userModel->setDescription($description);
            $this->userModel->setPublisher($publisher);
			$this->userModel->setThumbnail($thumbnail["path"]);
			$this->userModel->setBookPDF($bookPDF["path"]);
			print_r($this->userModel);
            $this->userModel->addBookToDb();
            $directory = getAbsolutePath();
            //header("Location: http://$_SERVER[HTTP_HOST]$directory");
		}
	}