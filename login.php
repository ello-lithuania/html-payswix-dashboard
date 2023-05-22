<?php include('./header.php'); ?>

  <div class="main-content-2column login-page">
    <div class="left-side">
        <a class="brand" href=""><img src="./img/logo-pswx-RGB.svg"/></a>
        <div class="wrapper">
          <h1>Welcome to Payswix, Log in to continue</h1>
          <p class="description">Don’t have an account? <a href="./register1.php">Register</a></p>
            <form class="w-full" action="./register1.php">
                        <div class="input-group-full">
                          <input placeholder="Username"/>
                        </div>

                        <div class="input-group-full icon-input-group">
                          <input id="test-input" type="password" placeholder="Password"/>
                          <svg class="show-password" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.7188 15.1313L16.2563 13.6688C16.725 12.4688 16.5047 11.475 15.5953 10.6875C14.6859 9.90002 13.725 9.71252 12.7125 10.125L11.3063 8.71877C11.625 8.53127 11.9719 8.39065 12.3469 8.2969C12.7219 8.20315 13.1063 8.15627 13.5 8.15627C14.8313 8.15627 15.9609 8.62034 16.8891 9.54846C17.8172 10.4766 18.2812 11.6063 18.2812 12.9375C18.2812 13.3313 18.2344 13.725 18.1406 14.1188C18.0469 14.5125 17.9062 14.85 17.7188 15.1313ZM21.4875 18.9L20.25 17.6625C21.15 16.9875 21.9328 16.2422 22.5984 15.4266C23.2641 14.611 23.7656 13.7813 24.1031 12.9375C23.1469 10.8563 21.7359 9.21096 19.8703 8.00159C18.0047 6.79221 15.975 6.18752 13.7813 6.18752C12.9938 6.18752 12.1969 6.26252 11.3906 6.41252C10.5844 6.56252 9.95625 6.73127 9.50625 6.91877L8.1 5.45627C8.75625 5.15627 9.6 4.89377 10.6313 4.66877C11.6625 4.44377 12.6656 4.33127 13.6406 4.33127C16.3406 4.33127 18.8156 5.10471 21.0656 6.65159C23.3156 8.19846 24.975 10.2938 26.0437 12.9375C25.5562 14.1375 24.9234 15.2438 24.1453 16.2563C23.3672 17.2688 22.4813 18.15 21.4875 18.9ZM22.8938 25.2563L18.2531 20.7C17.5969 20.9625 16.8563 21.1688 16.0313 21.3188C15.2063 21.4688 14.3625 21.5438 13.5 21.5438C10.7438 21.5438 8.23594 20.7703 5.97657 19.2235C3.71719 17.6766 2.04375 15.5813 0.956253 12.9375C1.33125 11.9625 1.85625 11.0063 2.53125 10.0688C3.20625 9.13127 4.0125 8.23127 4.95 7.36877L1.43438 3.88127L2.67188 2.58752L24.0469 23.9625L22.8938 25.2563ZM6.21563 8.66252C5.54063 9.16877 4.88907 9.82502 4.26094 10.6313C3.63282 11.4375 3.16875 12.2063 2.86875 12.9375C3.84375 15.0188 5.2875 16.6641 7.2 17.8735C9.1125 19.0828 11.2875 19.6875 13.725 19.6875C14.325 19.6875 14.9156 19.65 15.4969 19.575C16.0781 19.5 16.5188 19.3875 16.8188 19.2375L15.0188 17.4375C14.8313 17.5313 14.5922 17.6016 14.3016 17.6485C14.0109 17.6953 13.7438 17.7188 13.5 17.7188C12.1875 17.7188 11.0625 17.2594 10.125 16.3406C9.1875 15.4219 8.71875 14.2875 8.71875 12.9375C8.71875 12.675 8.74219 12.4078 8.78906 12.136C8.83594 11.8641 8.89688 11.625 8.97188 11.4188L6.21563 8.66252Z" fill="black"/>
                          </svg>

                        </div>

            <div class="columns-2">   
                <div>
                  <div class="radio-btn-wrapper">
                    <input type="checkbox" id="A3-yes" name="A3-confirmation" value="yes" />
                    <div class="border rounded-md border-[#C4C4C4] w-8 h-8 flex flex-shrink-0 justify-center items-center mr-2">
                      <svg version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" fill-rule="evenodd">
                          <g transform="translate(-9 -11)" fill="#8000E5" fill-rule="nonzero">
                            <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                          </g>
                        </g>
                      </svg>
                    </div>
                    <label for="A3-yes">Remember me</label>
                  </div>
                </div>
                <div>
                    <a href="./forgot-password.php" class="link-violet">Forgor Password?</a>
                </div>   
            </div> 

            <button type="submit" class="btn-success">Login</button>
            </form>
        </div>

    </div>
    <div class="right-side">
        <img src="./img/big-background.jpg"/>
    </div>
  </div>

  <?php include('./footer-bot.php');?>