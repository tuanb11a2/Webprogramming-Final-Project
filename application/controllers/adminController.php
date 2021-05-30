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

		public function roleValidation($view, $data){
//            echo $_SESSION['role'];
            if ($_SESSION['role'] && $_SESSION['role'] == 1)
            {
                $this->view($view, $data);
                return 1;
            }
            return 0;
        }

        public function redirectToMain(){
            $directory = getAbsolutePath();
            header("Location: http://$_SERVER[HTTP_HOST]$directory");
        }

        public function redirectToAdminListBook(){
            $directory = getAbsolutePath();
            header("Location: http://$_SERVER[HTTP_HOST]$directory/admin/listBook");
        }

		public function index()
		{
            if (!$this->roleValidation('admin', NULL)){
                $this->redirectToMain();
            }
		}

		public function listBook()
        {
            $books = $this->userModel->getAllBook();
            $this->view('adminListBook', $books);
            if (!$this->roleValidation('adminListBook', $books)){
                $this->redirectToMain();
            }
        }

		public function addBook()
		{
            if (!$this->roleValidation('adminAddBook', NULL)){
                $this->redirectToMain();
            }
		}

		public function addBookQuery()
		{
			$allowedthumbnailExtensions = array('jpg', 'png', ' jpeg');
			$allowedbookPDFExtensions = array('pdf');
			$directory = getAbsolutePath();
			// if (in_array($fileExtension, $allowedfileExtensions)) {
			// 	...
			// }

			$uploadFileDir = "../public/";

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
			if (!in_array($thumbnail["extension"], $allowedthumbnailExtensions)) {
				header("Location: http://$_SERVER[HTTP_HOST]$directory/admin/addBook?retry=thumbnail");
				//exit(1);
			}
			$thumbnail["newFileName"] = md5(time() . $thumbnail["name"]) . '.' . $thumbnail["extension"];
			$thumbnail["url"] = "fileupload/thumbnail/" . $thumbnail["newFileName"];
			$thumbnail["path"] = $uploadFileDir . $thumbnail["url"];
			if(!move_uploaded_file($thumbnail["tmpPath"], $thumbnail["path"])){
  				echo 'There was some error moving the thumbnail file to upload directory. Please make sure the upload directory is writable by web server.';
				exit(1);
			}

			//Get PDF file
			$bookPDF["tmpPath"] = $_FILES['bookPDF']['tmp_name'];
			$bookPDF["name"] = $_FILES['bookPDF']['name'];
			$bookPDF["size"] = $_FILES['bookPDF']['size'];
			$bookPDF["type"] = $_FILES['bookPDF']['type'];
			$bookPDFNameCmps = explode(".",$bookPDF["name"]);
			$bookPDF["extension"] = strtolower(end($bookPDFNameCmps));
			if (!in_array($bookPDF["extension"], $allowedbookPDFExtensions)) {
				header("Location: http://$_SERVER[HTTP_HOST]$directory/admin/addBook?retry=bookPDF");
				//exit(1);
			}
			$bookPDF["newFileName"] = md5(time() . $bookPDF["name"]) . '.' . $bookPDF["extension"];
			$bookPDF["url"] = "fileupload/bookPDF/" . $bookPDF["newFileName"];
			$bookPDF["path"] = $uploadFileDir . $bookPDF["url"];
			if(!move_uploaded_file($bookPDF["tmpPath"], $bookPDF["path"])){
  				echo 'There was some error moving the book PDF file to upload directory. Please make sure the upload directory is writable by web server.';
				exit(1);
			}
			//print_r($bookPDF);

            $this->userModel->setTitle($title);
            $this->userModel->setAuthor($author);
            $this->userModel->setDescription($description);
            $this->userModel->setPublisher($publisher);
			$this->userModel->setThumbnail($thumbnail["url"]);
			$this->userModel->setBookPDF($bookPDF["url"]);
			//print_r($this->userModel);
            $this->userModel->addBookToDb();
            header("Location: http://$_SERVER[HTTP_HOST]$directory/book");
		}

		public function editBook($id)
        {
            $book = $this->userModel->getBookById($id);

            if (!$this->roleValidation('adminEditBook', $book))
            {
                $this->redirectToMain();
            }
        }

        public function editBookQuery()
        {
            $allowedthumbnailExtensions = array('jpg', 'png', ' jpeg');
            $allowedbookPDFExtensions = array('pdf');
            $directory = getAbsolutePath();
            $uploadFileDir = "../public/";

            if ($_FILES["thumbnail"]["size"] != 0)
            {
                //Get thumbnail file
                $thumbnail["tmpPath"] = $_FILES['thumbnail']['tmp_name'];
                $thumbnail["name"] = $_FILES['thumbnail']['name'];
                $thumbnail["size"] = $_FILES['thumbnail']['size'];
                $thumbnail["type"] = $_FILES['thumbnail']['type'];
                $thumbnailNameCmps = explode(".",$thumbnail["name"]);
                $thumbnail["extension"] = strtolower(end($thumbnailNameCmps));
                if (!in_array($thumbnail["extension"], $allowedthumbnailExtensions)) {
                    header("Location: http://$_SERVER[HTTP_HOST]$directory/admin/addBook?retry=thumbnail");
                    exit(1);
                }
                $thumbnail["newFileName"] = md5(time() . $thumbnail["name"]) . '.' . $thumbnail["extension"];
                $thumbnail["url"] = "fileupload/thumbnail/" . $thumbnail["newFileName"];
                $thumbnail["path"] = $uploadFileDir . $thumbnail["url"];
                if(!move_uploaded_file($thumbnail["tmpPath"], $thumbnail["path"])){
                    echo 'There was some error moving the thumbnail file to upload directory. Please make sure the upload directory is writable by web server.';
                    exit(1);
                }
                echo $thumbnail["url"];
                echo $_POST["oldBookThumbnail"];
                if (unlink($_POST["oldBookThumbnail"])){
                    echo "succesfully deleted";
                }
            }
            else
            {
                $thumbnail["url"] = $_POST["oldBookThumbnail"];
            }
            if ($_FILES["bookPDF"]["size"] != 0)
            {
                $bookPDF["tmpPath"] = $_FILES['bookPDF']['tmp_name'];
                $bookPDF["name"] = $_FILES['bookPDF']['name'];
                $bookPDF["size"] = $_FILES['bookPDF']['size'];
                $bookPDF["type"] = $_FILES['bookPDF']['type'];
                $bookPDFNameCmps = explode(".",$bookPDF["name"]);
                $bookPDF["extension"] = strtolower(end($bookPDFNameCmps));
                if (!in_array($bookPDF["extension"], $allowedbookPDFExtensions)) {
                    header("Location: http://$_SERVER[HTTP_HOST]$directory/admin/addBook?retry=bookPDF");
                    //exit(1);
                }
                $bookPDF["newFileName"] = md5(time() . $bookPDF["name"]) . '.' . $bookPDF["extension"];
                $bookPDF["url"] = "fileupload/bookPDF/" . $bookPDF["newFileName"];
                $bookPDF["path"] = $uploadFileDir . $bookPDF["url"];
                if(!move_uploaded_file($bookPDF["tmpPath"], $bookPDF["path"])){
                    exit(1);
                }
                echo "\n".$bookPDF["url"];
                if (unlink($_POST["oldBookPDF"])){
                    echo "succesfully deleted";
                }
            }

            else
            {
                echo "No bookPDF";
                $bookPDF["url"] = $_POST["oldBookPDF"];
            }

            $this->userModel->setTitle($_POST["title"]);
            $this->userModel->setAuthor($_POST["author"]);
            $this->userModel->setDescription($_POST["description"]);
            $this->userModel->setPublisher($_POST["publisher"]);
            $this->userModel->setThumbnail($thumbnail["url"]);
            $this->userModel->setBookPDF($bookPDF["url"]);

            $this->userModel->updateBook($_POST["book_id"]);
            header("Location: http://$_SERVER[HTTP_HOST]$directory/book");

        }

        public function deleteBook($id)
        {
            if ($_SESSION['role'] && $_SESSION['role'] == 1) {
                $this->userModel->deleteBook($id);
            }
            $this->redirectToMain();
        }

        public function takeThumbnailPath($fileArray)
        {
            $thumbnail["name"] = $fileArray['name'];
            $thumbnail["size"] = $fileArray['size'];
            $thumbnail["type"] = $fileArray['type'];
            $thumbnailNameCmps = explode(".",$thumbnail["name"]);
            $thumbnail["extension"] = strtolower(end($thumbnailNameCmps));
            $thumbnail["newFileName"] = md5(time() . $thumbnail["name"]) . '.' . $thumbnail["extension"];
            $thumbnail["url"] = "fileupload/thumbnail/" . $thumbnail["newFileName"];

            return $thumbnail["url"];
        }
	}