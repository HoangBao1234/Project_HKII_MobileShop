<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<style>
     .navbar-inverse{
			 background-color:#FC0;
		}
	.dropdown-menu{
		max-width:160px;
		border-radius:5px;
	}
	.dropdown-menu li a{
		padding:10px;
	}
        input.ng-invalid{
            border-color: red;
        }
        #invalid{
            color: red;
        }
        input[type=file]{
            color:#FC0;
        }
        label{
            text-align: right;
        }
</style>
<script>
    function testForm(){
            var ID = formTest.txtId.value;
            var name = formTest.txtName.value;
            var price = formTest.numPrice.value;
            var IdBrand = formTest.txtBrand.value;
            var specification = formTest.txtSpecification.value;

            if(ID == ""){
                alert("Please enter your ID");
                formTest.txtId.focus();
                return false;
            }
            if(name == ""){
                alert("Please enter your Name");
                formTest.txtName.focus();
                return false;
            }
            if( price == ""){
                alert("Please enter your Price");
                formTest.numPrice.focus();
                return false;
            }
            else{
                if(price <= 0 || price > 100000000){
                    alert("The price must be greater than 0 and less than 100 million");
                    formTest.numPrice.value = "";
                    formTest.numPrice.focus();
                    return false;
                }
            }
            if(IdBrand == ""){
                alert("Please enter your IdBrand");
                formTest.txtBrand.focus();
                return false;
            }
            if(specification == ""){
                alert("Please enter your Specification");
                formTest.txtSpecification.focus();
                return false;
            }
        }
        alert("<?php echo $_GET['wa'] ?>");
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
    <div style="width:600px; margin-left:500px; margin-top:120px;">
    <fieldset>
        <legend style="text-align:center"><a style="color:#FC0">Add Product</a></legend>
        <form class="form-horizontal" name="formTest" id="formTest" action="Upload.php" method="post" enctype="multipart/form-data" onsubmit="return testForm();">
            <div class="form-group">
              <label class="control-label col-sm-2" for="txtId" style="color:#FC0">Code: </label>
              <div class="col-sm-10">
                <input type="text" ng-model="txtID" class="form-control" pattern="[A-Z][0-9]{1,}" id="txtId" placeholder="Enter Id" name="txtId">
                <span id="invalid" ng-show="formTest.txtId.$touched && formTest.txtId.$invalid">Code based on the first letter of the phone Brand I need to buy (in capital letters) and any number (0 to 9): Example: S1 is SamSung</span>

              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="txtName" style="color:#FC0">Name:</label>
              <div class="col-sm-10">          
                  <input type="text" ng-model="txtName" class="form-control" pattern="[a-zA-Z0-9+. ]{3,}" id="txtName" placeholder="Enter Name" name="txtName">
                  <span id="invalid" ng-show="formTest.txtName.$touched && formTest.txtName.$invalid">Name more than 3 character, not contain number and blank</span>
              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="numPrice" style="color:#FC0">Price: </label>
              <div class="col-sm-10">          
                  <input type="number" ng-model="numPrice" class="form-control" pattern="[0-9]{1,}" id="numPrice" placeholder="Enter Price" name="numPrice">
                  <span id="invalid" ng-show="formTest.numPrice.$touched && formTest.numPrice.$invalid">Price more than 1 number, not contain blank and character</span>
              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="txtBrand" style="color:#FC0">Code Brand: </label>
              <div class="col-sm-10">          
                  <input type="text" ng-model="txtBrand" class="form-control" pattern="[B][0-9]{1}" id="txtBrand" placeholder="Enter IdBrand" name="txtBrand">
                  <span id="invalid" ng-show="formTest.txtBrand.$touched && formTest.txtBrand.$invalid">Code needs 1 character B and 1 any number (1-9)</span>
              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="txtSpecification" style="color:#FC0">Specification: </label>
              <div class="col-sm-10">          
                  <input type="text" ng-model="txtSpecification"class="form-control" id="txtSpecification" placeholder="Enter Specification" name="txtSpecification">
              </div>
            </div>
             <div class="form-group">       
              <label class="control-label col-sm-2" for="txtSpecification" style="color:#FC0">Image: </label>
              <div class=" col-sm-10">
                  <input type="file" value="Chose Image" name="image" >
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="btnSub" style="color:#FC0">Submit</button>
              </div>
            </div>
          </form>
	</fieldset>
    </div>
</body>
</html>
