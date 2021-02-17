<?php
    $conn = mysqli_connect("localhost", "myuser", "mypass", "mydb");
    if (isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address= $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $name_on_card = $_POST['name_on_card'];
    $credit_card = $_POST['credit_card'];
    $exp_month = $_POST['exp_month'];
    $exp_year = $_POST['exp_year'];
    $cvv = $_POST['cvv'];
$q = mysqli_prepare($conn, "INSERT INTO transactions (full_name, email, address, city, zip, name_on_card, credit_card, exp_month, exp_year, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($q, "sssssssssi", $_REQUEST['full_name'], $_REQUEST['email'], $_REQUEST['address'], $_REQUEST['city'], $_REQUEST['zip'], $_REQUEST['name_on_card'], $_REQUEST['creadi_card'], $_REQUEST['exp_month'], $_REQUEST['exp_year'], $_REQUEST['cvv']);
mysqli_stmt_execute($q);
}
?>