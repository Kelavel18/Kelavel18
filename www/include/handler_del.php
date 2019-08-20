/*Удаление пользователей из БД*/

<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
define('db_test', true);
include("../include/db_connect.php");
include("../functions/functions.php");
if (  !empty( $_GET['ID'] )  )
{
  $ID = $_GET['ID'];
}
mysql_query("DELETE FROM users WHERE ID = $ID", $link);
}
echo "<script>location.href='http://test1.ru/'</script>";
?>