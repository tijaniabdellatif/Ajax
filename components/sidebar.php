<section id="sidebar">

    <ul class="left-ul">
        <li><a href=""><span class="profile-img-span"><img src="<? echo "$img_path/$img"; ?>" alt="Profile image" class="profil-img"></span></a></li>
        <li><a href="index.php"><?= ucfirst($_SESSION['user_name']) ?><span class="cool-hover"></span></a></li>
        <li><a href="changename.php">Change Name<span class="cool-hover"></span></a></li>
        <li><a href="changepass.php">Change Password<span class="cool-hover"></span></a></li>
        <li><a href="">110 User Online<span class="cool-hover"></span></a></li>
        <li><a href="logout.php">Logout<span class="cool-hover"></span></a></li>
    </ul>


</section>