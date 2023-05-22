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

            <div class="add-new-popup modal-element subuser-add2-popup">

              <div class="add-new-popup-wrapper">
                  <div class="add-new-popup-wrapper-inner">
                    <div class="add-new-popup-wrapper-inner-box">
                    <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
                    
                      <h2>Add New Sub User</h2>

                      <div class="input-group">
                        <div>
                          <label>e-mail</label>
                          <input value="Company name"/>
                        </div>
                        <div>
                          <label>permission</label>
                          <input value="Company name"/>
                        </div>
                      </div>

                      <div class="input-group">
                        <div>
                          <label>Position in company</label>
                          <input value="Enter Position"/>
                        </div>
                        <div>
                        </div>
                      </div>

                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel modal-close-btn">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">Add</button>
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

    <?php include('./footer-bot.php');?>