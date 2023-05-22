<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Debit cards</h1>
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

            <div class="content-wrapper-full card-ready-page">
                <div class="content-wrapper-full-inner">
                    
                    <img src="./img/icon-done-btn.svg"/>

                    <h1 class="text-3xl mt-12 mb-12">Your virtual debit card is <b>ready!</b></h1>

                    <img class="" src="./img/visa-card.svg"/>

                    <div class="flex justify-center">
                      <a class="md:mb-20 flex items-center font-semibold text-base" href="./login.php"><img class="inline mr-2" src="./img/icon-back-purple.svg">RETURN</a>
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