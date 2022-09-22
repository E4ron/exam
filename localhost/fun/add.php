<?

require_once("connect.php");

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

mysqli_query($conn, "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ( '$name', '$email', '$phone')");

header("Location:../index.php");