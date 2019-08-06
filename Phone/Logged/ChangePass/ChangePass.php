<?php
    ob_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


    <html>
    <head>
        <title>Change Password</title>
        <link rel="stylesheet" href="CSS/1.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="SHORTCUT ICON" href="../img/nokia-21.jpg">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <style>
            *{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
}
body {
    overflow: hidden;
    background-color: #ededed;
}
.to {
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}
 
.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 470px;
    width: 350px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}
h2 {
    margin-top: 50px;
    margin-bottom: 30px;
}
i.fab.fa-app-store-ios {
    display: block;
    margin-bottom: 50px;
    font-size: 28px;
}
 
label {
    margin-left: -126px;
    display: block;
    font-weight: lighter;
 
}
input{
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
}
input[type="text"] {
    padding: 5px;
    width: 70%;
}
#txtId{
    display: none;
}
input#submit {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#submit:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}
span{
    font-size: 10px;
    color: red;
}

</style>
<?php
    include '../../../Admin/DBConnection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM Customer WHERE Id='$id'";
    try{
        $rs = mysqli_query($cnn, $sql);
        $l = mysqli_fetch_array($rs);
        
    } catch (Exception $ex) {
        $ex->getMessage();
    }
    ?>
<script>
    function testForm(){
        var m = <?php echo json_encode($l[2]);?>;
        var root = formTest.rootpass.value;
        var a = formTest.newpass1.value;
        var b = formTest.newpass2.value;
        if(root == ""){
            alert("Please enter root password");
            formTest.rootpass.focus();
            return false;
        }else{
            if(root != m){
                alert("You have entered the wrong password");
                formTest.rootpass.value = "";
                formTest.rootpass.focus();
                return false;
            }
        }
        if(a == ""){
            alert("Please enter new password");
            formTest.newpass1.focus();
            return false;
        }
        if(b == ""){
            alert("Please pre enter new password");
            formTest.newpass2.focus();
            return false;
        }
        if(a != b){
            alert("You did not enter the same new password twice. Please re-enter your password");
            formTest.newpass1.value = "";
            formTest.newpass2.value = "";
            formTest.newpass1.focus();
            return false;
        }
        if(a == root){
            alert("The old password is not the same as the new password");
            formTest.newpass1.value = "";
            formTest.newpass2.value = "";
            formTest.newpass1.focus();
            return false;
        }
    }
</script>
    </head>
    <body ng-app="">
        <div class="to">
            <div class="form">
                <h2>Change Password</h2>
                <i class="fab fa-app-store-ios"></i>
                <form  class="form-horizontal" name="formTest" id="formTest" action="ChangePass.php" method="post" onsubmit="return testForm()">
                    <label style="margin-left: -50px;">Enter new password</label>
                    <input type="password" ng-model="rootpass" name="rootpass" pattern="[a-zA-Z0-9@]{3,}">
                    <span id="invalid" ng-show="formTest.rootpass.$touched && formTest.rootpass.$invalid">Password more than 3 character, not contain blank</span>
                    <label style="margin-left: -50px;">Enter new password</label>
                    <input type="password" ng-model="newpass1" name="newpass1" pattern="[a-zA-Z0-9@]{3,}">
                    <span id="invalid" ng-show="formTest.newpass1.$touched && formTest.newpass1.$invalid">Password more than 3 character, not contain blank</span>
                    <label style="margin-left: -50px;">Re-enter password</label>
                    <input type="password" ng-model="newpass2" name="newpass2" pattern="[a-zA-Z0-9@]{3,}">
                    <span id="invalid" ng-show="formTest.newpass2.$touched && formTest.newpass2.$invalid">Password more than 3 character, not contain blank</span>
                        <input type="text" id="txtId" name="txtid" value="<?=$l[0]?>">
                        <input id="submit" type="submit" name="submit" value="confirm" onclick="return confirm('Are you sure?')">
                </form>
                
            </div>                
        </div>
    </body>
</html>
<?php
                    if(isset($_POST['submit'])){
                            $newpass = $_POST['rootpass'];
                            $newpass1 = $_POST['newpass1'];
                            $id = $_POST['txtid'];
                            $sql = "UPDATE Customer SET Password = '$newpass1' WHERE Id = '$id'";
                            try{
                                $rs = mysqli_query($cnn, $sql);
                                header("location:../phone/page/phone.php?id=".$id);
                            } catch (Exception $ex) {
                                $ex->getMessage();
                            }   
                    }
?>