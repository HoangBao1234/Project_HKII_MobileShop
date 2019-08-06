<!doctype html>
<?php
    include 'DBConnection.php';
    $sql = "SELECT * FROM Brand";
    try{
        $rs = mysqli_query($cnn, $sql);
    } catch (Exception $ex) {

    }
?>
<html>
<head>
<meta charset="utf-8">
<title>Brand List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
        th{
            padding: 15px;
            background-color: black;
            text-align: center;
            color: white;
        }
        td{
            padding: 10px;
            text-align: center;
        }
</style>
</head>

<body ng-app="" style="background-image:url(../img/Hình-nền-máy-tính-Gradient-màu-xám.png)">
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
                        <li><a href=HomeAdmin.php>Customer List</a></li>
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
    <div>
    	<center>
            <fieldset>
            <legend>Brand List</legend>
        	<table class="table-hover" width="60%" border="1">
            	<tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>WebSite</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Logo</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php
                    while($l = mysqli_fetch_array($rs)){
                        
                ?>
                <tr>
                    <td><?=$l[0]?></td>
                    <td><?=$l[5]?></td>
                    <td><?=$l[2]?></td>
                    <td><?=$l[3]?></td>
                    <td><?=$l[4]?></td>
                    <td><img src="<?php echo "../$l[1]"; ?>" width="110" height="40"></td>
                    <td><a href="EditBrand.php?id=<?=$l[0]?>" onclick="return confirm('Are you sure you want to Edit this?')">Edit</a></td>
                    <td><a href="DeleteBrand.php?id=<?=$l[0]?>" onclick="return confirm('Are you sure you want to Delete this?')">Delete</a></td>
                    <td><a href="DetailsBrand.php?id=<?=$l[0]?>">Details</td>
                </tr>
                <?php
                    }
                ?>
            </table>
            </fieldset>
        </center>
    
    </div>
</body>
</html>
