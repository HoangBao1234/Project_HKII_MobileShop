<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Brand</title>
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
</style>
<script>
    function testForm(){
        var ID = formTest.txtId.value;
        var name = formTest.txtName.value;
        var email = formTest.txtEmail.value;
        var phone = formTest.txtPhone.value;
        var web = formTest.txtWebsite.value;
        
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
        if( email == ""){
            alert("Please enter your Email");
            formTest.txtEmail.focus();
            return false;
        }
        if(phone == ""){
                alert('Please enter number phone');
                formTest.txtPhone.focus();
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
        if(web == ""){
            alert("Please enter your Website");
            formTest.txtWebsite.focus();
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
    <div style="width:500px; margin-left:500px; margin-top:120px;">
    <fieldset>
        <legend style="text-align:center"><a style="color:#FC0">Add Brand</a></legend>
    <form class="form-horizontal" name="formTest" id="formTest" action="UpBrand.php" enctype="multipart/form-data" method="post" onsubmit="return testForm();"> 
            <div class="form-group">
              <label class="control-label col-sm-2" for="txtId" style="color:#FC0">Code: </label>
              <div class="col-sm-10">
                <input type="text" ng-model="txtId" class="form-control" id="txtId" pattern="[B][0-9]{1}" placeholder="Enter Code" name="txtId">
                <span id="invalid" ng-show="formTest.txtId.$touched && formTest.txtId.$invalid">Code needs 1 character B and 1 any number (1-9)</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="txtName" style="color:#FC0">Name:</label>
              <div class="col-sm-10">          
                <input type="text" ng-model="txtName" class="form-control" id="txtName" pattern="[a-z A-Z]{3,}" placeholder="Enter Name" name="txtName">
                <span id="invalid" ng-show="formTest.txtName.$touched && formTest.txtName.$invalid">Name more than 3 character, not contain number and blank</span>
              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="txtEmail" style="color:#FC0">Email: </label>
              <div class="col-sm-10">          
                  <input type="text" ng-model="txtEmail" class="form-control" id="txtEmail" pattern="[a-zA-Z0-9._]+@+[a-zA-Z]+\.[a-z]{2,}+\.[a-z]{2,}$" placeholder="Enter Email" name="txtEmail">
                <span id="invalid" ng-show="formTest.txtEmail.$touched && formTest.txtEmail.$invalid">Email wrong syntax</span>

              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="txtPhone" style="color:#FC0">Phone: </label>
              <div class="col-sm-10">          
                <input type="text" ng-model="txtPhone" class="form-control" pattern="[0-9]{8,10}" id="txtPhone" placeholder="Enter IdPhone" name="txtPhone">
                <span id="invalid" ng-show="formTest.txtPhone.$touched && formTest.txtPhone.$invalid">Phone more than 10 number, not contain blank and character</span>

              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="txtWebsite" style="color:#FC0">Website</label>
              <div class="col-sm-10">          
                  <input type="text" ng-model="txtWebsite" class="form-control" id="txtWebsite" pattern="[http]+\://+[a-zA-Z0-9]+\.[a-z]{2,}$" placeholder="Enter Website" name="txtWebsite">
                  <span id="invalid" ng-show="formTest.txtWebsite.$touched && formTest.txtWebsite.$invalid">Phone more than 10 number, not contain blank and character</span>
              </div>
            </div>
            <div class="form-group">       
                 <label class="control-label col-sm-2" for="txtWebsite" style="color:#FC0">Logo</label>
              <div class="col-sm-10">
                  <input type="file" value="Chose Image" name="image">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="btnSub">Submit</button>
              </div>
            </div>
          </form>
         
	</fieldset>
    </div>
</body>
</html>
