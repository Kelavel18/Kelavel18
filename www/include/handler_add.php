/*Функции работы с БД по добавлению информации о пользователе*/
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
/*Подключения*/
{
define('db_test', true);
include("../include/db_connect.php");
include("../functions/functions.php");

$Nname = iconv("UTF-8", "UTF-8",clear_string($_POST['add_Nname']));
$Surname = iconv("UTF-8", "UTF-8",clear_string($_POST['add_Surname']));
$Birthdate = iconv("UTF-8", "UTF-8",clear_string($_POST['add_Birthdate']));
$Mobile = iconv("UTF-8", "UTF-8",clear_string($_POST['add_Mobile']));
$EMail = iconv("UTF-8", "UTF-8",clear_string($_POST['add_EMail']));
$Image = iconv("UTF-8", "UTF-8",clear_string($_POST['add_Image']));
$Check = iconv("UTF-8", "UTF-8",clear_string($_POST['add_Check']));

/*Проверка значения чекбокса*/

if(isset($_POST['add_Check']) && $_POST['add_Check'] == '1')
{
mysql_query("INSERT INTO users(Check)VALUES('1')");
}else
{
mysql_query("INSERT INTO users(Check)VALUES('0')");
};

/*Проверка значений полей и вывод ошибок при вводе пустых полей*/

if (!$Nname) $error[] = "Требуется указать ваше Имя!";
if (!$Surname) $error[] = "Требуется указать вашу Фамилию!";
if (!$Birthdate) $error[] = "Требуется указать вашу Дату рождения!";
if (!$Mobile) $error[] = "Требуется указать номер вашего мобильного телефона!";
if (!$EMail) $error[] = "Требуется указать ваш электронный адрес!";
if (!$Image) $error[] = "Требуется указать изображение!";

/*Добавление в БД*/

if (count($error)){ echo implode('<br />',$error);
}else
{
mysql_query("INSERT INTO users(Nname,Surname,Birthdate,Mobile,EMail,Image)VALUES(
'".$Nname."','".$Surname."','".$Birthdate."','".$Mobile."','".$EMail."','".$Image."')",$link);
$errorr = iconv("utf-8", "windows-1251", mysql_error());
echo $errorr;
echo "<script>location.href='http://test1.ru/'</script>";
}
}
?>