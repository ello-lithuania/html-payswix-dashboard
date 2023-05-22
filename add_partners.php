<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full selection-page">
          <div class="main-content">

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
                              Add business partners
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>


                    <hr class="swiper-divider"/>

                    <div class="content mt-16">

                      <div id="tabs1" class="js_tab_view">

                        <div class="table-spacing-desktop">
                            <h2>Add Business Partners</h2>

                            <div class="input-group input-group-end">
                              <div>
                                <label>COMPANY NAME *</label>
                                <input value="Enter Company Name"/>
                              </div>
                              <div>
                                <label>COUNTRY OF REGISTRATION *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Place of Birth</option>
                                  <option placeholder="saab">Lithuania</option>
                                  <option placeholder="mercedes">Germany</option>
                                  <option placeholder="audi">Norway</option>
                                </select>
                                </div>
                              </div>
                            </div>

                            <div class="input-group input-group-end">
                              <div>
                                <label>PURPOSE *</label>
                                <input value="Enter Purpose"/>
                              </div>
                              <div>
                                <label>EXPECTED MONTHLY AMOUNT (EUR) *</label>
                                <input value="Enter Amount"/>
                              </div>
                            </div>

                        </div>
                      </div>

                    <div class="tab-half-btn">
                        <button type="submit" class="btn-success">Add business partner</button>
                    </div>

                    </div>

                </div>
            </div>

          </div>
        </div>
      </div>
    </section>

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

