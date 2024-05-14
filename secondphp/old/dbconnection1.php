<?php

//1 :

  


//2
// function dbconnection() {
//     $host = "192.168.43.28:3306";
//     $username = "mehdi";
//     $password = "mehdi"; 
//     $database = "crs"; 
//     try {
//         $con = mysqli_connect($host, $username, $password, $database);
//     } catch (mysqli_sql_exception $e) {
//     }
    

//     // Check connection
//     if (mysqli_connect_errno()) {
//         die("Database connection failed: " . mysqli_connect_error());
//     }

//     return $con;
// }

//3

// $dsn ="mysql:host=localhost;dbname=second";
// $user="root";
// $pass="";

// $option=array(
//     PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"
// );



// try{
//     $con=new PDO($dsn,$user,$pass);
    
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     //include "functions.php";
    
// }
// catch(PDOException $e){
//     echo $e->getMessage();
// }



//$db=dbconnection();



//3

// // $hostname="127.0.0.1:3306";
// // $username="root";
// // $password="Benahmed2004";
// // $dbname="crs";
// // $co=mysqli_connect($hostname,$username,$password);
// // mysqli_select_db($co,$dbname);



// the code :

// $con== mysqli_connect("localhost", "root", "", "second");

// $dsn ="mysql:host=localhost;dbname=second";
// $servername = "localhost";
// $dsn ="mysql:host=$servername;
// $dbname=second";
// $user="root";
// $pass="";

// $option=array(
//     PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8" //FOR arabic
// );



// try{
//     $con=new PDO($dsn,$user,$pass,$option);
//     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch(PDOException $e){
//     echo $e->getMessage();

// }

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");


$servername = "localhost";
$dbname = "second";
$username = "root";
$password = "";

$dsn = "mysql:host=$servername;dbname=$dbname";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" // For Arabic
);

try {
    $con = new PDO($dsn, $username, $password, $options);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>