<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SamSung</title>
  <!--css của thanh công cụ-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!--css của các icon-->
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <!--css của thanh hình ảnh chạy ngang-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="CssPage.css"> <!-- link css -->   
     <style>
	 	.navbar-inverse{
			 background-color:#FC0;
		}
	 </style>
<script>
    function getValue(str){
        if(str == ""){
            document.getElementById("search").innerHTML = "";
            return;
        }else{
            var http = new XMLHttpRequest();
            http.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("search").innerHTML = this.responseText;
                }
            }
            http.open("GET", "../../livesearch.php?a="+str, true);
            http.send();
        }
    }
</script> 
</head>

<body style="background-color:#ccccff">
<nav class="nav navbar-inverse" align="left">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="../../phone/page/phone.php" onClick="openNav();"> <i class='fas fa-tty' style='font-size:20px'></i> MobileShop</a>
    </div>
    
    <nav align="center">
   <ul class="nav navbar-nav">          
         <li>
         	<form class="navbar-form">
                    <input type="text" id="form-nav" placeholder="Search...." onkeyup="getValue(this.value)">
                <div id="search">
                    
                </div>
            </form>
         </li>
    </ul>
  	</nav>
		
     <ul class="nav navbar-nav navbar-right">

         <li><a href="../../../../SignUp.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
         <li><a href="../../../../login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
   		<div id="id01" class="modal">
      		<form class="modal-content animate">
        		<div class="imgcontainer">
          			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
         		 		<img src="../avatar-female-icon-design-vector-png_118679 (1).jpg" alt="Avatar" class="avatar">
       			</div>
    

            <div class="container" id="nut">
              	<label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
        
                 <label for="psw"><b>Password</b></label>
                 <input type="password" placeholder="Enter Password" name="psw" required>
                
                 <button type="submit">Login</button>
                 <label>
                 <input type="checkbox" checked="checked" name="remember"> Remember me
                 </label>
            </div>

                    <div class="container" style="background-color:#ffffff">
            <div><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            </div>            
    	   </div>          
  		  </form>
      </div>
    </ul>
  </div>
</nav>
<!--đóng của nav class-->

			<div class="header-banner">
				<!-- THANH CHỨA HÌNH ẢNH CHẠY NGANG -->
                <div class="container" >
                    <div class="row" style="background-color:#ffffff">
                    	<div class="col-sm-8 col-sm-8">                   
                         	<div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                  <li data-target="#myCarousel" data-slide-to="3"></li>
                                  <li data-target="#myCarousel" data-slide-to="4"></li>
                                  <li data-target="#myCarousel" data-slide-to="5"></li>
                                  <li data-target="#myCarousel" data-slide-to="6"></li>
                                  <li data-target="#myCarousel" data-slide-to="7"></li>                                
                                </ol>
                                                        
                         <div class="carousel-inner">                       	 
                                 <div class="item active">
                                    <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/800-170-800x170-(4).png" style="width:100%; height:250px">
                                 </div>                          
                                 <div class="item">
                                    <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/800-170-800x170-(18).png" style="width:100%; height:250px">
                                 </div>                               
                                  <div class="item">
                                    <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/800-170-800x170-(19).png" style="width:100%; height:250px">
                                  </div>
                                  <div class="item">
                                    <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/800-170-800x170-(22).png" style="width:100%; height:250px">
                                  </div>
                                  <div class="item">
                                    <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/800-170-800x170-(24).png" style="width:100%; height:250px">
                                  </div>
                                  <div class="item">
                                    <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/800x170-800x170-(1).png" style="width:100%; height:250px">
                                  </div>
                                  <div class="item">
                                    <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/mi7-800-170-800x170-(1).png" style="width:100%; height:250px">
                                  </div>
                                  <div class="item">
                                    <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/oppo-reno-800-170-800x170.png" style="width:100%; height:250px">
                                  </div>
                               <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                          <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                          <span class="glyphicon glyphicon-chevron-right"></span>
                                          <span class="sr-only">Next</span>
                                        </a>
                                </div>
                                <!-- End div.carousel-inner -->
                            </div>
                            <!-- End div.id="myCarousel" -->
        				</div>
                        <!-- End div.class="col-sm-8" -->
                        
                             <div class="col-sm-4" >
                        	 <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/A9-T6-2tr5-390-80-390x80.png" style="width:100%; height:122px; margin-bottom:5px">
                             <img src="../../../../hinh anh/hinh anh dien thoai/trang chu dien thoai/sticky-oppo-XAM-390x80.png" style="width:100%; height:122px">
                        </div>
                      </div>
                       <!-- End div.class="row" -->
                  </div>
        		<!-- End div.header-banner -->
			<div class="header-cover"></div>
				<!-- End div.header-cover -->
                
                                <div class="container" style="background-color:#ffffff">
    	<table width="100%" border="1" style=" border:solid 1px; margin-top:5px; text-align:center">
             	<tr>
                <td><a href="../../IPhone/Page/iphone.php"><img src="../Document/IPhone.jpg" width="120" height="30"></a></td>
                <td><a href="../../Nokia/Page/nokia.php"><img src="../../Nokia/Document/Nokia.jpg" width="120" height="30"></a></td>
                <td><a href="../../Oppo/Page/oppo.php"><img src="../../Oppo/Document/Oppo.jpg" width="120" height="30"></a></td>
                <td><a href="../../SamSung/Page/samsung.php"><img src="../../SamSung/Document/Samsung.jpg" width="120" height="30"></a></td>
                <td><a href="../../Xiaomi/Page/xiaomi.php"><img src="../../Xiaomi/Document/Xiaomi.png" width="120" height="30"></a></td>
                 <td><a href="../../Vsmart/Page/vsmart.php"><img src="../../Vsmart/Document/Vsmart.png" width="120" height="30"></a></td>
            </tr>
        </table>
        <h3>SamSung</h3>
        <div class="row">
            <?php
                include '../../../../Admin/DBConnection.php';
                $sql = "SELECT B.Image, B.Name, B.Specification, B.Price, A.Name"
                        . " FROM Brand A INNER JOIN Product B ON(A.Id = B.Idbrand) WHERE B.Idbrand = 'B4'";
                try{
                    $rs = mysqli_query($cnn, $sql);
                    $num = mysqli_num_rows($rs);
                } catch (Exception $ex) {
                    $ex->getMessage();
                }
                if($num == 0){
                    echo "NoThing to display";
                }else{
                    while($l = mysqli_fetch_array($rs)){ 
            ?>
            <div id="col-Phone" class="col-sm-3" style="margin-top:10px;">
            	<img src="<?php echo "../../../../$l[0]";?>" id="img" width="60%">
                <div id="info">
                    <span style="font-size:24px"><?=$l[1]?></span>
                    <table style="text-align:left; font-size:13px">
                    	<tr>
                            <td><?=$l[2]?></td>
                        </tr>
                        <tr>
                            <td style="font-size:20px;"><?=$l[4]?></td>
                        </tr>
                 </table>        
                </div><!--End div id="Info"-->
                <div id="price" style="margin-top:10px; margin-bottom:10px;">
                	<?=$l[3]?>$
                </div>
                <div style="margin-top:5px;">
                	<input type="button" value="Buy Now" id="btnBuy">
                </div>
            </div> <!-- End div class="col-sm-4" -->
            <?php
                    }
                }
            ?>
        </div><!--End div class="row" -->
    </div><!-- End div class="container"-->
</body>
</html>
