<?php

  // Подключение к базе данных MySQL.
$con = mysqli_connect("127.0.0.1", "admin_user", "pass");
        if (!$con) {
        echo "Ошибка соединения с сервером MySQL!";
        exit;
        }
// изменение набора символов на utf8
        mysqli_set_charset($con, "utf8");
// Выбираем БД для работы в MySQL.
        $db_select = mysqli_select_db ($con, "webd");
                if (!$db_select) {
                echo "Не удалось выбрать БД MySQL.";
                exit;
                }
// Делаем выборку из таблицы.
        $sql = "SELECT * FROM `mir_template`";
        $result_select = mysqli_query($con, $sql);
?>
<html>
<head><title>FROM</title></head>
<body>
  <form method="post" action="to.php">
    <select name="Template">
      <?php
        while($obj = mysqli_fetch_array($result_select)){
          echo $tmpl = '<option value="'.$obj['Name'].'">'.$obj['Name'].'</option>';
        };
      ?>
    </select>
    <input type="submit" value="ok">
  </form>
</body>
</html>
