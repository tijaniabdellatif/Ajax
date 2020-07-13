<div class="form-area">

    <form action="signup.php" method="post" enctype="multipart/form-data" id="form">
        <div class="group">

            <h2 class="form-heading">
                Create An Account
            </h2>
        </div>
        <div class="group">
            <input type="text" name="full_name" class="control" placeholder="Enter Full Name">
            <div class="name-error error">
                <?php if (isset($name_error)) :  ?>
                    <?php echo $name_error; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="group">
            <input type="email" name="full_email" class="control" placeholder="Enter Your Email">
            <div class="name-error error">
                <?php if (isset($email_error)) :  ?>
                    <?php echo $email_error; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="group">
            <input type="password" name="passsword" class="control" placeholder="Create password...">
            <div class="name-error error">
                <?php if (isset($password_error)) :  ?>
                    <?php echo $password_error; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="group">
            <label for="file" id="file-label"><i class="fas fa-cloud-upload-alt upload-icon"></i> Choose
                image</label>
            <input type="file" name="img" class="file" id="file">
            <div class="name-error error">
                <?php if (isset($img_error)) :  ?>
                    <?php echo $img_error; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="group">
            <input type="submit" name="signup" class="btn account-btn" value="Create Account">
        </div>
        <div class="group">

            <a href="login.php" class="link">Already Have an Account ?</a>

        </div>
    </form>

</div>