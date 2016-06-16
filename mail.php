
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
require("PHPMailer/PHPMailerAutoload.php");

if(!empty($_POST['to']) && !empty($_POST['subject'])){
	$mail=new PHPMailer();
	$mail->SMTPDebug=1;
	$mail->IsSMTP();

	$mail->SMTPAuth=true;
	$mail->Host="ssl://smtp.gmail.com";
	$mail->Port=465;
	/*$mail->Host="smtp.gmail.com";
	$mail->Port=587;*/

	$mail->Username="elmas87532@gmail.com";
	$mail->Password="I9mA8y5a7";
	$mail->CharSet="utf-8";

	$mail->Subject=$_POST['subject'];
	$mail->Body=$_POST['body'];
	$mail->AddAddress('elmas87532@gmail.com');
	$mail->AddAttachment('');
	$mail->AddAddress($_POST['to']);
	$mail->From="elmas87532@gmail.com";
	$mail->IsHtml(true);

	$mail->send();
}


?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<div>收件人：<input type="text" name="to" size="50"></div><br/>
<div>主旨：<input type="text" name="subject" size="50"></div><br/>
<div>內容：<br/>
<textarea rows="10" cols="72" name="body"></textarea>
</div>
<input type="submit" name="寄出">
</form>
</body>
</html>