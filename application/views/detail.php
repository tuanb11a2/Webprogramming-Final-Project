<?php
    function printStart($num,$flag){
        $empty = 0;
        for($i = 0;$i < $num-$flag;$i++){
            echo "<i class='fas fa-star'></i>";
        }
        if($flag == 1){
            echo "<i class='fas fa-star-half-alt'></i>";
        }
        for($empty = 0;$empty < 5 - $num - $flag ;$empty++){
            echo "<i class='far fa-star'></i>";
        }
    }

    function getStars($rating){
        $num = 0;
        if($rating >= 0 && $rating < 0.5){
            printStart($rating,0);
        }else if($rating >= 0.5 && $rating < 1){
            printStart($rating,1);
        }else if($rating >= 1 && $rating < 1.5){
            printStart($rating,0);
        }else if($rating >= 1.5 && $rating < 2){
            printStart($rating,1);
        }else if($rating >= 2 && $rating < 2.5){
            printStart($rating,0);
        }else if($rating >= 2.5 && $rating < 3){
            printStart($rating,1);
        }else if($rating >= 3 && $rating < 3.5){
            printStart($rating,0);
        }else if($rating >= 3.5 && $rating < 4){
            printStart($rating,1);
        }else if($rating >= 4 && $rating < 4.5){
            printStart($rating,0);
        }else if($rating >= 4.5 && $rating < 5){
            printStart($rating,1);
        }else if($rating == 5){
            printStart($rating, 0);
        }else{
            echo "Error value";
        }
    }
?>
<title><?php echo $data[0]["Book"]["title"]; ?></title>
<div class="book_detail_section">
    <div class="book_detail_section_1">
        <div class="window__slider__img-container">
            <img src="<?php echo LINK."/".$data[0]["Book"]["thumbnail_address"]; ?>"/>
            <div class="window__right">
                <h1><?php echo $data[0]["Book"]["title"]; ?></h1>
                <p>By <?php echo $data[0]["Book"]["author"]; ?></p>
                <a href="<?php echo LINK."/read/".$data[0]["Book"]["book_id"]; ?>"><button>Read Book</button></a>
            </div>
        </div>
    </div>
    <div class="book_detail_section_2">
        <div class="book_detail_section_2_nav">
            <input type="button" value="Description" id="book_detail_description_button" class="book_detail_button_section2 book_detail_description_button_chose" onclick='book_detail_section_2("description")'>
            <input type="button" value="Author/Publisher" id="book_detail_author_button" class="book_detail_button_section2" onclick='book_detail_section_2("author")'>
            <input type="button" value="Rating" id="book_detail_review_button" class="book_detail_button_section2" onclick='book_detail_section_2("review")'>
        </div>
        <div class="book_detail_section_2_text_section">
            <div id="book_detail_2_description" class="book_detail_section_2_item book_detail_section_2_item_show">
                <p><?php echo $data[0]["Book"]["description"]; ?></p>
            </div>
            <div id="book_detail_2_author" class="book_detail_section_2_item">
                <p>Author: <?php echo $data[0]["Book"]["author"]; ?></p>
                <p>Publisher: <?php echo $data[0]["Book"]["publisher"]; ?></p>
            </div>
            <div id="book_detail_2_review" class="book_detail_section_2_item">
                <div class="card-rating">
                    <?php
                        getStars($data[0]["Book"]["rating"])
                    ?>
                    <!-- Star rating section
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i> -->
                </div>

                <p><span><?php echo $data[0]["Book"]["number_of_review"]; ?></span> Reviews</p> <!-- Number of reviews -->
                <div class="card-comment-container">
                    
                <?php if(isset($data[1])){
                    if($data[1] == 'NULL'){ ?>
                <div class="comment-inner-element">
                    <p class="commenter-name">There are no comment on this book. Give us your thought now. </p>
                </div>
            <?php }else{
                    for($i = 0;$i < count($data[1]);$i++){ ?>
                <div class="comment-inner-element">
                    <p class="commenter-name"><?php echo $data[1][$i]["C"]["name"]; ?></p>
                    <div class="commenter-rating">
                        <!-- Star rating section -->
                        <?php getStars($data[1][$i]["R"]["rating"]); ?>
                    </div>
                    <p class="commenter-review"><?php echo $data[1][$i]["R"]["review"]; ?></p>
                </div>
            <?php }}} ?>
                </div>
            </div>
        </div>

    </div>
</div>