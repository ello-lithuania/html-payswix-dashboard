<?php include('./header.php'); ?>

  <div class="main-content-2column verification-code">
    <div class="left-side">
        <a class="brand" href=""><img src="./img/logo-pswx-RGB.svg"/></a>
        <div class="wrapper">
        <h1>Welcome test Company</h1>
        <p class="description">For enhanced security, you are required to enter One Time Password (OTP) top proceed with your login. An SMS with an OTP has been sent to your mobile number register on our records : XXXXXXXXX929.</p>

                        <div class="input-group-full">
                          <input placeholder="Enter Verification Code (valid for 2 minutes)"/>
                        </div>

            <p>Didn’t receive the code? <a href="./register.php">Retry</a> with another SMS provider or <a href="./register.php">Get a Call</a> with the OTP code</p>

            <button type="submit" class="btn-success">Login</button>

        </div>

    </div>
    <div class="right-side">
        <img src="./img/big-background.jpg"/>
    </div>
  </div>

  <?php include('./footer-bot.php');?>
