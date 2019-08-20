<?php/*Файл фактически идентичен index, но с изменениями, образующие стиль сайта в виде списка */
?>
<?php
  include("include/db_connect.php");
  include("functions/functions.php");
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
    <div id="block-content">
      <ul id="block-good-grid" style="list-style-type: none;">
        <?php
          $result = mysql_query("SELECT * FROM users",$link);

          if(mysql_num_rows($result) > 0)
          {
              $row = mysql_fetch_array($result);
              do
              {
                echo '
                  <form method="get" class="form_add" action="/include/handler_del.php">
                      <lishu class="block-good-grid-lishu">
                          <p class="style-title-grid"><a href="">'.$row["Surname"].' '.$row["Nname"].'</a></p>
                          <p class="add-cart-style-grid" tid="'.$row["ID"].'" name="'.$row["ID"].'">
                          <div class="mini-features">
                              <p>Дата рождения:"'.$row["Birthdate"].'"</p>
                              <p>Телефон:"'.$row["Mobile"].'"</p>
                              <p>Электронная почта:"'.$row["EMail"].'"</p>
                          </div>
                          <p class="style-title-grid"><a href="/include/handler_del.php?ID='.$row["ID"].'">Удалить</a></p>
                      </lishu>
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