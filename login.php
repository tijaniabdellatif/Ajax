<?php include 'init.php' ?>
<?php

$obj = new Base();
if (isset($_POST['login'])) {

    $email = XSS($_POST['full_email']);
    $password = XSS($_POST['password']);
    $email_status = $password_status = 1;

    if (empty($email)) {

        $email_error = '<div class="errno" style="visibility:hidden;">Email is required</div>';
        $email_status = "";
    }
    if(empty($password)){

        $password_error = '<div class="errno" style="visibility:hidden;">Password is required</div>';
        $password_status = "";
    }

    if(!empty($email_status) && !empty($password_status)){

        $sql = "SELECT * FROM users WHERE email = ?";
       
        if($obj->GeneralQuery($sql,[$email])){

            if($obj->CountRows() == 0){
                $email_error = '<div class="errno" style="visibility:hidden;"">Email does not exist</div>';
            }
            else{
            
                $row = $obj->SingleRow();
                $db_email = $row->email;
                $db_password = $row->password;
                $user_id = $row->id;
                $user_name = $row->name;

                if(password_verify($password,$db_password)){
                    
                    CreateSession('user_name',$user_name);
                    CreateSession("user_id",$user_id);
                    header("Location: index.php");
                    exit();

                }else  {
                    $password_error = '<div class="errno" style="visibility:hidden;">Please enter a correct password</div>';

                }
                
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
            <?php include 'components/login_component.php' ?>
        </div>
    </div>
    <!--close acoount  container-->
    <?php include 'components/js.php' ?>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/control.js"></script>
    <script src="assets/js/display.js"></script>
</body>

</html>