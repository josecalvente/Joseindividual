<?php
//lägg till den här filen i .git ignore så att den inte checkas in.
$dbusername = '219315_xx63052';
$dbhost = 'guestbook-219315.mysql.binero.se';
$dbpassword = 'dualtone23';
$dbdatabas = '219315-guestbook';

//KONFIGURATIONSFIL TILL DATABASUPPKOPPLINGEN
//$dbusername = "root";
//$dbhost = "localhost";
//$dbpassword = "";
//$dbdatabas = "g5";

$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbdatabas);

?>


