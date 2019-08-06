<?php
    include 'DBConnection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM Brand WHERE Id = '$id'";
    try{
        $rs = mysqli_query($cnn, $sql);
        header("location:BrandList.php");
    } catch (Exception $ex) {
        $ex->getMessage();
    }
?>
