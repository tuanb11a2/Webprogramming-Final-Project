<?php
function getAbsolutePath() {
	if(isset($_SERVER["REQUEST_URI"])){
		$tmp = rtrim($_SERVER["REQUEST_URI"], '/');
		$tmp2 = explode('/', $tmp);
		return "/".$tmp2[1];
	}
}

$directory = getAbsolutePath();
$actual_link = "http://$_SERVER[HTTP_HOST]$directory";
//echo $actual_link;
//echo $_SERVER["HTTP_HOST"];  //default localhost
//echo $_SERVER["REQUEST_URI"];	//default Webprogramming-Final-Project

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

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

	<title>Home page</title>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/slider.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/slider1.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/home.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/category.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/card.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/header.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/footer.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/login.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/card-slider-2.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $actual_link; ?>/css/latest-publish-button.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
	<?php
	require_once '../application/views/header/header.html';
	$init = new Route();
	require_once '../application/views/footer/footer.html';
	?>
	<script type="text/javascript" src="<?php echo $actual_link; ?>/js/slider.js"></script>
	<script type="text/javascript" src="<?php echo $actual_link; ?>/js/slider1.js"></script>
	<script type="text/javascript" src="<?php echo $actual_link; ?>/js/header.js"></script>
	<script src="<?php echo $actual_link; ?>/js/login.js"></script>
	<script type="text/javascript" src="<?php echo $actual_link; ?>/js/card-slider.js"></script>
</body>

</html>