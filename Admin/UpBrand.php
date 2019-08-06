<?php
    include 'DBConnection.php';
    $name_img = stripcslashes($_FILES['image']['name']);
    $source_img = $_FILES['image']['tmp_name'];
    $path_img = "../img/".$name_img;
    $link = trim(str_replace('../', '', $path_img));
    $image_info = strtolower(pathinfo($path_img, PATHINFO_EXTENSION));
    $warning = "";
    if($image_info != "jpg" && $image_info != "png" && $image_info != "jpeg" && $image_info != "gif"){
        $warning = "Please select file again, only JPG, JPEG, PNG & GIF files are allowed";
        header("location:addBrand.php?wa=".$warning);
    }else{
        move_uploaded_file($source_img, $path_img);
        if(isset($_POST['btnSub'])){
            $id = $_POST['txtId'];
            $name = $_POST['txtName'];
            $phone = $_POST['txtPhone'];
            $web = $_POST['txtWebsite'];
            $mail = $_POST['txtEmail'];
            $sql = "INSERT INTO Brand VALUES('$id', '$link', '$web', '$phone', '$mail', '$name')";
            try{
                $rs = mysqli_query($cnn, $sql);
                header("location:BrandList.php");
            } catch (Exception $ex) {
                $ex->getMessage();
            }
        }
    }
    
?>