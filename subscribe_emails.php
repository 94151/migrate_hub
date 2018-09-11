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
    $text='Thank you for subscribing with us.';
    $mailHeaders = "From: Migratehub <noreply@migratehub.com>\r\n";
    mail($email, 'Subscribe', $text, $mailHeaders);
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=success');
    exit();
  } 
  else{
    header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=fail');
  }
}

$conn->close();

//send email



 ?>