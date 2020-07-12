<?php

include 'init.php';
if (isset($_POST['signup'])) {

    $fullname = $_POST['full_name'];
    $email = $_POST['full_email'];
    $password = $_POST['passsword'];
    $img = $_FILES['img']['name'];
    $img_temp = $_FILES['img']['tmp_name'];

    $name_status = $email_status = $password_status = $img_status = 1;

    if (empty($fullname)) {

        $name_error = '<div class="errno" style="display:none;">Full name is required</div>';
        $name_status = "";
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
            <?php include 'components/signup.php' ?>
        </div>
    </div>
    <!--close acoount  container-->
    <?php include 'components/js.php' ?>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/control.js"></script>


</body>

</html>