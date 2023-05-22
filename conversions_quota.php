<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Conversions</h1>
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

            <div class="add-new-popup conversions-popup modal-element">

              <div class="add-new-popup-wrapper">
                  <div class="add-new-popup-wrapper-inner">
                    <div class="add-new-popup-wrapper-inner-box">
                    <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
                    
                      <h2>Conversion quote</h2>
                      
                      <div class="conversions-info-top">
                        <div>
                          <label>Currency</label>
                          <p>1,000<span>EURO</span></p>
                        </div>
                        <div>
                          <label>Currency</label>
                          <p>1,000<span>EURO</span></p>
                        </div>
                      </div>

                      <div class="conversions-info">
                        <div>
                          <label>CONVERSION FEE</label>
                          <p>€ 0.00</span></p>
                        </div>
                        <div>
                          <label>Currency</label>
                          <p>
                            <img src="./img/icon-card-image.svg">
                            IBAN 5252525252525 7984
                          </p>
                        </div>
                      </div>

                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel modal-close-btn">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">COnfirm</button>
                      </div>
                    </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
  </body>
</html>
