<?php


//updated : 


$db = mysqli_connect("localhost", "root", "", "second");

if(isset($_POST["plate_number"]))
{
    $cap=$_POST["plate_number"];
}
else return;

if(isset($_POST["data"]))
{
    $data=$_POST["data"];
}
else return;

if(isset($_POST["name"]))
{
    $name=$_POST["name"];
}
else return;
$path="upload/$name";

// Assuming the column name for image is `car_image` and not `car_image`
$query="INSERT INTO `cars_table`(`plate_number`, `car_image`)
VALUES ('$cap','$path')";

// Write image data to the file
file_put_contents($path,base64_decode($data));

$arr=[];
$exe=mysqli_query($db,$query);
if($exe){
    $arr["success"]="true";
}
else{
    $arr["success"]="false";
}

print(json_encode($arr));

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `cars_table` WHERE username='" . $username . "' AND password ='" . $password . "'";

$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $response = array("success" => true);
} else {
    $response = array("success" => false);
}

echo json_encode($response);




//1 :

// $db = mysqli_connect("localhost", "root", "", "second");

// if(isset($_POST["plate_number"]) && isset($_POST["data"]))
// {
//     $cap = $_POST["plate_number"];
//     $data = $_POST["data"];

//     $imageData = base64_decode($data);
//     $imageName = uniqid() . '.jpg'; // Generate a unique image name

//     $filePath = 'upload/' . $imageName;

//     // Save the image to the server
//     if(file_put_contents($filePath, $imageData) !== false) {
//         // Insert plate number and image path into the database
//         $query = "INSERT INTO `cars_table`(`plate_number`, `car_image`) VALUES ('$cap', '$filePath')";
//         $exe = mysqli_query($db, $query);
//         if($exe) {
//             echo json_encode(["success" => true, "message" => "Data inserted successfully"]);
//         } else {
//             echo json_encode(["success" => false, "message" => "Failed to insert data into database"]);
//         }
//     } else {
//         echo json_encode(["success" => false, "message" => "Failed to save image file"]);
//     }
// }
// else
// {
//     echo json_encode(["success" => false, "message" => "Plate number or image data not provided"]);
// }


//3:



// $db = mysqli_connect("localhost", "root", "", "second");

// if(isset($_POST["plate_number"]))
// {
//     $cap=$_POST["plate_number"];
// }
// else {
//     echo json_encode(["success" => false, "message" => "Plate number not provided"]);
//     exit();
// }

// if(isset($_POST["data"]))
// {
//     $data=$_POST["data"];
// }
// else {
//     echo json_encode(["success" => false, "message" => "Image data not provided"]);
//     exit();
// }

// if(isset($_POST["name"]))
// {
//     $name=$_POST["name"];
// }
// else {
//     echo json_encode(["success" => false, "message" => "Image name not provided"]);
//     exit();
// }

// $path="upload/$name";

// $query="INSERT INTO `cars_table`(`plate_number`, `car_image`) VALUES ('$cap','$path')";

// if (!file_exists('upload')) {
//     mkdir('upload', 0777, true);
// }

// if (file_put_contents($path, base64_decode($data)) !== false) {
//     $exe = mysqli_query($db, $query);
//     if($exe){
//         echo json_encode(["success" => true, "message" => "Data inserted successfully"]);
//     } else {
//         echo json_encode(["success" => false, "message" => "Failed to insert data into database"]);
//     }
// } else {
//     echo json_encode(["success" => false, "message" => "Failed to save image file"]);
// }



// 1:

// $db = mysqli_connect("localhost", "root", "", "second");

// if(isset($_POST["plate_number"]))
// {
//     $cap=$_POST["plate_number"];
// }
// else return;

// if(isset($_POST["data"]))
// {
//     $data=$_POST["data"];
// }
// else return;

// if(isset($_POST["name"]))
// {
//     $name=$_POST["name"];
// }
// else return;
// $path="upload/$name";

// $query="INSERT INTO `cars_table`(`plate_number`, `car_image`)
// VALUES ('$plate_number','$car_image')";

// $query="INSERT INTO `cars_table`(`plate_number`, `car_image`)
// VALUES ('$cap','$path')";

// file_put_contents($path,base64_decode($data));

// $arr=[];
// $exe=mysqli_query($db,$query);
// if($exe){
//     $arr["success"]="true";
// }
// else{
//     $arr["success"]="false";
// }

// print(json_encode($arr));



// $username = $_POST['username'];
// $password = $_POST['password'];

// $sql = "SELECT * FROM `cars_table` WHERE username='" . $username . "' AND password ='" . $password . "'";

// $result = mysqli_query($db, $sql);
// $count = mysqli_num_rows($result);

// if ($count == 1) {
//     $response = array("success" => true);
// } else {
//     $response = array("success" => false);
// }

// echo json_encode($response);




// 2:

// $db = mysqli_connect("localhost", "root", "", "second");


// if(isset($_POST["plate_number"])) {
//     $plate_number = $_POST["plate_number"];
// } else {
//     die("Plate number not provided");
// }

// if(isset($_FILES["car_image"]["tmp_name"])) {
//     $image_tmp = $_FILES["car_image"]["tmp_name"];
//     $image_name = $_FILES["car_image"]["name"];
// } else {
//     die("Car image not provided");
// }

// $path = "upload/" . $image_name;

// $query = "INSERT INTO `cars_table`(`plate_number`, `car_image`) VALUES ('$plate_number', '$path')";

// if(move_uploaded_file($image_tmp, $path)) {
//     $exe = mysqli_query($db, $query);
//     if($exe) {
//         $arr["success"] = true;
//     } else {
//         $arr["success"] = false;
//     }
// } else {
//     $arr["success"] = false;
// }

// print(json_encode($arr));

?> 