<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <link rel="stylesheet" href="../isb/css/jquery-ui.css">
    <link rel="stylesheet" href="../isb/css/application.css">
<script src="../isb/js/jquery-1.10.2.js"></script>
    <script src="../isb/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="../isb/js/test.js"></script>	
    <title>ISB Notification</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="justified-nav.css" rel="stylesheet">
   </head>
<body>
<?php 
include 'databaseauth.php';
$email = $_POST['email1'];
$actype = $_POST['actype'];
// check whether the username is correct or not.
$result1 = mysql_query("SELECT * FROM customer
 WHERE EmailId = '$email'") or die(mysql_error());
$row1 = mysql_fetch_array( $result1 );
$userid = $row1['UserId'];
$CustomerId = $row1['CustomerId'];
$email2 = $row1['EmailId'];
$ouremployeeid = $_COOKIE["employeeid"];
$errorid = 12 ;
if($email != $email2){
echo "<script> popupupdatescreen($errorid, $ouremployeeid); </script>";
nav();
}else{// username is correct!
// check the existence of account
$result3 = mysql_query("SELECT * FROM account
 WHERE CustomerId = '$CustomerId' and AccountType= '$actype'") or die(mysql_error());
 $row3 = mysql_fetch_array( $result3);
 $cactype = $row3['AccountType'];
 if ($cactype == $actype){
 $errorid = 13 ;
 echo "<script> popupupdatescreen($errorid, $ouremployeeid); </script>";
 }else{
// create the new account
$balance = '0';
mysql_query("INSERT INTO account 
(CustomerId,AccountType, CurrentBalance, LastModifiedDateTime, OpenedDate,ClosedDate) VALUES('$CustomerId', '$actype', '$balance', NOW(), NOW(), NOW()) ") 
or die(mysql_error());
$errorid = 10 ;
 echo "<script> popupupdatescreen($errorid, $ouremployeeid); </script>";

}
}
?>
</body>
</html>	
