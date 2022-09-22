<?php
require_once("connect.php");

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];


$sql = "UPDATE users SET name = '$name', email='$email', phone='$phone' WHERE id='$id'";

if($conn->query($sql)) {
    header("Location:../index.php");
} else {
    print_r("Errore");
}