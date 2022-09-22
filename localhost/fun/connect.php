<?php

$conn = mysqli_connect("localhost", "root","", "base");
if($conn) {
    print_r("Suc");
} else {
    print_r("Error");
}
