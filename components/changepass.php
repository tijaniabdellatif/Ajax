    <div class="form-section">

        <div class="form-grid">
            <form action="" method="post">
                <div class="group">

                    <h2 class="form-heading">
                        Change Password
                    </h2>

                </div>


                <div class="group">

                    <input type="password" name="current_passsword" class="control" placeholder="Add current Password" value="<?php

                                                                                                                                if (isset($current_password)) : echo $current_password;
                                                                                                                                endif;

                                                                                                                                ?>">
                    <div class="name-error error">
                        <?php if (isset($current_password_err)) :  ?>
                            <?php echo $current_password_err; ?>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="group">

                    <input type="password" name="new_passsword" class="control" placeholder="Create New password..." value="<?php

                                                                                                                            if (isset($new_password)) : echo $new_password;
                        endif;
                                                                                                                            ?>">
                    <div class="name-error error">
                        <?php if (isset($new_password_err)) :  ?>
                            <?php echo $new_password_err; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="group">

                    <input type="password" name="retype_passsword" class="control" placeholder="Retype New password..." value="<?php

                                                                                                                                if (isset($retype_password)) : echo $retype_password;
                                                                                                                                endif;

                                                                                                                                ?>">
                    <div class="name-error error">
                        <?php if (isset($retype_password_err)) :  ?>
                            <?php echo $retype_password_err; ?>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="group">

                    <input type="submit" name="change_password" class="btn account-btn" value="Save">

                </div>

            </form>
        </div>

    </div>