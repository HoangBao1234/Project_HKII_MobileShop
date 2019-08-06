<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
ob_start();
    include 'DBConnection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM Brand WHERE Id = '$id'";
    try{
        $rs = mysqli_query($cnn, $sql);
        $l = mysqli_fetch_array($rs);
    } catch (Exception $ex) {
        $ex->getMessage();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Brand</title>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
           <style>
            .navbar-inverse{
			 background-color:#FC0;
		}
        </style>
        <script>
            function validate(){
                var name = formTest.txtName.value;
                var mail = formTest.txtEmail.value;
                var phone = formTest.txtPhone.value;
                var website = formTest.txtWebsite.value;


                var paName = /^[a-zA-Z]{3,}$/;
                var paPhone = /^[0-9]{8,10}$/;
                var paMail = /^[a-zA-Z0-9._]+@+[a-zA-Z]+.[a-z]{2,}$/;
                //var paWeb =/[http]+://+[a-zA-Z0-9]+.[a-z]{2,}/;


                if(name == ""){
                    alert('Please Enter Name');
                    formTest.txtName.focus();
                    return false;
                }else{
                    if(!paName.test(name)){
                        alert('Name more than 3 character, not contain number and blank');
                        formTest.txtName.value = ""; 
                        formTest.txtName.focus();
                        return false;
                    }
                }
                if(mail == ""){
                    alert('Please Enter Email');
                    formTest.txtEmail.focus();
                    return false;
                }else{
                    if(!paMail.test(mail)){
                        alert('The syntax: abc@gmail.com');
                        formTest.txtEmail.value = "";
                        formTest.txtEmail.focus();
                        return false;
                    }
                }
                if(phone == ""){
                    alert('Please enter number phone');
                    formTest.txtPhone.focus();
                    return false;
                }else{
                    if(!paPhone.test(phone)){
                        alert('The number phone must be between 8 and 10 number, not contain character');
                        formTest.txtPhone.value = "";
                        return false;
                    }else{
                        if(phone == "0000000000"){
                            alert('cannot continuously contain 10 zeroes');
                            formTest.txtPhone.value = "";
                            formTest.txtPhone.focus();
                            return false;
                        }else{
                            if(phone == "000000000"){
                                alert('cannot continuously contain 9 zeroes');
                                formTest.txtPhone.value = "";
                                formTest.txtPhone.focus();
                                return false;
                            }else{
                                if(phone == "00000000"){
                                    alert('cannot continuously contain 8 zeroes');
                                    formTest.txtPhone.value = "";
                                    formTest.txtPhone.focus();
                                    return false;
                                }else{
                                    if(phone == "0000000"){
                                        alert('cannot continuously contain 7 zeroes');
                                        formTest.txtPhone.value = "";
                                        formTest.txtPhone.focus();
                                        return false;
                                    }else{
                                        if(phone == "000000"){
                                            alert('cannot continuously contain 6 zeroes');
                                            formTest.txtPhone.value = "";
                                            formTest.txtPhone.focus();
                                            return false;
                                        }else{
                                            if(phone == "00000"){
                                                alert('cannot continuously contain 5 zeroes');
                                                formTest.txtPhone.value = "";
                                                formTest.txtPhone.focus();
                                                return false;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }


                if(website == ""){
                    alert('Please Enter Website');
                    formTest.txtWebsite.focus();
                    return false;
                }    
            }
        </script>
    </head>
   <body ng-app="" style="background-image:url(../img/gas-la-gi.jpg)">
       <div>
    	<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="../Phone/Not_Logged_In/phone/page/phone.php">MoblieShop</a>
    			</div>
    			<ul class="nav navbar-nav">
                
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-address-book" style="font-size:20px"></i> Customer<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="AddCustomer.php">Add Customer</a></li>
                        <li><a href="HomeAdmin.php">Customer List</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-archive" style="font-size:20px"></i> Product <span class="caret"></span></a>
                  	<ul class="dropdown-menu">
                            <li><a href="AddProduct.php">Add Product</a></li>
                            <li><a href="ProductList.php">Product List</a></li>
                        </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class='fas fa-mobile-alt' style='font-size:20px'></i> Brand <span class="caret"></span></a>
                  		<ul class="dropdown-menu">
                                    <li><a href="addBrand.php">Add Brand</a></li>
                                    <li><a href="BrandList.php">Brand List</a></li>
                        </ul>
                  </li>
                </ul>
              </div>
		</nav>
    </div>
       <div class="row" style="width:700px; margin-top: 150px; margin-left: 360px;">
           <div class="col-sm-5">
               
               <img src="<?php echo "../$l[1]"; ?>" style="margin-top:33px; margin-left: 36px">
           </div>
           <div class="col-sm-7">
                <fieldset>
                    <legend style="text-align:center; color: #FC0">Details Brand</legend>
                    <form class="form-horizontal" name="formTest" id="formTest" action="EditBrand.php"  method="post" onsubmit="return validate()"> 
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="txtId" style="color:#FC0">Id: </label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="txtId" placeholder="Enter Id" name="txtId" value="<?=$l[0]?>" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="txtName" style="color:#FC0">Name:</label>
                          <div class="col-sm-10">          
                            <input type="text"  class="form-control" id="txtName" placeholder="Enter Name" name="txtName" value="<?=$l[5]?>" readonly> 
                          </div>
                        </div>
                        <div class="form-group">        
                          <label class="control-label col-sm-2" for="txtEmail" style="color:#FC0">Email: </label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="txtEmail" placeholder="Enter Email" name="txtEmail" value="<?=$l[4]?>" readonly>
                          </div>
                        </div>
                        <div class="form-group">        
                          <label class="control-label col-sm-2" for="txtPhone" style="color:#FC0">Phone: </label>
                          <div class="col-sm-10">          
                            <input type="text" class="form-control" id="txtPhone" placeholder="Enter IdPhone" name="txtPhone" value="<?=$l[3]?>" readonly> 
                          </div>
                        </div>
                        <div class="form-group">        
                          <label class="control-label col-sm-2" for="txtWebsite" style="color:#FC0">Website</label>
                          <div class="col-sm-10">          
                              <input type="text" class="form-control" id="txtWebsite" placeholder="Enter Website" name="txtWebsite" value="<?=$l[2]?>" readonly>
                          </div>
                        </div>

                      </form>
                    <?php
                        if(isset($_POST['btnSub'])){
                            $id = $_POST['txtId'];
                            $name = $_POST['txtName'];
                            $phone = $_POST['txtPhone'];
                            $mail = $_POST['txtEmail'];
                            $web = $_POST['txtWebsite'];

                            $sql = "UPDATE Brand SET Name = '$name', Phone = '$phone', Email = '$mail', Website = '$web' WHERE Id = '$id'";
                            try{
                                $rs = mysqli_query($cnn, $sql);
                                header("location:BrandList.php");
                                ob_end_flush();
                            } catch (Exception $ex) {
                                $ex->getMessage();
                            }
                        }
                    ?>
                </fieldset>
            </div>
       </div>
    </body>
</html>
