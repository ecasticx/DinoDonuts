<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "dinodonuts";

$con=mysqli_connect($servername, $username, $password, $dbname);

$un=$_POST["un"];
$up=$_POST["pwd"];

$query=mysqli_query($con, "SELECT * FROM 'dinodonuts_users' WHERE UserName='$un'");

while($data = mysqli_fetch_array($query))
{
    if($data["pwd"]==$up)
    {
        echo '<script language="javascript">';
        echo 'window.location.href=("http://localhost/a2/loginsuccess.html")';
        echo '</script>';
    }
    else
    {
        echo '<label for="msg">invalid</label>';
        echo '<script language="javascript">';
        echo 'alert("Username or password is wrong")';
        echo 'window.location.href=("http://localhost/a2/login.html")';
        echo '</script>';

    }
}

$conn->close();

?>