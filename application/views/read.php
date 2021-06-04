<title>Read book</title>
<style>
    .reading-book-title {
        background-image: url("<?php echo LINK; ?>/image/category_banner_1.jpg");
    }
</style>
<div class="reading-page">
    <div class="reading-book-title">
        <h1>To all the boi i loved before</h1>
    </div>
    <div class="reading-section">
        <iframe src="<?php echo LINK; ?>/fileupload/bookPDF/7e51148422b0ce950e04df599d32b801.pdf"></iframe>
    </div>
    <div class="comment-section">
        <h3>Comment Section</h3>
        <!-- <div class="rating-section">
            <div id="reading-book-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p id="reading-book-review">120 Reviews</p> 
        </div> -->
        <div class="comment-container">
            <div class="comment-inner-element">
                <p class="commenter-name">Le Tuan</p>
                <div class="commenter-rating">
                    <!-- Star rating section -->
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="commenter-review">Book Very Hay</p>
            </div>
            <div class="comment-inner-element">
                <p class="commenter-name">Thanh Dat</p>
                <div class="commenter-rating">
                    <!-- Star rating section -->
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p class="commenter-review">Book Not Very Hay</p>
            </div>
            <?php
            // var_dump($_SESSION);
                if(isset($_SESSION["valid"])){ ?>
            <div class="your-comment-inner-element">
                <p class="commenter-name">You Are Nhat Linh</p>
                <p style="font-weight: bold;">Create/Update Your Review</p>
                <!-- <form id="submit-review"> -->
                    <table>
                        <tr>
                            <td><label for="your-rate">Rating:</label></td>
                            <td><select name="your-rate" id="your-rate">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="your-review">Comment:</label></td>
                            <td><textarea id="your-review" name="your-review"  rows="5"></textarea></td>
                        </tr>
                    <tr>
                        <td></td>
                    <td><input type="submit" value="Submit" id="submit-review-btn"></td>
                    </tr>
                    </table>
                <!-- </form> -->
            </div>
            <?php } ?>
        </div>
    </div>
</div>
