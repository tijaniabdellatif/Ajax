  <div class="form-area">

      <?php if (isset($_SESSION['account_success'])) : ?>

          <div class="alert alert-success">
             
          <?= $_SESSION['account_success']; ?>

          </div>
      <?php endif; ?>
      <?php unset($_SESSION['account_success']); ?>

      <form action="" method="post">
          <div class="group">

              <h2 class="form-heading">
                  User Login
              </h2>

          </div>

          <div class="group">

              <input type="email" name="full_email" class="control" placeholder="Enter Your Email">


          </div>
          <div class="group">

              <input type="password" name="passsword" class="control" placeholder="Create password...">


          </div>

          <div class="group">

              <input type="submit" name="login" class="btn account-btn" value="Login">


          </div>
          <div class="group">

              <a href="signup.php" class="link">Create new account</a>

          </div>
      </form>

  </div>