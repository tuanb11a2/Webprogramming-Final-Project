<div class="header">
    <header>
        <div class="header-logo">
            <a href="<?php echo LINK; ?>/home">
                <img src="<?php echo LINK; ?>/image/logo.png" alt="logo">
            </a>
        </div>
        <div class="search-bar" id="search-bar-id">
            <form class="search-bar-form" action="<?php echo LINK; ?>/book/bookSearchByName" method="POST">
                <input autocomplete="off" id="search-suggestion" type="text" placeholder="Search book by name" name="search" onkeyup="showSearchSuggestion(this.value)">
                <button type="submit"><i class="fa fa-search fa-lg"></i></button>
            </form>
            <div class="search-result" id="search-result-id">
                <ul class="search-result-ajax" id="search-result-ajax-item">
                    <li><a href="#">Res 1</a></li>
                </ul>
            </div>
        </div>
        <div class="signin-logout">
            <a href="<?php echo LINK; ?>/login" class="signin-logout-btn">Sign In</a>
        </div>
    </header>
    <nav id="navigator">
        <ul id="main-menu">
            <li><a href="<?php echo LINK; ?>/home">HOME</a></li>
            <li><a href="<?php echo LINK; ?>/book">BOOK</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">CATEGORY<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content1" id="dropdown-content-id">
                        <a href="category.php">CATEGORY 1</a>
                        <a href="#">TUAN CON</a>
                        <a href="#">Science Fiction</a>
                    </div>
                </div>
            </li>
            <li><a href="<?php echo LINK; ?>/about">ABOUT</a></li>
        </ul>
    </nav>
</div>
<script>
    function showSearchSuggestion(value) {
        var suggestion = document.getElementById("search-result-id");
        value = value.trim();
        if (value.length == 0) {
            suggestion.classList.remove("search-result-display")
            return;
        } else {
            var suggestionWidth = document.getElementById("search-bar-id").offsetWidth;
            // alert(suggestionWidth);
            // return
            suggestion.classList.remove("search-result-display")
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    str = this.responseText
                    r_text = str.substring(
                        str.lastIndexOf('ajax-result-start') + 17,
                        str.lastIndexOf("ajax-result-end")
                    );
                    if (r_text != "") {
                        document.getElementById("search-result-ajax-item").innerHTML = r_text
                        suggestion.classList.add("search-result-display")
                        suggestion.style.width = suggestionWidth.toString() + "px"
                        if(document.getElementById("search-result-ajax-item").childNodes.length<=4){
                            document.getElementById("search-result-ajax-item").style.overflow = "unset"
                            suggestion.style.marginTop = (document.getElementById("search-result-ajax-item").childNodes.length*3+3).toString() +"rem"
                            document.getElementById("search-result-ajax-item").style.height = (document.getElementById("search-result-ajax-item").childNodes.length*3).toString() +"rem"
                        }else{
                            document.getElementById("search-result-ajax-item").style.overflow = "auto"
                            suggestion.style.marginTop = "17rem"
                            document.getElementById("search-result-ajax-item").style.height = "14rem"
                        }
                    }
                }
            };
            xmlhttp.open("GET", "<?php echo LINK; ?>/ajax/ajaxBookByName/" + value, true);
            xmlhttp.send();
        }
    }
</script>