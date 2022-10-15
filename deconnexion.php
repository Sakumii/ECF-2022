<?php 

require_once('./_config/include.php');

session_destroy();
header('location: index.php');
exit;

?>
