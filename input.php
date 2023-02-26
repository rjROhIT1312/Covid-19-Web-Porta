<?php

<?php
//Step 1 : To Connect to database

$conn = mysqli_connect("localhost","root","","users");


if(isset($_POST['sub'])){
	if(!empty($_POST'name']) && !empty($_POST['phone_no'] )   && !empty($_POST['email'])    && !empty ($_POST['password'])    && !empty($_POST['confirmpassword'])   && !empty($_POST['desription']) ){

		$name = $_POST['name'];



		$phno = $_POST['phone_no'];


		$email = $_POST['email'];

		$pass = $_POST['password'];

		$cpass = $_POST['confirm_password'];


		$desc = $_POST['desription'];

		$query = "insert into covid_details (name, phone_no, email, password, confirm_password,description) VALUES('$name','$phno','$email','$pass','$cpass','$desc')";
		//Step 3 : To Execute the Query

		$run = mysqli_query($conn,$query);
		if($run)
		{
			echo "<script>alert('Inserted Successfully')</script>";
		}
		else
		{
			echo mysqli_connect_error();
		}

	}
	else{
		echo "all feilds required";
	}


}

?>