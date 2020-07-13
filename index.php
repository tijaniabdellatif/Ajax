<?php include 'init.php'; ?>

<?php

if (!isset($_SESSION['user_id'])) : ?>

    <?php header("location: login.php"); ?>

<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Messenger - App</title>
    <?php include 'components/css.php' ?>
</head>

<body>

    <div class="flash success-flash">
        <span class="close">&times;</span>
        <div class="flash-heading">

            <h3><span class="checked">&#10004;</span>Success: you have done!</h3>

        </div>
        <div class="flash-body">

            <p>Your password is successfully updated</p>
        </div>

    </div>

    <div class="flash error-flash">
        <span class="close">&times;</span>
        <div class="flash-heading">

            <h3><span class="cross">&#x2715;</span>Error: Something were wrong !!</h3>

        </div>
        <div class="flash-body">
            <p><a href="http://localhost/application_chat/Ajax/Ajax/login.php">Try Again & Login</a></p>
        </div>

    </div>
    <?php include 'components/nav.php' ?>
    <div class="chat-container">
        <?php include 'components/sidebar.php' ?>
        <section id="right-area">
            <?php include 'components/messages.php' ?>
            <?php include 'components/chatform.php' ?>
            <?php include 'components/emoji.php' ?>
        </section>
    </div>
    <?php include 'components/js.php' ?>
    <script src="assets/js/emoji.js"></script>
    <script src="assets/js/remove.js"></script>
</body>

</html>