<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,900;1,100;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <title>Messenger - App</title>
</head>

<body>
    <nav id="nav">

        nav Area


    </nav>

    <div class="chat-container">

        <section id="sidebar">

            <ul class="left-ul">
                <li><a href=""><span class="profile-img-span"><img src="assets/img/1.jpg" alt="Profile image" class="profil-img"></span></a></li>
                <li><a href="">Tijani Abdellatif<span class="cool-hover"></span></a></li>
                <li><a href="changename.php">Change Name<span class="cool-hover"></span></a></li>
                <li><a href="<?php echo $_SERVER['PHP_SELF'] ?>">Change Password<span class="cool-hover"></span></a></li>
                <li><a href="">110 User Online<span class="cool-hover"></span></a></li>
            </ul>


        </section>

        <section id="right-area">

            <div class="form-section">

                <div class="form-grid">
                    <form action="" method="post">
                        <div class="group">

                            <h2 class="form-heading">
                                Change Password
                            </h2>

                        </div>


                        <div class="group">

                            <input type="password" name="current_passsword" class="control" placeholder="Add current Password">


                        </div>

                        <div class="group">

                            <input type="password" name="new_passsword" class="control" placeholder="Create New password...">


                        </div>
                        <div class="group">

                            <input type="password" name="retype_passsword" class="control" placeholder="Retype New password...">


                        </div>
                        <div class="group">

                            <input type="submit" name="change_password" class="btn account-btn" value="Save">

                        </div>

                    </form>
                </div>

            </div>

        </section>


    </div>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>