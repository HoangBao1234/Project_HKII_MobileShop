<?php
    ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Customer</title>
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
        var name = formTest.txtName.value;
        var pass = formTest.pwd.value;
        var phone = formTest.txtPhone.value;
        var mail = formTest.txtMail.value;
        var address = formTest.txtAdd.value;
        var re = formTest.repwd.value;
        
        if(name == ""){
            alert('Please enter name')
            formTest.txtName.focus();
            return false;
        }
        if(pass == ""){
            alert('Please enter password');
            formTest.pwd.focus();
            return false;
        }
        if(re == ""){
            alert('Please Re-enter password');
            formTest.repwd.focus();
            return false;
        }
        if(pass != re){
            alert("\nYou did not enter the same new password twice. Please re-enter your password.");
            formTest.pwd.value = "";
            formTest.repwd.value = "";
            formTest.pwd.focus();
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
        if(mail == ""){
            alert('Please enter email')
            formTest.txtMail.focus();
            return false;
        }
        if(address == ""){
            alert('Please enter address');
            formTest.txtAdd.focus();
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
                            <a class="navbar-brand" href="../Phone/Not_Logged_In/phone/page/phone.php" >MoblieShop</a>
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
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class='fas fa-mobile-alt' style='font-size:20px'></i> Brand<span class="caret"></span></a>
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
        <legend style="text-align:center"><a style="color:#FC0">Add Customer</a></legend>
    <form class="form-horizontal" name="formTest" id="formTest" action="AddCustomer.php" method="post" onsubmit="return testForm();">
            <div class="form-group">
              <label class="control-label col-sm-2" for="txtName" style="color: #FC0">Name: </label>
              <div class="col-sm-10">
                <input type="text" ng-model="txtName" class="form-control" id="txtName" pattern="[a-zA-Z]{3,}" placeholder="Enter Name" name="txtName">
                <span id="invalid" ng-show="formTest.txtName.$touched && formTest.txtName.$invalid">Name more than 3 character, not contain number and blank</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd" style="color: #FC0">Password:</label>
              <div class="col-sm-10">          
                  <input type="password" ng-model="pwd" class="form-control" id="pwd" pattern="[a-zA-Z0-9@]{3,}" placeholder="Enter password" name="pwd">
                  <span id="invalid" ng-show="formTest.pwd.$touched && formTest.pwd.$invalid">Password more than 3 character, not contain blank</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd" style="color: #FC0">Re-enter Password:</label>
              <div class="col-sm-10">          
                  <input type="password" ng-model="repwd" class="form-control" id="repwd" pattern="[a-zA-Z0-9@]{3,}" placeholder="Re-enter password" name="repwd">
                  <span id="invalid" ng-show="formTest.repwd.$touched && formTest.repwd.$invalid">Password more than 3 character, not contain blank</span>
              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="txtPhone" style="color: #FC0">Phone: </label>
              <div class="col-sm-10">          
                  <input type="text" class="form-control" ng-model="txtPhone" id="txtPhone" pattern="[0-9]{8,10}" placeholder="Enter Phone" name="txtPhone">
                  <span id="invalid" ng-show="formTest.txtPhone.$touched && formTest.txtPhone.$invalid">The number phone must be between 8 and 10 number, not contain character</span>
                <span></span>
              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="txtMail" style="color: #FC0">Email: </label>
              <div class="col-sm-10">          
                  <input type="email" class="form-control" ng-model="txtMail" id="txtMail" pattern="[a-zA-Z0-9._]+@+[a-zA-Z]+.[a-z]{2,}" placeholder="abc@gmail.com" name="txtMail">
                  <span id="invalid" ng-show="formTest.txtMail.$touched && formTest.txtMail.$invalid">The syntax: abc@gmail.com</span>
              </div>
            </div>
            <div class="form-group">        
              <label class="control-label col-sm-2" for="txtAdd" style="color: #FC0">Address</label>
              <div class="col-sm-10">          
                  <input type="text" class="form-control" pattern="[a-zA-Z0-9 ]{3,}" ng-model="txtAdd" id="txtAdd" placeholder="Enter Address" name="txtAdd">
                  <span id="invalid" ng-show="formTest.txtAdd.$touched && formTest.txtAdd.$invalid">Address more than 3 character</span>
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default" name="btnSub" style="color:#FC0">Submit</button>
              </div>
            </div>
        <?php
            include 'DBConnection.php';
            $sql1 = "SELECT * FROM Customer";
            $warning = "";
            $count = 0;
            try{
                $rs1 = mysqli_query($cnn, $sql1);
            } catch (Exception $ex) {
                $ex->getMessage();
            }
            if(isset($_POST['btnSub'])){
                    $name = $_POST['txtName'];
                    $pass = $_POST['pwd'];
                    $phone = $_POST['txtPhone'];
                    $email = $_POST['txtMail'];
                    $add = $_POST['txtAdd'];
                    while($l = mysqli_fetch_array($rs1)){
                        if($l[1] == $name){
                            $warning = "This account has already existed";
                            header("location:AddCustomer.php?wa=".$warning);
                            $count ++;
                        }
                    }
                    if($count == 0){
                        $sql = "INSERT INTO `customer`(`Name`, `Password`, `Phone`, `Email`, `Address`) VALUES('$name', '$pass', '$phone', '$email', '$add')";
                        try{
                            $rs = mysqli_query($cnn, $sql);
                            header("location:HomeAdmin.php");
                            ob_end_flush();
                        } catch (Exception $ex) {
                            $ex->getMessage();
                        }
                    }
            }
        ?>
        </form>
	</fieldset>
    </div>
</body>
</html>

