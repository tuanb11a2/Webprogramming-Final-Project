<?php  
	/**
	 * 
	 */
	class ajaxController extends Controller
	{
		public function __construct()
		{
			$this->userModel = $this->model('Book');
		}
        public function ajaxBookByName($param){
            echo 'ajax-result-start';
            $result = $this->userModel->getBookName($param);
            if($result == NULL) echo "";
            else{
                for($i = 0; $i < count($result); $i++)
                    echo '<li><a href="'.LINK."/detail/".$result[$i]["Book"]["book_id"].'">'.$result[$i]["Book"]["title"]."</a></li>";
            }
            echo 'ajax-result-end';
		}
    }