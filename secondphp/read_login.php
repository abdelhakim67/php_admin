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

// $db = mysqli_connect("localhost", "root", "", "second");

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


//code after connecting with issam : 


//print("vuyyuygug");




/*$dsn ="mysql:host=192.168.43.28;dbname=crs";
$user="hakim";
$pass="hakim";*/
/*
include("dbconnection.php");

// $option=array(
//     PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8" //FOR arabic
// );

try{
    // $con=new PDO($dsn,$user,$pass,$option);
    
    // $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //include "functions.php";
    //print("Connected to the db");

// $username = $_POST['username'];
// $password = $_POST['password'];
print("rsgzsg");

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

print($username + " " + $password);

// $sql = "SELECT * FROM `users` WHERE username='" . $username . "' AND password ='" . $password . "'";
$sql = "SELECT * FROM `users` WHERE username='" . $username . "' AND password ='" . $password . "'";



$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);
//print("" + $username + "" + $password);
//print("ygyugyg");
if ($count == 1) {
    $response = array("success" => true);
} else {
    $response = array("success" => false);
}

echo json_encode($response);

}
catch(PDOException $e){
    echo $e->getMessage();
}
    


//$query = "SELECT * FROM `users` WHERE id=1";
    
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

// $sql = "SELECT * FROM `user_table` WHERE username='" . $username . "' AND password ='" . $password . "'";

// $result = mysqli_query($db, $sql);
// $count = mysqli_num_rows($result);

// if ($count == 1) {
//     $response = array("success" => true);
// } else {
//     $response = array("success" => false);
// }

// echo json_encode($response);*/






include("dbconnection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM `users` WHERE username = :username AND password = :password";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $response = array("success" => true);
        } else {
            $response = array("success" => false);
        }

        echo json_encode($response);
    } else {
        echo json_encode(array("success" => false, "message" => "Username or password not set"));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Invalid request method"));
}







?> 