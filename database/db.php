<title>Shop</title>
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rootroot');
define('DB_DATABASE', 'shop');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if(!$db) {
echo "ไม่สามารถเชื่อมต่อกับ MySQL Server ได้<br>";
exit;
}
?>
