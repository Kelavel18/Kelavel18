<?php/*Файл  вид сайта с эскизами*/
/*Подключение БД*/
?>
<?php
  include("include/db_connect.php");
  include("functions/functions.php");
?>
<?php
/*Титульник и подключение стилей*/
?>
<html>
  <head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Aen seidhe</title>
  </head>
  <body style="background-image:url(/images/jojos_bizarre_adventure.jpg)">
    <div id="block-body">
    <?php
        include("include/block-header.php");
    ?>
    </div>

<?php/*Вsборка информации из БД и отображение анкеты пользователей*/?>

    <div id="block-content">
      <ul id="block-good-grid" style="list-style-type: none;">
        <?php
          $result = mysql_query("SELECT * FROM users",$link);

          if(mysql_num_rows($result) > 0)
          {
              $row = mysql_fetch_array($result);
              do
              {
                  
/*Подгон изображений под единый стандарт*/

                  if($row["Image"] != "" && file_exists("./images/".$row["Image"]))
                  {
                      $img_path = "./images/".$row["Image"];
                      $max_width = 100;
                      $max_height = 100;
                      list($width, $height) = getimagesize($img_path);
                      $ration = $max_height / $height;
                      $ratiow = $max_width / $width;
                      $ratio = min($ration, $ratiow);
                      $width = intval($ratio*$width);
                      $height = intval($ration*$height);
                  }
                  else
                  {
                      $img_path = "/images/no-image.png";
                      $width = 110;
                      $height = 200;
                  }
                  echo '
                  <form method="get" class="form_add" action="/include/handler_del.php">
                      <li class="block-good-grid-li">
                          <div class="block-images-grid"><img src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/></div>
 			  <p class="style-title-grid"><a href="">'.$row["Surname"].' '.$row["Nname"].'</a></p>
                          <p class="add-cart-style-grid" tid="'.$row["ID"].'" name="'.$row["ID"].'">
                          <div class="mini-features">
                              <p>Дата рождения:"'.$row["Birthdate"].'"</p>
                              <p>Телефон:"'.$row["Mobile"].'"</p>
                              <p>Электронная почта:"'.$row["EMail"].'"</p>
                          </div>
                          <p class="style-title-grid"><a href="/include/handler_del.php?ID='.$row["ID"].'"><img src="images/delete.png"</a></p>
                      </li> 
                    </form>
                  ';
              }
              while($row = mysql_fetch_array($result));
          }
        ?>
      </ul>
    </div>
  </body>
</html>