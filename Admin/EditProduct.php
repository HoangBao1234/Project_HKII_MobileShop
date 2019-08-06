<?php
    ob_start();
?>
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    
    include 'DBConnection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM Product WHERE Id = '$id'";
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
        <title>Edit Product</title>
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
        function testForm(){
            var name = formTest.txtName.value;
            var price = formTest.numPrice.value;
            var IdBrand = formTest.txtBrand.value;
            var specification = formTest.txtSpecification.value;

            var paName = /[a-zA-Z]{3,}/;
            var paPrice = /[0-9]{1,}/;
            var paIdBrand = /[B][0-9]{1}/;

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
            if(price == ""){
                alert('Please Enter Price');
                formTest.numPrice.focus();
                return false;
            }else{
                if(!paPrice.test(price)){
                    alert('Price more than 1 number, not contain blank and character');
                    formTest.numPrice.value = ""; 
                    formTest.numPrice.focus();
                    return false;
                }
            }
            if(IdBrand == ""){
                alert('Please Enter IDBrand');
                formTest.txtBrand.focus();
                return false;
            }else{
                if(!paIdBrand.test(IdBrand)){
                    alert('ID needs 1 character B and 1 any number (1-9)');
                    formTest.txtBrand.value = ""; 
                    formTest.txtBrand.focus();
                    return false;
                }
            }
            if(specification == ""){
                alert('Please Enter specification');
                formTest.txtSpecification.focus();
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
        <div style="width:500px; margin-left:500px; margin-top:120px;">
        <fieldset>
        <legend style="text-align:center; color: #FC0">Edit Product</legend>
        <form class="form-horizontal" name="formTest" id="formTest" action="EditProduct.php" method="post" enctype="">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="txtId" style="color: #FC0">Code: </label>
                  <div class="col-sm-10">
                      <input type="text"  class="form-control"  id="txtId" placeholder="Enter Id" name="txtId" value="<?=$l[0]?>" readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="txtName" style="color: #FC0">Name:</label>
                  <div class="col-sm-10">          
                      <input type="text"  class="form-control"  id="txtName" placeholder="Enter Name" name="txtName" value="<?=$l[1]?>">
                  
                  </div>
                </div>
                <div class="form-group">        
                  <label class="control-label col-sm-2" for="numPrice" style="color: #FC0">Price: </label>
                  <div class="col-sm-10">          
                      <input type="number"  class="form-control"  id="numPrice" placeholder="Enter Price" name="numPrice" value="<?=$l[2]?>"> 
                    
                  </div>
                </div>
                <div class="form-group">        
                  <label class="control-label col-sm-2" for="txtBrand" style="color: #FC0">IdBrand: </label>
                  <div class="col-sm-10">          
                      <input type="text"  class="form-control"  id="txtBrand" placeholder="Enter IdBrand" name="txtBrand" value="<?=$l[4]?>">
                   
                  </div>
                </div>
                <div class="form-group">        
                  <label class="control-label col-sm-2" for="txtSpecification" style="color: #FC0">Specification:  </label>
                  <div class="col-sm-10">          
                      <textarea cols="50" rows="5" class="form-control" id="Specification" name="Specification"><?=$l[5]?></textarea>
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default" name="btnSub" style="color: #FC0" onclick="return confirm('Are you sure you want to Edit this?')">Submit</button>
                  </div>
                </div>
              </form>
              <?php
                  if(isset($_POST['btnSub'])){
                      $id = $_POST['txtId'];
                      $name = $_POST['txtName'];
                      $price = $_POST['numPrice'];
                      $idbrand = $_POST['txtBrand'];
                      $specification = $_POST['Specification'];
                      
                      $sql = "UPDATE Product SET Name = '$name', Price = '$price', Idbrand = '$idbrand', Specification = '$specification' WHERE Id = '$id'";
                  
                      try{
                          $rs = mysqli_query($cnn, $sql);
                          header("location:ProductList.php");
                          ob_end_flush();
                      } catch (Exception $ex) {
                          $ex->getMessage();
                      }
                  }
              ?>
            </fieldset>
        </div>   
    </body>
</html>
