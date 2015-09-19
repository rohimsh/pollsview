<?php
	 $que=htmlentities($_POST['que']);
	 $opt1=htmlentities($_POST['opt1']);
	 $opt2=htmlentities($_POST['opt2']);
	 $opt3=htmlentities($_POST['opt3']);
	 $opt4=htmlentities($_POST['opt4']);
	 $opt5=htmlentities($_POST['opt5']);
	mysqli_real_escape_string($que);
	mysqli_real_escape_string($opt1);
	mysqli_real_escape_string($opt2);
	mysqli_real_escape_string($opt3);
	mysqli_real_escape_string($opt4);
	mysqli_real_escape_string($opt5);
	require 'db.php';
	date_default_timezone_set('Asia/Kolkata');
        if($que&&$opt1&&$opt2)
	$dbresult = mysqli_query($conn,"insert into qdb values (' ', '".$que."', '".$opt1."', '".$opt2."', '".$opt3."', '".$opt4."', '".$opt5."', '', '', '', '', '', '".date("d")."', '".date("m")."', '".date("Y")."', '".date("h:i A")."', '1')");
	else
	header('Location: error.php');		


if($dbresult)
{
$to="shilpi.gupta.0041@gmail.com";
$subject="Congo ! Someone asked a Question!";
$header="from: Pollsview  <admin@pollsview.tk>";
$message="Hi Shilpi! Someone asked this on Pollsview:\n\n";
$message.=$que;
$sentmail = mail($to,$subject,$message,$header);

$to="rohitmishra2k12@gmail.com";
$subject="Congo ! Someone asked a Question!";
$header="from: Pollsview <admin@pollsview.tk>";
$message="Hi Rohit!\n";
$message.=$que;
$sentmail = mail($to,$subject,$message,$header);


}
if($dbresult)
	{
	header('Location: index.php');
	}
	else
	{
	header('Location: error.php');		
	}
?>			