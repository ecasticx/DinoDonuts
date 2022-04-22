<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "dinodonuts";

$conn = new mysqli($servername, $username, $password, $dbname);
$n=$_POST["name"];
$u=$_POST["username"];
$e=$_POST["email"];
$p=$_POST["password"];

$sql = "INSERT INTO dinodonuts_users VALUES ('$n','$u','$e','$p')";

if($conn->query($sql)===TRUE)
{
    echo "New record created successfully";
}
else {
    echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();

echo '<script language="javascript">';
echo 'window.location.href="http://localhost/a2/registersuccess.html"';
echo '</script>';

?>