<?php
include 'dbh.inc.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sqldelete = "DELETE FROM testimonial WHERE id_temoignage = $id";
    mysqli_query($conn, $sqldelete);
    header("location: testimonial.php");
}
