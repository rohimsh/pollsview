<?php	
$no = $_GET['response'];
$queid = $_GET['question'];
include 'db.php';
$update=mysqli_query($conn,"UPDATE `qdb` SET `vote".$no."`=`vote".$no."`+1 WHERE `no`=".$queid.";");
?>