<?php
$name = $_GET['name'];
$secondName = $_GET['secondName'];
$email = $_GET['email'];
$prop = $_GET['prop'];
$message = $_GET['message'];

mail("egormillerfbr@gmail.com", "Заявка с сайта", "Имя: " .$name. ". Фамилия: " .$secondName.". E-mail: ".$email. ". Тип: " .$prop. ".Сообщение: " .$message ,"From: uzh47088@zwoho.com \r\n");
header('Refresh: 3; URL=/');
  echo '<div style="text-align: center;">
  <h1 style="font-family: Arial, Helvetica, sans-serif;">Ваше повідомленя було відправлено, дякуємо!</h1>
</div>';
  exit;
?>
