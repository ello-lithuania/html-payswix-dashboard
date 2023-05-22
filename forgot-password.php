<?php include('./header.php'); ?>

  <div class="main-content-2column forgot-password">
    <div class="left-side">
        <a class="brand" href=""><img src="./img/logo-pswx-RGB.svg"/></a>
        <div class="wrapper">
          <div class="icon-box">
            <img src="./img/icon-forgot-password-btn.svg"/>
          </div>
          
          <h1>Forgot password?</h1>
          <p class="description">No worries, we’ll send you reset instructions.</p>

                        <div class="input-group-full">
                          <input placeholder="Username"/>
                        </div>

            <button type="submit" class="btn-success">reset password</button>
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