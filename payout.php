<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar2.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Pay-Out To Bank Account (Batch)</h1>
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

                  <div class="">

                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs1" href="javascript:void(0)" class="js_tap_btn block active">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>1</span>
                              </div>
                              <div>
                              To bank account (batch)
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs2" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>2</span>
                              </div>
                              <div>
                              Confirmation
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs3" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>3</span>
                              </div>
                              <div>
                              Success
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>

                  </div>

                    <hr class="swiper-divider"/>

                    <div class="content mt-8 md:mt-16">


                      <div id="tabs1" class="js_tab_view payout-tab">
                        <div class="table-spacing-desktop">

                          <p>The 'Pay-Out To Bank Account (Batch)' option allows merchants to make multiple outgoing bank transfer payments that can be submitted in a single file.</p>

                          <b>Please follow the below instructions in order to upload a payout batch:</b>
                          <ul class="list-dotted">
                            <li>The file format should be CSV (Comma-Separated values).</li>
                            <li>The name of the file should contain User ID, Today’s Date and an Index Number, for example: 234567_20141230_01.csv</li>
                            <li>All mandatory fields should be present.</li>
                            <li>Please note: Sending_reason field will be visible to the recipient.</li>
                          </ul>


                          <div class="big-file-input">
                            <label for="dropzone-file">
                                <div>
                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M14.125 23.6562H16V17.3438L18.5625 19.9062L19.875 18.5938L15 13.8437L10.1875 18.6562L11.5 19.9688L14.125 17.3438V23.6562ZM6.9375 27.6875C6.375 27.6875 5.88021 27.474 5.45313 27.0469C5.02604 26.6198 4.8125 26.125 4.8125 25.5625V4.4375C4.8125 3.85417 5.02604 3.35417 5.45313 2.9375C5.88021 2.52083 6.375 2.3125 6.9375 2.3125H18.25L25.1875 9.25V25.5625C25.1875 26.125 24.9792 26.6198 24.5625 27.0469C24.1458 27.474 23.6458 27.6875 23.0625 27.6875H6.9375ZM17.1562 10.25V4.4375H6.9375V25.5625H23.0625V10.25H17.1562Z" fill="#8000E5"/>
                                  </svg>

                                    <p>Drag & Drop or <span>Choose the file</span> to upload</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div> 


                        </div>
                      </div>


                      <div id="tabs2" class="js_tab_view hidden">

                        <div class="table-spacing-desktop">

                            <div class="input-group input-group-end">
                              <div>
                                <label>BENEFICIARY</label>
                                <input placeholder="BENEFICIARY"/>
                              </div>
                              <div>
                                <label>Account number *</label>
                                <input placeholder="Account number"/>
                              </div>
                            </div>

                            <div class="input-group input-group-end">
                              <div>
                                <label>AMOUNT *</label>
                                <input placeholder="1,000 EUR"/>
                              </div>
                              <div>
                                <label>DETAILS</label>
                                <input placeholder="DETAILS"/>
                              </div>
                            </div>

                            <button class="btn-success btn-success-half next-btn-tabs">Confirm</button>
                            
                        </div>
                      </div>

                      <div id="tabs3" class="js_tab_view success-tab hidden">
 
                        <div class="table-spacing-desktop table-spacing-desktop-middle">

                              <img src="./img/icon-success.svg"/>
                              <h2>Success</h2>
                              <p>Something went wrong! Lorem ipsum dolor sit amet, consectetuer.</p>
                              <button class="btn-success btn-success-half">Back to home</button>

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

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        // when window width is >= 640px
        960: {
          slidesPerView: 5,
          spaceBetween: 10
        }
      }
    });
  </script>

<?php include('./footer-bot.php');?>