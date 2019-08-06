

        <?php
        include 'DBConnection.php';
            $name_img = stripslashes($_FILES['image']['name']);
	    $source_img = $_FILES['image']['tmp_name'];
	    $path_img = "../img/" . $name_img;
            $target_file = "../img/" . basename($_FILES['image']['name']);
	    $link = trim(str_replace('../', '', $path_img));
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	    $uploadOk = 1;
            $warning = "";
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
                    $uploadOk = 0;
                    $warning = "Please select file again, only JPG, JPEG, PNG & GIF files are allowed";
                    header("location:AddProduct.php?wa=".$warning);
            }else{
                move_uploaded_file($source_img, $path_img);
                if(isset($_POST["btnSub"])) {
                    $id = $_POST['txtId'];
                    $name = $_POST['txtName'];
                    $price = $_POST['numPrice'];
                    $idBrand = $_POST['txtBrand'];
                    $specification = $_POST['txtSpecification'];
                    $year = 2019;
                    $sql = "INSERT INTO product VALUES('$id', '$name', $price, '$link', '$idBrand', '$specification', $year)";
                    try{
                        $rs = mysqli_query($cnn, $sql);
                        header("location:ProductList.php");
                    } catch (Exception $ex) {
                        $ex->getMessage();
                    }      
            }
            }
            // Check if image file is a actual image or fake image
            
        ?>