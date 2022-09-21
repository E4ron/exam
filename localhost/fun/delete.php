<?

require_once("connect.php");

$id = $_POST["id"];

if(!empty($id)){
    $del = "DELETE FROM users WHERE id = '$id'";
}

if ($conn->query($del)) {
    header("Location:../index.php");
    }
    else {
        print_r("Error");
    }

