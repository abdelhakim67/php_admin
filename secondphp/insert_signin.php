<?php

// include("dbconnection.php");
// $con=dbconnection();
// if(isset($_POST["username"]))
// {
//     $username=$_POST["username"];
// }
// else return;

// if(isset($_POST["password"]))
// {
//     $password=$_POST["password"];
// }
// else return;

// if(isset($_POST["name"]))
// {
//     $name=$_POST["name"];
// }
// else return;


// $query="INSERT INTO `user_table`(`username`, `password`, `name`) VALUES ('username','password','name')";

// $exe=mysqli_query($con,$query);

// $arr=[];

// if($exe)
// {
//     $arr["success"]="true";
// }
// else
// {
//     $arr["success"]="false";
// }

// print(json_encode($arr));


// the main code : 

include("dbconnection.php");


if(isset($_POST["username"])) {
    $username=$_POST["username"];
} else {
    return;
}

if(isset($_POST["password"])) {
    $password=$_POST["password"];
} else {
    return;
}

if(isset($_POST["fname"])) {
    $fname=$_POST["fname"];
} else {
    return;
}

if(isset($_POST["lname"])) {
    $lname=$_POST["lname"];
} else {
    return;
}

// $query = "INSERT INTO `users`(`username`, `password`, `fname`, `lname`) VALUES ('$username','$password','$fname','$lname')";

$query = "DELETE FROM `users` WHERE username='kara')";


$exe = $con->query($query);

$arr = [];

if($exe) {
    $arr["success"] = "true";
} else {
    $arr["success"] = "false";
}

print(json_encode($arr));

?>