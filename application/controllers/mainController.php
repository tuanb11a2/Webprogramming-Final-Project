<?php  
	/**
	 * 
	 */
	class mainController extends Controller
	{
		public function __construct()
		{
			// echo "main";
		}

		public function index()
		{
			$this->view('home');
		}
	}
?>