<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Recipients</h1>
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

            <div class="add-new-popup recipient-add-popup modal-element">

              <div class="add-new-popup-wrapper">
                  <div class="add-new-popup-wrapper-inner">
                    <div class="add-new-popup-wrapper-inner-box">
                    <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
                    
                      <h2>Add New Recipiant</h2>

                      <div class="input-group">
                        <div>
                          <label>Name</label>
                          <input value="Enter Name"/>
                        </div>
                        <div>
                          <label>LASTNAME</label>
                          <input value="Enter Lastname"/>
                        </div>
                      </div>

                      <div class="input-group input-group-end">
                        <div>
                          <label>COMPANY</label>
                          <input value="Enter Company"/>
                        </div>
                        <div>
                          <label>Country</label>
                          <div class="custom-select">
                            <select name="cars" id="cars" class="bg-transparent text-left border-b border-black placeholder-black block w-full py-2 text-base font-medium capitalize outline-0">
                                <option placeholder="volvo">Select Country</option>
                                <option placeholder="saab">Saab</option>
                                <option placeholder="mercedes">Mercedes</option>
                                <option placeholder="audi">Audi</option>
                              </select>
                          </div>
                        </div>
                      </div>

                              <div class="choose-radio-box">
                                <label>TYPE</label>
                               
                                <div class="choose-radio-box-inner">

                                  <div class="radio-btn-text">
                                    <input id="radio1" type="radio" name="radio" class="hidden"  />
                                    <label for="radio1">
                                    <span></span>
                                    Company</label>
                                  </div>

                                  <div class="radio-btn-text">
                                    <input id="radio2" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio2">
                                    <span></span>
                                    Individual</label>
                                  </div>

                                </div>

                              </div>

                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel modal-close-btn">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">add</button>
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
