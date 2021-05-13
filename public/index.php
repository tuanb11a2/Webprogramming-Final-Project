<?php	

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

if(isset($_GET['url'])){
    $url = $_GET['url'];
}


//require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');

?>

<html>
    <body>
    	<?php require_once '../application/views/home.php'; ?>
    </body>
</html>