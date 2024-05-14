<?php

// include("dbconnection.php");

// if(isset($_POST["username"])) {
//     $username=$_POST["username"];
// } else {
//     return;
// }

// if(isset($_POST["password"])) {
//     $password=$_POST["password"];
// } else {
//     return;
// }

// if(isset($_POST["name"])) {
//     $name=$_POST["name"];
// } else {
//     return;
// }

// $query = "INSERT INTO `user_table`(`username`, `password`, `name`) VALUES ('$username','$password','$name')";

// $exe = $con->query($query);

// $arr = [];

// if($exe) {
//     $arr["success"] = "true";
// } else {
//     $arr["success"] = "false";
// }

// print(json_encode($arr));

// include("dbconnection.php");
// $username=$_POST['username'];
// $username=$_POST['password'];

// $query = "SELECT * FROM `user_table` WHERE username='".$username."' AND password ='".$password."';

// //1
// include("dbconnection.php");

// if(isset($_POST["username"]) && isset($_POST["password"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $query = "SELECT * FROM `user_table` WHERE username='".$username."' AND password ='".$password."'";
//     $result = $con->query($query);

//     $arr = [];

//     if($result && mysqli_num_rows($result) > 0) {
//         $arr["success"] = true;
//     } else {
//         $arr["success"] = false;
//     }
// } else {
//     $arr["success"] = false;
// }

// print(json_encode($arr));

// include("dbconnection.php");

// $db=mysqli_connect("localhost","root","","login");

// $username=$_POST['usename'];
// $password=$_POST['password'];

// $sql= "SELECT * FROM `user_table` WHERE username='".$username."' AND password ='".$password."'";

// $result = mysqli_query($db,$sql);
// $count = mysqli_num_rows($result);

// if($count == 1) {
//     //$arr["success"] = true;
//     echo json_encode("Success");
// } else {
//     //$arr["success"] = false;
//     echo json_encode("Error");
// }

// print(json_encode($arr));


//main code : 


//code after connecting with issam : 

// $dsn ="mysql:host=192.168.223.252;dbname=crs";
// $user="hakim";
// $pass="hakim";

// $option=array(
//     PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8" //FOR arabic
// );



// try{
//     $con=new PDO($dsn,$user,$pass,$option);
    
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     //include "functions.php";
//     //print("Connected to the db");

// $username = $_POST['username'];
// $password = $_POST['password'];

// if(isset($_POST["username"])) {
//     $username=$_POST["username"];
// } else {
//     return;
// }

// if(isset($_POST["password"])) {
//     $password=$_POST["password"];
// } else {
//     return;
// }

// $sql = "SELECT * FROM `users` WHERE username='" . $username . "' AND password ='" . $password . "'";

// $result = mysqli_query($db, $sql);
// $count = mysqli_num_rows($result);

// if ($count == 1) {
//     $response = array("success" => true);
// } else {
//     $response = array("success" => false);
// }

// echo json_encode($response);

// }
// catch(PDOException $e){
//     echo $e->getMessage();

// }
    


////$query = "SELECT * FROM `users` WHERE id=1";
    
    // $stmt = $con->prepare($query);
    // $stmt->execute();
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);

/*
// $sql = "SELECT * FROM `user_table` WHERE username='" . $username . "' AND password ='" . $password . "'";

// $result = mysqli_query($db, $sql);
// $count = mysqli_num_rows($result);

// if ($count == 1) {
//     $response = array("success" => true);
// } else {
//     $response = array("success" => false);
// }

// echo json_encode($response);*/


//the chatgpt code :

// $db = mysqli_connect("localhost", "root", "", "second");

// // Check connection
// if (!$db) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Check if username and password are set
// if(isset($_POST["username"]) && isset($_POST["password"])) {
//     $username = mysqli_real_escape_string($db, $_POST["username"]);
//     $password = mysqli_real_escape_string($db, $_POST["password"]);

//     $sql = "SELECT * FROM `user_table` WHERE username='$username' AND password='$password'";
    
//     $result = mysqli_query($db, $sql);

//     if (!$result) {
//         die("Query failed: " . mysqli_error($db));
//     }

//     $count = mysqli_num_rows($result);

//     if ($count == 1) {
//         $response = array("success" => true);
//     } else {
//         $response = array("success" => false);
//     }

//     echo json_encode($response);
// } else {
//     // Handle case when username or password is not set
//     echo json_encode(array("error" => "Username or password not provided"));
// }

// // Close connection
// mysqli_close($db);




// the correct code : 


// $db = mysqli_connect("localhost", "root", "", "second");

// if(isset($_POST["username"])) {
//     $username=$_POST["username"];
// } else {
//     return;
// }

// if(isset($_POST["password"])) {
//     $password=$_POST["password"];
// } else {
//     return;
// }

// $username = $_POST['username'];
// $password = $_POST['password'];

// $sql = "SELECT * FROM `user_table` WHERE username='" . $username . "' AND password ='" . $password . "'";

// $result = mysqli_query($db, $sql);
// $count = mysqli_num_rows($result);

// if ($count == 1) {
//     $response = array("success" => true);
// } else {
//     $response = array("success" => false);
// }

// echo json_encode($response);



//the correct code with display name : 


$db = mysqli_connect("localhost", "root", "", "second");

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

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `user_table` WHERE username='" . $username . "' AND password ='" . $password . "'";

$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    // Fetch and store the first name and last name
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $lname = $row['lname'];

    // Send response with success and user's first name and last name
    $response = array("success" => true, "fname" => $fname, "lname" => $lname);
} else {
    $response = array("success" => false);
}

echo json_encode($response);
?>


?> 