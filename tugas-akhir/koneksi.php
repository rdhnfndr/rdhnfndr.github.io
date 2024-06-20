<?php
$conn = mysqli_connect("localhost","root","","2631merch");


if (mysqli_connect_errno()) {
    echo "Gagal untuk Mengkoneksikan Database " . mysqli_connect_error();
    exit();
}
?>