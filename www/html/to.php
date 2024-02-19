<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$tmplt = $_POST["Template"];
$file = fopen("tmpl.yml", "w");
fwrite($file,"g_tmpl: '$tmplt' \n");
fclose($file);
echo 'Selected Template - ' .$_POST["Template"];
}
?>
