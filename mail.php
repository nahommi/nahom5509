<?php 

$firstname = $_post['first name'];
$lastname = $_post['last name'];
$Grade = $_post['Grade'];
$email = $_post['email'];
$finalreportcard = $_post['final report card'];
$Bankreceipt = $_post['bank receipt'];

$mailheader = "from:".$name."<".$email.">\r\n";
$recipient = "nahommitiku5509@gmail.com";

mail($recipient,$mailheader,$Grade,$finalreportcard,$Bankreceipt)
or die("Error!");
echo"message send"
?>
