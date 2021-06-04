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
        public function ajaxBookFilter($param){
            $param = str_replace("phamnhatlinh", "/", $param);
            $param = str_replace("leanhtuan", " ", $param);
            $split = explode("/",$param);
            $filter1 = array(
                "category" => array(),
                "publisher" => array(),
                "author" => array(),
                "rating" => "0",
                "order" => "popularity", 
            ); 
            $a = "";
            for($i = 0; $i < count($split); $i++){
                if($split[$i]=="category"){
                    $a = "category";
                }elseif($split[$i]=="publisher"){
                    $a = "publisher";
                }elseif($split[$i]=="author"){
                    $a = "author";
                }elseif($split[$i]=="rating"){
                    $a = "rating";
                }elseif($split[$i]=="order"){
                    $a = "order";
                }else{
                    if($a=="category"||$a=="publisher"||$a=="author"){
                        array_push($filter1[$a], $split[$i]);
                    }else{
                        $filter1[$a] = $split[$i];
                    }
                }
            }
            echo 'ajax-filter-result-start';
            var_dump($filter1);
            echo "ajax-filter-result-end";
        }
    }