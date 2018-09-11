<?php
error_reporting(0);

$conn = new mysqli("127.0.0.1","migrate","Migrate@sgit.io","migratehub");

$email = trim($_POST["email"]);
$emailmanager = 'noreply@migratehub.com';

if(empty($email)){
	echo "Please type your email to subscribe";
	exit();
}
else{
	$query = ("INSERT INTO subscription(email) Values('$email')");
	$data = $conn->query($query);
	if ($data) {
		$text='Thank you for subscribing with us';
		$mailHeaders = "From: Migratehub <noreply@migratehub.com>\r\n";
		mail($email, 'Subscribe', $text, $mailHeaders);
	} 
}


$email = trim($_POST['email']);
$Ok = ereg("^([a-zA-Z0-9_\.-]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$", $email);
if ($Ok) {
	mail($emailmanager,'Subscribe','','From: '.$email);

	if(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$UNameFrm))
	{
	?>
<script language = 'javascript'>
	alert('Thank you, your address was added to our Mailing List');
	window.history.go(-1); 
	return false;
	</script>
<?php
	exit();
	}
} 

else {
	if(!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$UNameFrm))
	{
	?>
<script language = 'javascript'>
	alert('Sorry, please provide a valid Email address.');
	window.history.go(-1); 
	return false;
	</script>
<?php
	exit();
	}
}

$conn->close();
?>