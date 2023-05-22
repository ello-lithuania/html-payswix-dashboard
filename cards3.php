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

            <div class="content-wrapper-full">
                <div class="content-wrapper-full-inner">

                  <div class="heading-wrapper-center">
                    <div>
                      <h2 class="dashboard-wrapper-heading">Get new card</h2>
                    </div>
                    <div>
                      <a href="./cards.php" class="link-violet">Return</a>
                    </div>
                  </div>

                    <div class="choose-card-box">
                      <a href="./cards4.php" class="choose-card-box-inner">
                        <img src="./img/thumbnail-phone.png"/>
                        <img src="./img/icon-add-btn.svg">
                        <p>VIRTUAL DEBIT CARD</p>
                      </a>
                      <a href="./cards5.php" class="choose-card-box-inner">
                        <img src="./img/thumbnail-cards.png"/>
                        <img src="./img/icon-add-btn.svg">
                        <p>Physical DEBIT CARD</p>
                      </a>
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