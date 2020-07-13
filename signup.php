<?php

include 'init.php';
$obj = new Base();
if (isset($_POST['signup'])) {

    $fullname = $_POST['full_name'];
    $email = $_POST['full_email'];
    $password = $_POST['passsword'];
    $img = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];

    $img_path = "assets/img/";
    $img_extentions = array("png","jpg","jpeg");
    $img_ext = explode(".",$img);
    $img_extension = end($img_ext);

    $name_status = $email_status = $password_status = $img_status = 1;

    if (empty($fullname)) {

        $name_error = '<div class="errno" style="visibility:hidden;"">Full name is required</div>';
        $name_status = "";
    }

    if(empty($email)){

        $email_error = '<div class="errno" style="visibility:hidden;"">Email is required</div>';
        $email_status = "";
    }else{

        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {

            $email_error = '<div class="errno" style="visibility:hidden;">Invalid Email Format</div>';
            $email_status = "";
        }
        else{
             
            $sql = "SELECT email FROM users WHERE email = ?";
            $param = array($email);
            if($query = $obj->GeneralQuery($sql,$param)){
                if($obj->CountRows() == 0){
                      
                    
                         
                }else{
                    $email_error = '<div class="errno" style="visibility:hidden;">Sorry this email exist</div>';
                    $email_status = "";

                }
            }
 
        }
    }

    // Password Validations
    if(empty($password)){


        $password_error = '<div class="errno" style="visibility:hidden;">Password is required</div>';
        $password_status = "";
    }
    else if(strlen($password) < 5){

        $password_error = '<div class="errno" style="visibility:hidden;">Password too Short</div>';
        $password_status = "";
    }

    //validate the image 

    if(empty($img)){
        $img_error = '<div class="errno" style="visibility:hidden;">Image is required</div>';
        $img_status = "";
    }else if(!in_array($img_extension,$img_extentions)){

        $img_error = '<div class="errno" style="visibility:hidden;">Format is not Valid</div>';
        $img_status = "";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/css.php' ?>
    <title>Create New Account</title>
</head>

<body>
    <div class="sign-up">
        <div class="account-left">
            <div class="account-text">
                <h1>Let's Chat</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Et praesentium veritatis deserunt adipisci, placeat perferendis
                </p>
            </div>
        </div>
        <!--close accounnt-left container-->

        <div class="account-right">
            <?php include 'components/signup_component.php' ?>
        </div>
    </div>
    <!--close acoount  container-->
    <?php include 'components/js.php' ?>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/control.js"></script>


</body>

</html>