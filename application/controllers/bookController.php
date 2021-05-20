<?php  
	/**
	 * 
	 */
	class bookController extends Controller
	{
		public function __construct()
		{
			// echo "string";
		}

		public function index()
		{
			$this->view('category');
		}
	}
?>