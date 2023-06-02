<?php
//database connection
include('db.php');

//adding data to the database
if(isset($_POST['submit'])){
	$u_card = $_POST['card_no'];
	$u_f_name = $_POST['user_first_name'];
	$u_l_name = $_POST['user_last_name'];
	$u_father = $_POST['user_father'];
	$u_nic = $_POST['user_nic'];
	$u_birthday = $_POST['user_dob'];
	$u_gender = $_POST['user_gender'];
	
	$u_phone = $_POST['user_phone'];
	
	
	
  	$insert_data = "INSERT INTO card_activation(u_card, u_f_name, u_l_name, u_father, u_nic, u_birthday, u_gender,  u_phone,uploaded) VALUES ('$u_card','$u_f_name','$u_l_name','$u_father','$u_nic','$u_birthday','$u_gender','$u_phone',NOW())";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}

}

?>
