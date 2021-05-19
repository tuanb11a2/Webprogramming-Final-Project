<?php	

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

if(isset($_GET['url'])){
    $url = $_GET['url'];
}


//require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/slider.css" type="text/css">
	<link rel="stylesheet" href="css/slider1.css" type="text/css">
	<link rel="stylesheet" href="css/home.css" type="text/css">
	<link rel="stylesheet" href="css/category.css" type="text/css">
	<link rel="stylesheet" href="css/card.css" type="text/css">
	<link rel="stylesheet" href="css/header.css" type="text/css">
	<link rel="stylesheet" href="css/footer.css" type="text/css">
	<link rel="stylesheet" href="css/login.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<?php 
		require_once '../application/views/header/header.html';
		switch ($url) {
  			case "":
				require_once '../application/views/home.php';
			    break;
  			case "category":
			    require_once '../application/views/category.php';
			    break;
			case "login":
			    require_once '../application/views/login/login.php';
			    break;
  			default:
			    echo "Invalid url";
		}
		require_once '../application/views/footer/footer.html'; 
	?>
	<script type="text/javascript" src="js/slider.js"></script>
	<script type="text/javascript" src="js/slider1.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	<script src="js/login.js"></script>
</body>
</html>
