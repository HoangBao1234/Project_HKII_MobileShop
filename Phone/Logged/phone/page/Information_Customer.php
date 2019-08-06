<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    ob_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Information</title>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        
        
<script>
        function testForm(){
            var name = formTest.txtName.value;
            
            var mail = formTest.txtMail.value;
            var address = formTest.txtAdd.value;
            var phone = formTest.txtPhone.value;
            
            var paName = /^[a-zA-Z]{3,}$/;
            
            var paPhone = /^[0-9]{8,10}$/;
            var paAdd = /[a-zA-Z0-9 ]{3,}/;
            var paMail = /[a-zA-Z0-9._]+@+[a-zA-Z]+.[a-z]{2,}/;

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
            if(mail == ""){
                alert('Please Enter Email');
                formTest.txtMail.focus();
                return false;
            }else{
                if(!paMail.test(mail)){
                    alert('The syntax: abc@gmail.com');
                    formTest.txtMail.value = "";
                    formTest.txtMail.focus();
                    return false;
                }
            }
            if(address == ""){
                alert('Please Enter Address');
                formTest.txtAdd.focus();
                return false;
            }else{
                if(!paAdd.test(address)){
                    alert('Address more than 3 character');
                    formTest.txtAdd.value = "";
                    formTest.txtAdd.focus();
                    return false;
                }
            }
        }    
</script>
    </head>
    <?php
    ob_start();
    include '../../../../Admin/DBConnection.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM Customer WHERE Id = '$id'";
    try{
        $rs = mysqli_query($cnn, $sql);
        $l = mysqli_fetch_array($rs);
    } catch (Exception $ex) {
        $ex->getMessage();
    }
    ?>
    <body>
        <div style="width:500px; margin-left:500px; margin-top:120px;">
        <fieldset>
        <legend style="text-align:center">Change Information</legend>
        <form class="form-horizontal" name="formTest" id="formTest" method="post" onsubmit="return testForm()">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="txtId">Code: </label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtId"   name="txtId" value="<?=$l[0]?>" readonly>
                   
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="txtName">Name: </label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtName"   name="txtName" value="<?=$l[1]?>">
                   
                  </div>
                </div>
                <div class="form-group">        
                  <label class="control-label col-sm-2" for="txtPhone">Phone: </label>
                  <div class="col-sm-10">          
                      <input type="text" class="form-control" id="txtPhone"  name="txtPhone" value="<?=$l[3]?>">
                    
                    <span></span>
                  </div>
                </div>
                <div class="form-group">        
                  <label class="control-label col-sm-2" for="txtMail">Email: </label>
                  <div class="col-sm-10">          
                      <input type="email" class="form-control" id="txtMail"  name="txtMail" value="<?=$l[4]?>">
                   
                  </div>
                </div>
                <div class="form-group">        
                  <label class="control-label col-sm-2" for="txtAdd">Address</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control"  name="txtAdd" value="<?=$l[5]?>">
                    
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default" name="btnSub">Submit</button>
                  </div>
                </div>
            </form>
            <?php
                if(isset($_POST['btnSub'])){
                    $id = $_POST['txtId'];
                    $name = $_POST['txtName'];
                    
                    $phone = $_POST['txtPhone'];
                    $mail = $_POST['txtMail'];
                    $add = $_POST['txtAdd'];
                    
                    $sql = "UPDATE Customer SET Name = '$name', Phone = '$phone', Email = '$mail', Address = '$add' WHERE Id = '$id'";
                    try{
                        $rs = mysqli_query($cnn, $sql);
                        header("location:phone.php?id=".$id);
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
