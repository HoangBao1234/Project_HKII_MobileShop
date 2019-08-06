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
    include '../Admin/DBConnection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM Customer WHERE Id='$id'";
    try{
        $rs = mysqli_query($cnn, $sql);
        $l = mysqli_fetch_array($rs);
    } catch (Exception $ex) {
        $ex->getMessage();
    }
?>

    <html>
    <head>
        <title>Update Pass</title>
        <link rel="stylesheet" href="CSS/1.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="SHORTCUT ICON" href="../img/nokia-21.jpg">
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
    width: 292px;
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

        </style>
<script>
    function testForm(){
        var pass1 = formTest.newpass1.value;
        var pass2 = formTest.newpass2.value;
        
        var paPass1 = /^[a-zA-Z0-9@]{3,}$/;
     
        if(pass1 == ""){
             alert("Please enter Password");
            formTest.newpass1.focus();
            return false;
        }else{
            if(!paPass1.test(pass1)){
                alert("Password more than 3 character, not contain blank");
                formTest.newpass1.value = "";
                formTest.newpass1.focus();
                return false;
            }
        }
        if(pass2 == ""){
            alert("Please enter Password");
            formTest.newpass2.focus();
            return false;
        }else{
            if(!paPass1.test(pass2)){
                alert("Password more than 3 character, not contain blank");
                formTest.newpass2.value = "";
                formTest.newpass2.focus();
                return false;
            }
        }
        if (pass1 != pass2) {
            alert ("\nYou did not enter the same new password twice. Please re-enter your password.")
            formTest.newpass1.value = "";
            formTest.newpass2.value = "";
            formTest.newpass1.focus();
            return false;
        }
    }
</script>
    </head>
    <body >
        <div class="to">
            <div class="form">
                <h2>Forgot Password</h2>
                <i class="fab fa-app-store-ios"></i>
                <form action="UpdatePass.php" class="form-horizontal" name="formTest" id="formTest"  method="post" onsubmit="return testForm();">
                    <label style="margin-left: -50px;">Enter new password</label>
                     
                    <input type="password" name="newpass1">
                    <label style="margin-left: -50px;">Re-enter password</label>
                    <input type="password" name="newpass2"> 
                    <div>
                        <input type="text" name="txtId" id="txtId" value="<?=$l[0]?>">
                    </div>
                    <input id="submit" type="submit" name="submit" value="confirm" onclick="return confirm('Are you sure??')">
                    <span style="font-size:15px; color:red"></span>
                </form>
            </div>                
        </div>
<?php
                if(isset($_POST['submit'])){
                $pass = $_POST['newpass1'];
                $id = $_POST['txtId'];
                $sql = "UPDATE Customer SET Password = '$pass' WHERE Id = '$id'";
                        try{
                            $rs = mysqli_query($cnn, $sql);
                            header("location:../login.php");
                            ob_end_flush();
                        } catch (Exception $ex) {

                        }
                }
            ?>
    </body>
</html>
