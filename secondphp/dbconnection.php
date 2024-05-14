<?php

$dsn ="mysql:host=192.168.43.28;dbname=crs";
$user="hakim";
$pass="hakim";

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




// $dsn ="mysql:host=localhost;dbname=second";
// $servername = "localhost";
// $dsn ="mysql:host=$servername;
// $dbname=second";
// $user="root";
// $pass="";

$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8" //FOR arabic
);



try{
    $con=new PDO($dsn,$user,$pass,$option);
    
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //include "functions.php";
    print("Connected to the db");

    
    // $query = "SELECT * FROM `users` WHERE id=1";
    
    //$query = "INSERT INTO `users`(`username`, `password`, `name`) VALUES ('$username','$password','null')";
    
    $query = "INSERT INTO `users`(`username`, `password`, `fname`, `lname`) VALUES ('kara','hadjira','benamar','abdelkrim')";
    

    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    print_r($result);

    $query = "DESC `users`";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($result);


    $query = "DESC `users`";
    $query = "DESC `users`";
    $query = "DESC `users`";

}
catch(PDOException $e){
    echo $e->getMessage();

}






?>




