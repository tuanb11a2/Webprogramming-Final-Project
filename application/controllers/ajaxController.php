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
                "category" => array(),      // (1,2,3) of ("1", "2", "3") --> see line 48
                "publisher" => array(),     // ("NXB a", "NXB b")
                "author" => array(),        // ("linh", "tuan", "dat")
                "rating" => 0,              // 0.0, 1.0, 2.0, 3.0, 4.0, 5.0
                "order" => "popularity",    // "popularity", "old", "new", "name"
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
                    if($a=="publisher"||$a=="author"){
                        array_push($filter1[$a], $split[$i]);
                    }elseif($a=="category"){
                        array_push($filter1[$a], intval($split[$i]));   // change the type of category array here: string, int...
                    }elseif($a=="order"){
                        $filter1[$a] = $split[$i];
                    }else{
                        $filter1[$a] = floatval($split[$i]);            // change the type of rating to double
                    }
                }
            }
            echo 'ajax-filter-result-start';
            var_dump($filter1);
            echo "ajax-filter-result-end";
        }
    }