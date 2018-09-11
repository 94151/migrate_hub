<?php

  error_reporting(E_ALL ^ E_DEPRECATED);

  $conn = new mysqli("127.0.0.1","migrate","Migrate@sgit.io","migratehub");

  $userName=$_POST["userName"];

  $userEmail=$_POST["userEmail"];

  $country=$_POST["country"];

  $number=$_POST["number"];

  $intrCountry=$_POST["intrCountry"];

  $service=$_POST["service"];


  //storing file in filename variable

$fileName = $_FILES['resumee']['name'];

$fileName = time().preg_replace('/\s+/', '', $fileName);


// if(empty($userName) || empty($userEmail) || empty($country) || empty($number))

//   {

//     echo "These fields are mandatory - from PHP!";

//     exit();

//   }

  //destination directory

  $file_destination="http://migratehub.com/resume/".$fileName; 
  move_uploaded_file($_FILES['resumee']['tmp_name'], "resume/".$fileName); //Moves an uploaded file file_destination a new location

  $sql= ("INSERT INTO migratehub(name, email, residing_country, mobile_number, country_intrested, service_intrested, resume) Values('$userName','$userEmail','$country','$number', '$intrCountry', '$service' ,'$file_destination') ");

  echo $sql;

$data = $conn->query($sql);
  if($data){

$ToEmail = "sushmit@sgit.io"; 

$EmailSubject = 'Site contact form'; 

$content = "<a href = ".$file_destination." >download</a>" ;

$mailheader = "From: ".$_POST["userEmail"]."\r\n"; 

$mailheader .= "Reply-To: ".$_POST["userEmail"]."\r\n"; 
$mailheader .= 'Cc: nitin@sgit.io' . "\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 


$MESSAGE_BODY ="Details of User 
    Name: ".$_POST["userName"]."

    Email: " .$_POST["userEmail"]."

    Residing Country: ".$_POST["country"]."

    Mobile Number: ". $_POST["number"]."

    Country Interested: ". $_POST["intrCountry"]."

    Service Interested: ". $_POST["service"]."

    Download Resume: ". $content; 

mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 

echo "<script>

         $(window).load(function(){

             $('#thankyouModal').modal('show');

         });

    </script>";

  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=success');

  exit;

  }

  else{
  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?status=fail');

  }


$conn->close();

//send email
 ?>