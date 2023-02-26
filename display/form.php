<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<?php


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


?>

<?php
///////////////////////////////REQUEST_METHOD//////////////////////////
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $m_number = $_POST['m_number'];

//////////////////////////////////SERVER CONNECTION////////////////////
/*$servername = "localhost";
$username ="root";
$password = "Adarshsh";
$db = "adarsh";
*////    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
$conn = mysqli_connect($servername, $username, $password, $db); //Connection function
if(!$conn){
    die("NOT Connect" . mysqli_connect_error($conn));//Connection error function
}
else{
   echo "Connection is succesful"; 
}

echo "<br>";


////////////////////////////////////data insertion//////////////////////////
//$data = " INSERT INTO `contact` (`name`, `email`, `m_number`) VALUES ('$name', '$email', '$m_number');";
//$result1 = mysqli_query($conn, $data);
$sql = "INSERT INTO `userdata` (`username`, `email`, `address`, `password`) VALUES ('$username', '$email', '$address', '$password')";
$result = mysqli_query($conn, $sql);

if($result1){
    echo "Data insered successfully";
}
else{
    echo "Data is not insered cause--> ". mysqli_error($conn); 
}
////////////////////////////////////////////////////////////////////////////////
}
?>

p    <center><h3>Contect Page</h3>
    <br><br>
    <form action="/practice/form.php" method="post" enctype="multipart/form">
        <lable for="name">Name: </lable>
        <input type="text" name="name" maxlength="25" required placeholder="Enter your name">
        <br><br>
        <label for="mail">Mail I'd :</label>
        <input type="email" name="email" required>
        <br><br>
        <lable for="m_number">Contect No. :</lable>
        <input type="tel" name="m_number" size="13">
        <br><br>
        <input type="submit" name="submit" onclick="alert('Conformation')" value="Submit">
        <input type="reset">
    </form>
    <br> <br>
    <h5>for any quary <a href="quary_form.html">mail us</a></h5></center>

    <br><br>

    <form action="/practice/signup.php" method="post" enctype="multipart/form">
        <lable for="username">Name: </lable>
        <input type="text" name="username" maxlength="25" required placeholder="Enter your name">
        <br><br>
        <label for="mail">Mail I'd :</label>
        <input type="email" name="email" required>
        <br><br>
        <lable for="address">Address:</lable>
        <input type="text" name="address" size="13">
        <lable for="password">password:</lable>
        <input type="password" name="password" size="13">
        <lable for="password">password:</lable>
        <input type="password" name="password" size="13">
        <br><br>
        <input type="submit" name="submit" onclick="alert('Conformation')" value="Submit">
        <input type="reset">
    </form>

</body>
</html>