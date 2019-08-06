<?php
    include 'DbConnection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM Product WHERE Id = '$id'";
    try{
        $rs = mysqli_query($cnn, $sql);
        header("location:ProductList.php");
    } catch (Exception $ex) {
        $ex->getMessage();
    }
?>