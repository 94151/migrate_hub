<?php
$toEmail = "muskan210497@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
$mailheader .= 'Cc: nitin@sgit.io' . "\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
print "<p class='success'>Contact Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>