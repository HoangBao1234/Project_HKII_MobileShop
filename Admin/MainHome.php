<!DOCTYPE html>
<?php
    include 'DBConnection.php';
    $sql = "SELECT * FROM Customer";
    try{
        $rs = mysqli_query($cnn, $sql);
        $cus = mysqli_num_rows($rs);
    } catch (Exception $ex) {
        $ex->getMessage();
    }
    $sql1 = "SELECT * FROM Product";
    try{
        $rs1 = mysqli_query($cnn, $sql1);
        $pro = mysqli_num_rows($rs1);
    } catch (Exception $ex) {
        $ex->getMessage();
    }
    $sql2 = "SELECT * FROM Brand";
    try{
        $rs2 = mysqli_query($cnn, $sql2);
        $brand = mysqli_num_rows($rs2);
    } catch (Exception $ex) {
        $ex->getMessage();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://kit.fontawesome.com/4bd692b437.js"></script>
        <script src = "https://code.highcharts.com"> </script>
        <script src="Chart.min.js"></script>
        <script>
			function test(){
				swal("Successfully", "Your are new member", "success");	
			}
		</script>
        <style>
		*{
			margin:0;
			padding:0;
		}
			#navbar{
				height:50px;
				width:100%;
				background-color:#06F;
				border-radius:5px;
				overflow:hidden;
			}
			#navbar ul li{
				float:left;	
				padding:15.4px 16px;
				border-radius:5px;
			}
			#navbar ul{
				list-style-type:none;
			}
			#navbar ul li:hover{
				background-color:#F90;
			}
			#right{
				float:right;
				padding:15.4px 16px;
			}
			#id1{
				margin-top:10%;
				margin-left:25%;
			}
			#id1 ul{
				list-style-type:none;
				font-size:20px;
			}
			#link{
				height:0;
				overflow:hidden;
				background-color:#999;
				border-radius:5px;
				transition:0.5s;
			}
			#link a{
				display:block;
				padding:6px;
				color:#CCC;
				text-align:left;
				text-decoration:none;
				font-size:14px;
			}
			#customer{
				
				
				height:auto;
			}
			#product{
				
				
				height:auto;
			}
			#brand{
				
				
				height:auto;
			}
                        #id1 ul li:hover #link{
                            height: auto;
                        }
			#infor-cus{
				width:70%;
				height:auto;
				background-color:#0FC;
				margin-left:35px;
				font-size:18px;
				font-family:Tahoma, Geneva, sans-serif;
				text-align:center;
				border-radius:8px;
			}
			#infor-pro{
				width:70%;
				height:auto;
				background-color:#0CC;
				margin-left:35px;
				font-size:18px;
				font-family:Tahoma, Geneva, sans-serif;
				text-align:center;
				border-radius:8px;
			}
			#infor-brand{
				width:70%;
				height:auto;
				background-color:#09C;
				margin-left:35px;
				font-size:18px;
				font-family:Tahoma, Geneva, sans-serif;
				text-align:center;
				border-radius:8px;
			}
			
		</style>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-2" style="background-color: #f1f1f1f1; height:700px;; background-color:#06F; border-radius:5px">
               <i class="fas fa-address-card" style="margin-left:25%; margin-top:30px; font-size:100px;"></i>
               <div id="id1">
               		<ul>
                            <li>Product <span class="caret"></span>
                        	<div id="link">
                            	<a href="#">Add Product</a>
                                <a href="#">Product List</a>
                            </div>
                        </li>
                        <li>Customer <span class="caret"></span>
                        	<div id="link">
                            	<a href="#">Customer List</a>
                            </div>
                        </li>
                        <li>Brand <span class="caret"></span>
                        	<div id="link">
                            	<a href="#">Add Brand</a>
                                <a href="#">Brand List</a>
                            </div>
                        </li>
                        <li>Contact Us <span class="caret"></span>
                        	<div id="link">
                            	<a href="#">My Facebook</a>
                            </div>
                        </li>
                    </ul>
               </div>
            </div>
            <div class="col-sm-10">
                <div id="navbar">
                	<ul>
                    	<li>Mobile Shop</li>
                        <li>Facebook</li>
                        <li>Facebook</li>
                        <li>Facebook</li>
                    </ul>
                     <div id="right">
                	 	<i class="fas fa-user-shield"> Hoàng Bảo</i>
                	 </div>
                </div>
                 <div class="row" style="margin-top:25px; margin-left: 45px;">
                	<div class="col-sm-4" id="customer">
                    	<div id="infor-cus">
                        	<span>Customer</span>
                                <p style="font-size:30px;"><?=$cus?></p>
                        </div>
                    </div>
                    <div class="col-sm-4" id="product">
                    	<div id="infor-pro">
                        	<span>Product</span>
                                <p style="font-size:30px;"><?=$pro?></p>
                        </div>
                    </div>
                    <div class="col-sm-4" id="brand">
                    	<div id="infor-brand">
                        	<span>Brand</span>
                                <p style="font-size:30px;"><?=$brand?></p>
                        </div>
                    </div>
                </div>
                <div>
                    <canvas id="myChart" width="200" height="50"></canvas>
                </div>
            </div>
        </div>
    </body>
</html>
               <script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Customer', 'Product', 'Brand'],
        datasets: [{
            label: 'Value',
            data: [<?=$cus?>,<?=$pro?>,<?=$brand?>],
            backgroundColor: [
                '#0FC',
                '#0CC',
                '#09C',
            ],
            borderColor: [
                '#0FC',
                '#0CC',
                '#09C',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>