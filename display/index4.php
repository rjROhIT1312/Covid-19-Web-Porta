<?php

$servername = "localhost";
$username ="root";
$password = "Adarshsh";
$db = "abc";

$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
    die("NOT Connect" . mysqli_connect_error($conn));
}
else{
   echo "Connection is succesful"; 
}

/*
//database creation
$sql = "CREATE DATABASE ABC";
$result = mysqli_query($conn, $sql);

//check database
echo "<br>";
if($result){
    echo "Your Database created successfully";
}
else{
    echo "Database is not created cause--> ". mysqli_error($conn); 
}


//Table Creation
echo "<br>";
$table = "CREATE TABLE `abc`.`test2` ( `SNO` INT(6) NOT NULL AUTO_INCREMENT , `NAME` VARCHAR(25) NOT NULL , `no` INT(10) NOT NULL , PRIMARY KEY (`SNO`))";
$res = mysqli_query($conn, $table);

if($res){
    echo "Your Table created successfully";
}
else{
    echo "Table is not created cause--> ". mysqli_error($conn); 
}
*/


// Data insertion in Table

echo "<br>";
$name = "Adarsh";
$number = 998899;

$data = "INSERT INTO `test2` (`NAME`, `no`) VALUES ('$name', '$number')";
$result1 = mysqli_query($conn, $data);

if($result1){
    echo "Data insered successfully";
}
else{
    echo "Data is not insered cause--> ". mysqli_error($conn); 
}
?>
