<?php include('./header.php'); ?>
    <!-- main page -->

    <section class="popup-wrapper edit-popup modal-element">
            <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>

                    <div class="input-group">
                        <div>
                          <label>Name*</label>
                          <input value="Enter Name"/>
                        </div>
                        <div>
                          <label>County</label>
                          <input value="Select Country"/>
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
    </section>

    <?php include('./footer-bot.php');?>