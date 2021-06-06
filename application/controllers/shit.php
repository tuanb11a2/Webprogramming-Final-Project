<html>

<head>
    <title>Online PHP Script Execution</title>
</head>

<body>
    <?php
    $filter1 = array(
        "category" => array(),      // (1,2,3) of ("1", "2", "3") --> see line 48
        "publisher" => array(),     // ("NXB a", "NXB b")
        "author" => array(),        // ("linh", "tuan", "dat")
        "rating" => 0,              // 0.0, 1.0, 2.0, 3.0, 4.0, 5.0
        "order" => "old",    // "old", "new", "name"
    );
    function getBookByFilter($filter)
    {
        $sql = "SELECT * FROM `book`";
        if (isset($filter)) {
            if (count($filter["category"]) > 0 || count($filter["publisher"]) > 0 || count($filter["author"]) > 0 || $filter["rating"] > 0)
                $sql = $sql . " WHERE ";
            $and = 0;
            if (count($filter["category"]) > 0) {                                 //Category filter
                $tmp_sql = "(book_id IN (SELECT book_id FROM 'bookCategory' WHERE category IN (";
                $i = 0;
                foreach ($filter["category"] as $value) {
                    $tmp_sql = $tmp_sql . "'" . $value . "'";
                    if (++$i != count($filter["category"])) {
                        $tmp_sql = $tmp_sql . ",";
                    }
                }
                $tmp_sql = $tmp_sql . "))) ";
                $sql = $sql . $tmp_sql;
                $and = 1;
            }

            if (count($filter["publisher"]) > 0) {                             //Publisher filter
                if ($and == 1)
                    $tmp_sql = "AND (publisher IN (";
                else if ($and == 0)
                    $tmp_sql = " (publisher IN (";
                $i = 0;
                foreach ($filter["publisher"] as $value) {
                    $tmp_sql = $tmp_sql . "'" . $value . "'";
                    if (++$i != count($filter["publisher"])) {
                        $tmp_sql = $tmp_sql . ",";
                    }
                }
                $tmp_sql = $tmp_sql . ")) ";
                $sql = $sql . $tmp_sql;
                $and = 1;
            }

            if (count($filter["author"]) > 0) {                                 //Author filter
                if ($and == 1)
                    $tmp_sql = "AND (author IN (";
                else if ($and == 0)
                    $tmp_sql = " (author IN (";
                $i = 0;
                foreach ($filter["author"] as $value) {
                    $tmp_sql = $tmp_sql . "'" . $value . "'";
                    if (++$i != count($filter["author"])) {
                        $tmp_sql = $tmp_sql . ",";
                    }
                }
                $tmp_sql = $tmp_sql . ")) ";
                $sql = $sql . $tmp_sql;
                $and = 1;
            }

            if ($filter["rating"] != 0) {                                        //Rating filter
                if ($and == 1)
                    $sql = $sql . "AND rating >= " . $filter["rating"];
                else if ($and == 0)
                    $sql = $sql . " rating >= " . $filter["rating"];
            }

            if ($filter["order"] == "old") {
                //Default
            } elseif ($filter["order"] == "new") {
                $sql = $sql . " ORDER BY book_id DESC";
            } elseif ($filter["order"] == "name") {
                $sql = $sql . " ORDER BY name DESC";
            }
            return $sql;
            // if ($this->db) {
            //     return $this->db->query($sql);
            // }else{
            //     return NULL;
            // }
        } else {
            return $sql;
        }
    }
    $book = getBookByFilter($filter1);
    echo $book;
    ?>
</body>

</html>