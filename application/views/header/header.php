<div class="header">
    <header>
        <div class="header-logo">
            <a href="#">
                <img src="<?php echo $actual_link; ?>/image/logo.png" alt="logo">
            </a>
        </div>
        <div class="search-bar">
            <form class="search-bar-form" action="">
                <input type="text" placeholder="Search book by author or publisher" name="search">
                <button type="submit"><i class="fa fa-search fa-lg"></i></button>
            </form>
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