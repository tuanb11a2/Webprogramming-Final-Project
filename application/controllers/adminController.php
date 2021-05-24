<?php  
	/**
	 * 
	 */
	class adminController extends Controller
	{
		public function __construct()
		{
			// echo "string";
		}

		public function index()
		{
			$this->view('admin');
		}

		public function addBook()
		{
			$this->view('adminAddBook');
		}
	}
?>