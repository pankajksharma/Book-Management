<body>
	<div class="header">
		<div class="header_re">
			<a href="index.php"><img class="logo" src="img/logo.jpg" /></a>
			<div class="header_re_form">
        <?php
        if(!isset($_SESSION['loggedIn']))
        {
        ?>
  				<span>Please Login:</span>
  	 			<form action="login.php" method=POST>
  	 				User name:<input type="text" name="username" size="10" id="username" />
  					Password:<input type="password" name="password" size="10" id="password" />
  					<input type="submit" value="login" />
  				</form>
				<br />
				<a href="register.php">Register Yourself</a>
				<?php
          }
        else
          {
            echo("<font color=\"GREEN\">Hello, ".$_SESSION['user']."</font>");
            echo("<br /><a href=\"logout.php\">Log Out</a> <a href=\"com-profile.php\">Complete\\Edit Profile</a> ");
          }
         ?>
				<a href="contact-us.php">Contact Us</a>
			</div>
		</div>
	</div>
	<div class="top_menu">
		<div class="top_menu_re">
			<ul>
				<li>
     <a href="index.php">
						<img src="img/home-green.jpg" alt="Home" />
					</a>
				</li>
				<li>
					<a href="http://engineerinme.com" target="_blank">Eim's home</a>
				</li>
				<li>
				<a href="howitgoes.php">How it works</a>
				</li>
				</li>
				<li>
				<a href="http://forum.engineerinme.com/viewforum.php?f=15" target="_blank">Ask for a Book</a>
				</li>
                                <li>
				<a href="contact-us.php">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="banner">
		<img src="img/banner.gif" alt="Donate Books" class="banner_re" />
	</div>
	<div class="content_re">
		<div class="content_left">
      <?php
        require_once(WEB_ROOT.'/includes/body_parts/left_sidebar.php');      //left Sidebar
      ?>
		</div>
		<div class="content_center">
      <?php
        require(WEB_ROOT.'/includes/body_parts/main_content.php');     //main content
      ?>
		</div>
		<div class="content_right">
      <?php
    		require_once(WEB_ROOT.'/includes/body_parts/right_sidebar.php');      //right Sidebar
    	?>
    </div>
	</div>
	<div class="clear"></div>
	<div class="footer">
  <div class="footer_re">
  <?php
      require_once(WEB_ROOT.'/includes/body_parts/footer.php');
  ?>
    </div>
	</div>
</body>
</html>
