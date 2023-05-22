<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full fa-page">
          <div class="main-content">

            <div class="heading-top heading-notitle">
              <div class="left-side">
                <h1>Statements</h1>
                <div class="select-icon">
                  <button><img src="./img/icon-usa.svg"/><img src="./img/icon-down.svg"/></button>
                </div>
              </div>
              <div class="right-side">
                <ul class="icon-list">
                  <li><a href=""><img src="./img/icon-disabled.svg"/></a></li>
                  <li><a href=""><img src="./img/icon-mail.svg"/></a></li>
                  <li class="active"><a href=""><img src="./img/icon-bell.svg"/></a></li>
                </ul>
              </div>
            </div>

            <div class="content-wrapper-full">
                <div class="content-wrapper-full-inner">
                    <h2>Verification</h2>
                    <p class="heading-description-half">We emailed your a five-digit code to armidas.ponosovas@payswix.com,
                      Enter the code below to confirm your meial address</p>

                        <div  class="fa-popup-digits fa-digits-page">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                        </div>

                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-success">VERIFY</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-cancel">SEND AGAIN</button>
                      </div>
                    </div>

                </div>


            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- footer --> 
    <?php include('./footer.php');?>

    <?php include('./footer-bot.php');?>