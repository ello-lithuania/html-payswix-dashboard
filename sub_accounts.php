<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Sub users</h1>
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

            <div class="content-wrapper-full choose-acc-page">
                <div class="content-wrapper-full-inner">
                
                  <h2>SUB ACCOUNT</h2>

                  <div class="w-full">

                  <div class="radio-button-account">
                    <input id="radio1" type="radio" name="radio" class="radio-box hidden" checked />
                    <label for="radio1">
                    <span class="span-background-important2"></span>
                    <span>Main account</span>
                    <span class="span-background-important">302524</span>
                    <span>Test company</span>
                    </label>
                  </div>

                  <div class="radio-button-account">
                    <input id="radio2" type="radio" name="radio" class="radio-box hidden"  />
                    <label for="radio2">
                    <span class="span-background-important2"></span>
                    <span>SUB account</span>
                    <span class="span-background-important">302524</span>
                    <span>Test company</span>
                    </label>
                  </div>

                  </div>

                    <button class="add-new-btn">Add New</button>

                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">SWITCH</button>
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