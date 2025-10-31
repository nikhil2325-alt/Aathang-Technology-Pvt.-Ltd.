<?php
// Database connection
$con = mysqli_connect('localhost', 'nnautom3_nn_admin', 'Nikhil@9175612135', 'nnautom3_nn_dashboard');

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>