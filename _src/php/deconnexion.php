<?php 

require_once('../ECF-2022/_config/include.php');

session_destroy();
header('location: index.php');
exit;

?>
