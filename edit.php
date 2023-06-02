<?php
include('db.php');

$id = $_GET['id'];

// Data Updating
if(isset($_POST['submit'])) {
    $u_card = $_POST['card_no'];
    $u_f_name = $_POST['user_first_name'];
    $u_l_name = $_POST['user_last_name'];
    $u_father = $_POST['user_father'];
    $u_nic = $_POST['user_nic'];
    $u_birthday = $_POST['user_dob'];
    $u_gender = $_POST['user_gender'];
    $u_phone = $_POST['user_phone'];

    $update = "UPDATE card_activation SET u_card='$u_card', u_f_name='$u_f_name', u_l_name='$u_l_name', u_father='$u_father', u_nic='$u_nic', u_birthday='$u_birthday', u_gender='$u_gender', u_phone='$u_phone' WHERE id=$id";
    $run_update = mysqli_query($con, $update);

    if ($run_update) {
        // Data updated successfully
        header("Location: index.php?message=Data%20updated");
        exit();
    } else {
        // Error updating data
        echo "Error: " . mysqli_error($con);
    }
}
?>
