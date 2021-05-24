<?php  
	/**
	 * 
	 */
	class loginController extends Controller
	{
		public function __construct()
		{
			$this->userModel = $this->model('User');
		}

		public function index()
		{
			$this->view('login/login');
		}

		public function loginQuery()
        {
            $this->userModel->setEmail($_POST["email"]);
            $this->userModel->setPassword($_POST["password"]);
            if ($this->userModel->getLoginStatus())
            {
                echo "OK!";
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $this->userModel->getName();
                $_SESSION['role'] = $this->userModel->getRole();
                echo $_SESSION['username'];
            }
            $directory = getAbsolutePath();
            header("Location: http://$_SERVER[HTTP_HOST]$directory");
        }
	}
?>