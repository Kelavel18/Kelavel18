<?php
/*Файл отображающий страницу с добавлением пользователей*/
/*Подключения*/
?>
<?php
  include("include/db_connect.php");
   include("functions/functions.php");
?>
<html>
  <head>
    <link href="css/style.css" rel="stylesheet" type="text/css" /> <?php/*Стили*/?>
    <title>Aen siadhe</title>
  </head>
    <body style="background-image:url(/images/jojos_bizarre_adventure.jpg)">
    <div id="block-body">
    <?php
        include("include/block-header2.php");
    ?>
    </div>
    <div id="block-content">
<?php
/*Формы для добавления информации*/
?>
      <h2 class="h2_title" align="center">Добавление нового пользователя</h2>
      <form method="post" id="form_add" action="/include/handler_add.php">
        <p id="add_message"></p>
        <div id="block_form_add">
            <ul id="form_add" style="list-style-type: none;">
                <li>
                    <label class="label_add">Фамилия</label>
                    <span class="star">*</span>
                    <input type="text" name="add_Nname" class="input_add" id="add_Nname"/>
                </li>
                <li>
                    <label class="label_add">Имя</label>
                    <span class="star">*</span>
                    <input type="text" name="add_Surname" class="input_add" id="add_Surname"/>
                </li>
                <li>
                    <label class="label_add">Дата рождения</label>
                    <span class="star">*</span>
                    <input type="date" name="add_Birthdate" class="input_add" id="add_Birthdate"/>
                </li>
                <li>
                    <label class="label_add">Мобильный телефон</label>
                    <span class="star">*</span>
                    <input type="text" name="add_Mobile" class="input_add" id="add_Mobile"/>
                </li>
                <li>
                    <label class="label_add">Электронная почта</label>
                    <span class="star">*</span>
                    <input type="text" name="add_EMail" class="input_add" id="add_EMail"/>
                </li>
                <li>
                    <label class="label_add">Изображение</label>
                    <span class="star">*</span>
                    <input type="text" name="add_Image" class="input_add" id="add_Image"/>
                </li>
		<li>
		<input type="checkbox" name="add_Check" value="1" id="add_Check" > Я согласен на обработку моих персональных данных
                </li>
		</ul>
        </div>
        <p align="center"><input type="submit" name="form_submit" id="form_submit" value="Добавить"/></p>
    </form>
    </div>
  </body>
</html>