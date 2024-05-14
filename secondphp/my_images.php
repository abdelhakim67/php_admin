<?php

$db = mysqli_connect("localhost", "root", "", "second");


$query = "SELECT `id`, `plate_number`, `car_image` FROM `cars_table`";

$exe = mysqli_query($db, $query);

$arr=[];

while($row=mysqli_fetch_array($exe)){
    $arr[]=$row;
}
print(json_encode($arr));

?> 