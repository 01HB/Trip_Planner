<?php
?>
        <section id="nav-panel">
            <div class="nav-panel container">
                <div class="nav-bar">
                    <div class="nav-logo">
                        <a href="mn_home.php"><h2>Trip-Planner</h2></a>
                    </div>
                    <div class="nav-list">
                        <div class="hamburger"><div class="bar"></div></div>
                        <h1><?php echo $_COOKIE['name']; ?></h1>
                        <ul>	
                            <li><a href="mn_home.php" data-menu="Home">Home</a></li>
                            <li><a href="mn_profile.php" data-menu="Profile">Profile</a></li>
                            <li><a href="#" data-menu="Contact">Contact</a></li>
                            <!-- <li><a href="#" data-menu="Settings">Settings</a></li> -->
                            <li><a href="../controller/logout_mn.php" data-menu="Logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
<?php
?>