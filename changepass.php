<?php include 'init.php' ?>
<?php
$obj = new Base();
if (isset($_POST["change_password"])) {

    $current_password = XSS($_POST["current_passsword"]);
    $new_password = XSS($_POST["new_passsword"]);
    $retype_password = XSS($_POST["retype_passsword"]);

    $current_status = $new_status = $retype_status = 1;
    if (empty($current_password)) {

        $current_password_err = '<div class="errno" style="visibility:hidden;">Current Password is required</div>';
        $current_status = "";
    }
    if (empty($new_password)) {

        $new_password_err = '<div class="errno" style="visibility:hidden;">New Password is required</div>';
        $new_status = "";
    } else if (strlen($new_password) < 5) {

        $new_password_err = '<div class="errno" style="visibility:hidden;">New Password is Too short</div>';
        $new_status = "";
    }
    if (empty($retype_password)) {

        $retype_password_err = '<div class="errno" style="visibility:hidden;">Retype Password is required</div>';
        $retype_status = "";
    } else if ($new_password != $retype_password) {

        $new_password_err = '<div class="errno" style="visibility:hidden;">Password is not conform</div>';
        $new_status = "";
    }


    if (!empty($current_status) && !empty($current_status) && !empty($retype_status)) {

        $query = "SELECT password FROM users WHERE id = ?";
        $param = array($_SESSION['user_id']);
        if ($obj->GeneralQuery($query, $param)) {

            $row = $obj->SingleRow();
            $db_pass = $row->password;

            if (password_verify($current_password, $db_pass)) {

                $sql = "UPDATE users SET password = ? WHERE id = ? ";
                $par = array(password_hash($new_password, PASSWORD_BCRYPT), $_SESSION['user_id']);
                if ($obj->GeneralQuery($sql, $par)) {

                    CreateSession("password_update","Your password is successfuly updated");
                    header("Location:index.php");

                }
            } else {

                $current_password_err = '<div class="errno" style="visibility:hidden;">Please enter the correct password</div>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/css.php' ?>
    <title>Messenger - App</title>
</head>

<body>
    <?php include 'components/nav.php' ?>
    <div class="chat-container">
        <?php include 'components/sidebar.php' ?>
        <section id="right-area">
            <?php include 'components/changepass.php' ?>
        </section>
    </div>
    <?php include 'components/js.php' ?>
    <!-- <script src="assets/js/alert.js"></script> -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/control.js"></script>
    <!-- <script src="assets/js/display.js"></script> -->

</body>

</html>