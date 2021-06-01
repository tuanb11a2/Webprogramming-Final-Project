<div class="header">
    <header>
        <div class="header-logo">
            <a href="#">
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
                    <li><a href="#">Res 2</a></li>
                    <li><a href="#">Res 2</a></li>
                    <li><a href="#">Res 2</a></li>
                    <li><a href="#">Res 2</a></li>
                    <li><a href="#">Res 2</a></li>
                    <li><a href="#">Res 2</a></li>
                    <li><a href="#">Res 2</a></li>
                    <li><a href="#">Res 2</a></li>
                    <li><a href="#">Res 2</a></li>
                </ul>
            </div>
        </div>
        <div class="signin-logout">
            <a href="#" class="signin-logout-btn">Sign In</a>
        </div>
    </header>
    <nav id="navigator">
        <ul id="main-menu">
            <li><a href="#">HOME</a></li>
            <li><a href="#">BOOK</a></li>
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
            <li><a href="#">ABOUT</a></li>
        </ul>
    </nav>
</div>
<script>
    
function showSearchSuggestion(value){
    var suggestion = document.getElementById("search-result-id");
    value = value.trim();
    if(value.length == 0){
        suggestion.classList.remove("search-result-display")
      return;
    }else{
      var suggestionWidth = document.getElementById("search-bar-id").offsetWidth;
      // alert(suggestionWidth);
      // return
      suggestion.classList.remove("search-result-display")
      var xmlhttp = new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("search-result-ajax-item").innerHTML = this.responseText;
                // alert(this.responseText);
				suggestion.classList.add("search-result-display")
                suggestion.style.width = suggestionWidth.toString() + "px"
			}
		};
		xmlhttp.open("GET", "<?php echo LINK; ?>/book/ajaxBookByName", true);
		xmlhttp.send();
    }
}
</script>