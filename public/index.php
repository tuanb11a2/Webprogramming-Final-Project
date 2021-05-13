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
	<link rel="stylesheet" href="css/home.css" type="text/css">
</head>
<body>
	<?php require_once '../application/views/home.php'; ?>
	<script type="text/javascript" src="js/slider.js"></script>
</body>
</html>
