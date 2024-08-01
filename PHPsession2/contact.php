<?
require "connect.php";
// // $_POST
// print "<pre>";
// print_r($_POST);

// // $_GET
// print "<pre>";
// print_r($_GET);

// // $_REQUEST
// print "<pre>";
// print_r($_REQUEST);

// // add cookies
// setcookie('name', 'Abebe', time() + 3600, '/');

// // see cookies
// print "<pre>";
// print_r($_COOKIE);

// // see session
// session_start();
// print "<pre>";
// print_r($_SESSION);

$fname = "";
$lname = "";
$message = "";

if(isset($_POST['firstName'])){
    $fname = $_POST['firstName'];
}
if(isset($_POST['lastName'])){
    $lname = $_POST['lastName'];
}
if(isset($_POST['message'])){
    $message = $_POST['message'];
}

$sql = "INSERT INTO contact (firstName, lastName, messages) VALUES ('$fname', '$lname', '$message')";

if($link->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: " . $link->error;
}

?>