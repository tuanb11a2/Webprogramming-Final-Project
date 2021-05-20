<?php  
	/**
	 * 
	 */
	class loginController extends Controller
	{
		public function __construct()
		{
			// echo "string";
		}

		public function index()
		{
			$this->view('login/login');
		}
	}
?>