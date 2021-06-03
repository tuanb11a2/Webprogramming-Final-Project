<?php
    function printStart($num,$flag){
        $empty = 0;
        for($i = 0;$i < $num;$i++){
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
        }else{
            echo "Error value";
        }
    }

?>

<div class="category-card-div-outer">
    <div class="category-card-div" data-interval="1000">
        <div class="category-card-div-inner">

            <?php
                if(isset($data)){
                    foreach($data as $bookData){
                        foreach($bookData as $value){  ?>
                            <div class="card-item" id="card-item-0">
                                <div class="pad15">
                                    <div class="card card-div-item">
                                        <div class="card-img">
                                            <a href="#">
                                                <img src="<?php echo LINK."/".$value["thumbnail_address"]; ?>" alt="Card example">
                                            </a>
                                        </div>
                    
                                        <div class="card-caption">
                                            <h3>
                                                <a href="#"><?php echo $value["title"]; ?></a>
                                            </h3>
                                            <p><?php echo $value["author"]; ?></p>
                                            <div class="card-review-div">
                                                <div class="card-review"> 
                                                    <div class="card-rating">                   <!-- Star rating section -->
                                                        <?php getStars($value["rating"]); ?>
                                                    </div>
                    
                                                    <p><span><?php echo $value["number_of_review"]; ?></span> Reviews</p>             <!-- Number of reviews -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                }
            ?>
            

            <div class="card-item" id="card-item-1"> 
                <div class="pad15">
                    <div class="card card-div-item">
                        <div class="card-img">
                            <a href="#">
                                <img src="<?php echo LINK; ?>/image/card_image_2.png" alt="Card example">
                            </a>
                        </div>
                    
                        <div class="card-caption">
                            <h3>
                                <a href="#">Moon dance</a>
                            </h3>
                            <p>Le Tuan</p>
                            <div class="card-review-div">
                                <div class="card-review"> 
                                    <div class="card-rating">                   <!-- Star rating section -->
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>  
                                    </div>
                    
                                    <p><span>120</span> Reviews</p>             <!-- Number of reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-item" id="card-item-2">
                <div class="pad15">
                    <div class="card card-div-item">
                        <div class="card-img">
                            <a href="#">
                                <img src="image/card_image_2.png" alt="Card example">
                            </a>
                        </div>
                    
                        <div class="card-caption">
                            <h3>
                                <a href="#">Moon dance</a>
                            </h3>
                            <p>Le Tuan</p>
                            <div class="card-review-div">
                                <div class="card-review"> 
                                    <div class="card-rating">                   <!-- Star rating section -->
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>  
                                    </div>
                    
                                    <p><span>120</span> Reviews</p>             <!-- Number of reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-item" id="card-item-3">
                <div class="pad15">
                    <div class="card card-div-item">
                        <div class="card-img">
                            <a href="#">
                                <img src="image/card_image_3.png" alt="Card example">
                            </a>
                        </div>
                    
                        <div class="card-caption">
                            <h3>
                                <a href="#">Moon dance</a>
                            </h3>
                            <p>Le Tuan</p>
                            <div class="card-review-div">
                                <div class="card-review"> 
                                    <div class="card-rating">                   <!-- Star rating section -->
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>  
                                    </div>
                    
                                    <p><span>120</span> Reviews</p>             <!-- Number of reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-item" id="card-item-4">
                <div class="pad15">
                    <div class="card card-div-item">
                        <div class="card-img">
                            <a href="#">
                                <img src="image/card_image_1.png" alt="Card example">
                            </a>
                        </div>
                    
                        <div class="card-caption">
                            <h3>
                                <a href="#">Moon dance</a>
                            </h3>
                            <p>Le Tuan</p>
                            <div class="card-review-div">
                                <div class="card-review"> 
                                    <div class="card-rating">                   <!-- Star rating section -->
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>  
                                    </div>
                    
                                    <p><span>120</span> Reviews</p>             <!-- Number of reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-item" id="card-item-5">
                <div class="pad15">
                    <div class="card card-div-item">
                        <div class="card-img">
                            <a href="#">
                                <img src="image/card_image_3.png" alt="Card example">
                            </a>
                        </div>
                    
                        <div class="card-caption">
                            <h3>
                                <a href="#">Moon dance</a>
                            </h3>
                            <p>Le Tuan</p>
                            <div class="card-review-div">
                                <div class="card-review"> 
                                    <div class="card-rating">                   <!-- Star rating section -->
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>  
                                    </div>
                    
                                    <p><span>120</span> Reviews</p>             <!-- Number of reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>