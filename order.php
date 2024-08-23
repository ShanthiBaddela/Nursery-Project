<?php

$conn = mysqli_connect('localhost', 'root', '','test');

$txtName = $_POST["name"];
$txtEmail = $_POST["house"];
$txtPhone = $_POST["area"];
$txtAge = $_POST["pincode"];
$txtAge1 = $_POST["city"];
$txtAge2 = $_POST["state"];
$address=$txtEmail ."<br>".$txtPhone ."<br>".$txtAge ."<br>".$txtAge1."<br>".$txtAge2 ;
$txtAge3 = $_POST["email"];
$txtAge4 = $_POST["phone"];
$txtAge5 = $_POST["payment"];
if($conn){
 echo "successfully ji $txtAge5<br>";
}
else{
 echo "error <br>";
}

echo " phone is ".$address."hi<br>";
$conn->query("use test");
echo "using test<br>";
$query4 = "INSERT INTO `orderdata` (`Items No`, `Address`, `Email`, `Phone`, `Payment Mode`) VALUES ('$txtName', '$address','$txtAge3','$txtAge4','$txtAge5');";
//$query4 = "insert into formdata values(\"$txtName\",\"$txtEmail\",\"$txtPhone\",\"$txtAge\");";
if($conn->query($query4)){
echo "data entered";
}
else{
echo "error occured ";

}
//To redirect user back to index.html, use the following:

header('Location: project.html');
exit;


?>
