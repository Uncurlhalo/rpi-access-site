<?php
$studentID = $_POST['StudentID'];
$File = "/usr/share/nginx/www/files/accessList.txt";
$Handle = fopen($File, 'a');

fwrite($Handle, $studentID);
fwrite($Handle, "\n");

fclose($Handle);
header("Location: /index.php" );
?>

