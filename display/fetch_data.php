<?php

$servername = "localhost";
$username ="root";
$password = "Adarshsh";
$db = "adarsh";

$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
    die("NOT Connect" . mysqli_connect_error($conn));
}
else{
   echo "Connection is succesful"; 
}

echo "<br>";
//////////////////////////////////////////SELECT AND DISPLAY ALL ROWS IN dB////////////////
/*
$data = " SELECT * FROM contact";
$result1 = mysqli_query($conn, $data);

$num = mysqli_num_rows($result1);
echo "$num";

while($rows = mysqli_fetch_assoc($result1))
{
    echo var_dump($rows);
    echo "<br>";
    echo $rows['SNO'] ." hello " . $rows['name'] . " your mail id is " . $rows['email'] . " and mobile noumbr is " . $rows['m_number'];
    echo "<br>";
}
*/

/////////////////////////////SELECT PERTICULAR CAULMN USING WHERE CLAUSE//////////////

$selectData = " SELECT * FROM `contact` WHERE `name` = 'Ada'";
$result2 = mysqli_query($conn, $selectData);


$number = mysqli_num_rows($result2);
echo "$number";

while($row = mysqli_fetch_assoc($result2))
{
    echo var_dump($row);
    echo "<br>";
    echo $row['SNO'] ." hello " . $row['name'] . " your mail id is " . $row['email'] . " and mobile noumbr is " . $row['m_number'];
    echo "<br>";
}


/////////////////////////////SELECT PERTICULAR CAULMN USING WHERE CLAUSE//////////////

$selectData = " UPDATE `contact` SET `email` = 'xyx@jj.dff' WHERE `contact`.`SNO` = 6;";
$result2 = mysqli_query($conn, $selectData);


echo var_dump($result2);
echo "no of afected row: " . mysqli_affected_rows($conn);
if($result2){
    echo "Updation Successfull";
}
else{
    echo "Updation Error";
}

?>