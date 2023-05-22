<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                
              </div>
              <div class="right-side">
                <ul class="icon-list">
                  <li><a href=""><img src="./img/icon-disabled.svg"/></a></li>
                  <li><a href=""><img src="./img/icon-mail.svg"/></a></li>
                  <li class="active"><a href=""><img src="./img/icon-bell.svg"/></a></li>
                </ul>
              </div>
            </div>

            <div class="content-wrapper-full bank-info-page">
                <div class="content-wrapper-full-inner">

                  <h2>Bank information</h2>

                            <div class="input-group input-group-end">
                              <div>
                                <label>Beneficiary</label>
                                <input value="Beneficiary"/>
                              </div>
                              <div>
                                <label>IBAN</label>
                                <button class="button-select-with-image">
                                  <img src="./img/icon-down.svg"/>
                                  <img src="./img/icon-card-image.svg"/>
                                  LT**************************
                                </button>
                              </div>
                            </div>

                            <div class="input-group input-group-end">
                              <div>
                                <label>Bank name</label>
                                <input value="BANK NAME"/>
                              </div>
                              <div>
                                <label>Bank ADRESS</label>
                                <input value="BANK ADRESS"/>
                              </div>
                            </div>

                            <div class="input-group input-group-end">
                              <div>
                                <label>SWIFT CODE</label>
                                <input value="SWIFT CODE"/>
                              </div>
                              <div>
                              </div>
                            </div>

                            <button class="btn-success">Save</button>

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
