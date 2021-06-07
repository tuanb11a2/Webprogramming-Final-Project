<?php
ob_start();
session_start();
//session_destroy();

function getAbsolutePath() {
	if(isset($_SERVER["REQUEST_URI"])){
		$tmp = rtrim($_SERVER["REQUEST_URI"], '/');
		$tmp2 = explode('/', $tmp);
		return "/".$tmp2[1];
	}
}

$directory = getAbsolutePath();
$actual_link = "http://$_SERVER[HTTP_HOST]$directory";

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

define('LINK', $actual_link);

if (isset($_GET['url'])) {
	$url = $_GET['url'];
}


//require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
require_once(ROOT . DS . 'library' . DS . 'Route.php');
require_once(ROOT . DS . 'library' . DS . 'Controller.php');
require_once(ROOT . DS . 'library' . DS . 'Model.php');
require_once(ROOT . DS . 'library' . DS . 'Database.php');
require_once(ROOT . DS . 'config' . DS . 'config.php');

//$init = new Route();
?>

<!DOCTYPE html>
<html>

<head>

	<!-- <title>Home page</title> -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/slider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/slider1.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/home.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/category.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/card.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/header.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/footer.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/login.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/card-slider-2.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/latest-publish-button.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/details.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/admin.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/read.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/aboutus.css" type="text/css">
    <link rel="stylesheet" href="<?php echo LINK; ?>/css/loginsignupfailed.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
	<?php
    //print_r($_SESSION);
//    require_once '../application/views/header/header.php';
    if (isset($_SESSION["username"])){
//        echo "Welcome" . $_SESSION["username"];
        require_once '../application/views/header/headerUser.php';
    }
    else
    {
        require_once '../application/views/header/header.php';
    }
	$init = new Route();
	require_once '../application/views/footer/footer.php';
	?>
	<script type="text/javascript" src="<?php echo LINK; ?>/js/slider.js"></script>
	<script type="text/javascript" src="<?php echo LINK; ?>/js/slider1.js"></script>
	<script type="text/javascript" src="<?php echo LINK; ?>/js/header.js"></script>
	<script src="<?php echo LINK; ?>/js/login.js"></script>
    <script src="<?php echo LINK; ?>/js/category.js"></script>
    <script src="<?php echo LINK; ?>/js/details.js"></script>
	<script type="text/javascript" src="<?php echo LINK; ?>/js/card-slider.js"></script>
</body>

</html>