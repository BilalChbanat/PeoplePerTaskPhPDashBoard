<?php
include 'dbh.inc.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sqldelete = "DELETE FROM freelancers WHERE id_freelancer = $id";
    mysqli_query($conn, $sqldelete);
    header("location: freelancer.php");
}
