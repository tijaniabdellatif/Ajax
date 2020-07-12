<!DOCTYPE html>
<html lang="en">

<head>
    <title>Messenger - App</title>
    <?php include 'components/css.php' ?>
</head>
<body>
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
</body>

</html>