<?php  
	/**
	 * 
	 */
	class loginController extends Controller
	{
		public function __construct(){
            if(isset($_SESSION['username'])){
            $directory = getAbsolutePath();
            header("Location: http://$_SERVER[HTTP_HOST]$directory");
            } else {
                $this->userModel = $this->model('User');
            }
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
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $this->userModel->getName();
                $_SESSION['role'] = $this->userModel->getRole();
                $directory = getAbsolutePath();
                header("Location: http://$_SERVER[HTTP_HOST]$directory");
            }
            else {
                $this->view('login/loginfailed');
            }
        }

        public function signupQuery(){
            $this->userModel->setEmail(trim($_POST["signup_email"]));
            $this->userModel->setPassword(trim($_POST["signup_pswd"]));
            $this->userModel->setName(trim($_POST["signup_name"]));
            // echo $this->userModel->getSigninStatus();
            // return;
            if ($this->userModel->getSigninStatus()){
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = $this->userModel->getName();
                $_SESSION['role'] = $this->userModel->getRole();
                // echo "Hello";
                $directory = getAbsolutePath();
                header("Location: http://$_SERVER[HTTP_HOST]$directory");
            } else {
                // sign up failed notification
                $this->view('login/signupfailed');
            }
        }

        public function logout()
        {
            session_destroy();
            session_start();
            $directory = getAbsolutePath();
            header("Location: http://$_SERVER[HTTP_HOST]$directory");
        }
	}
?>