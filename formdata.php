<?php

$conn = mysqli_connect('localhost', 'root', '','test');

$txtName = $_POST["name"];
$txtEmail = $_POST["email"];
$txtPhone = $_POST["phone"];
$txtPassword = $_POST["password"];
if($conn){
 echo "successfully ji<br>";
}
else{
 echo "error <br>";
}

echo " phone is ".$txtPhone."hi<br>";
$conn->query("use test");
echo "using test<br>";
$query4 = "INSERT INTO `formdata` (`Name`, `Email`, `Phone`, `Password`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtPassword');";
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
