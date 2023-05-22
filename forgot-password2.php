<?php include('./header.php'); ?>

  <div class="main-content-2column forgot-password2">
    <div class="left-side">
        <a class="brand" href=""><img src="./img/logo-pswx-RGB.svg"/></a>
        <div class="wrapper">
          <div class="icon-box">
            <img src="./img/icon-mail-btn.svg"/>
          </div>
          
          <h1>Check your email</h1>
          <p class="description">We sent a password reset link to <span>name@untitled.com</span></p>


            <button type="submit" class="btn-success">OPEN EMAIL</button>
            
            <p>Didn’t receive the email? <a class="link-violet" href="./register.php">Click to resent</a></p>

            <div class="btn-back-wrapper">
              <a href="./login.php"><img src="./img/icon-back-purple.svg"/>Back to log in</a>
            </div>
        </div>

    </div>
    <div class="right-side">
        <img src="./img/big-background.jpg"/>
    </div>
  </div>

  <?php include('./footer-bot.php');?>
