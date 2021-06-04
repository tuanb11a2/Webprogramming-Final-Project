<div class="header">
    <header>
        <div class="header-logo">
            <a href="#">
                <img src="<?php echo $actual_link; ?>/image/logo.png" alt="logo">
            </a>
        </div>
        <div class="search-bar">
            <form class="search-bar-form" action="<?php echo LINK; ?>/book/bookSearchByName" method="POST">
                <input type="text" placeholder="Search book by author or publisher" name="search">
                <button type="submit"><i class="fa fa-search fa-lg"></i></button>
            </form>
        </div>
        <div class="signin-logout">
            <p>Welcome, <?php echo $_SESSION["username"] ?></p>
            <a href="<?php echo LINK ?>/login/logout" class="signin-logout-btn">Logout</a>
        </div>
    </header>
    <nav id="navigator">
        <ul id="main-menu">
            <li><a href="<?php echo LINK; ?>/home">HOME</a></li>
            <li><a href="<?php echo LINK; ?>/book">BOOKS</a></li>
            <!-- <li><a href="<?php echo LINK; ?>/category">CATEGORY</a></li> -->
            <li><a href="<?php echo LINK; ?>/about">ABOUT</a></li>
        </ul>
    </nav>
</div>