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

            <div class="content-wrapper-full get-physical-card-page">
                <div class="content-wrapper-full-inner">

                  <div class="heading-wrapper-center">
                    <div>
                      <h2 class="dashboard-wrapper-heading">GET Physical DEBIT CARD</h2>
                    </div>
                    <div>
                      <a href="" class="link-violet">Return</a>
                    </div>
                  </div>
                    
                    <div class="enter-card-pin-box">
                      <div class="left-side">
                        <img src="./img/thumbnail-cards.png">
                      </div>
                      <div class="right-side">
                      
                      <div class="enter-pin-box">
                          <label>CREATE PIN</label>
                          <input type="number" maxlength="1" class="next-input-write" placeholder="*">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="*">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="*">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="*">
                        </div>

                      <div  class="enter-pin-box">
                          <label>CONFIRM PIN</label>
                          <input type="number" maxlength="1" class="next-input-write" placeholder="*">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="*">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="*">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="*">
                        </div>

                        <div class="input-group-full">
                          <label>DELIVERY ADDRESS</label>
                          <input value="Enter House, Apt., Office"/>
                        </div>

                        <button type="submit" class="btn-success">CONFIRM DELIVERY ADDRESS</button>

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
