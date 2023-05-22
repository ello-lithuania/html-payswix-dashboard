<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Manage cards</h1>
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
                      <h2 class="dashboard-wrapper-heading">MANAGE CARD</h2>
                    </div>
                    <div>
                      <a href="" class="link-violet">Return</a>
                    </div>
                  </div>

                    <div class="inline-icons-container">
                        <div class="inline-icons">
                          <button><img src="./img/icon-print.svg"></button>
                          <button><img src="./img/icon-download-active.svg"></button>
                        </div>
                    </div>

                    <hr/>

                    <div class="card-details-main">
                      <div class="card-details-main-inner">
                        <p>IBAN</p>
                        <p>22222222222</p>
                      </div>
                      <div class="card-details-main-inner">
                        <p>Card Holder Name</p>
                        <p>Name Lastname</p>
                      </div>
                      <div class="card-details-main-inner">
                        <p>Expiry Date</p>
                        <p>31/07/2024</p>
                      </div>
                      <div class="card-details-main-inner">
                        <p>Status</p>
                        <p><div class="icon-success"></div>Active</p>
                      </div>
                    </div>

                    <hr/>


                    <div class="manage-cards-main-card-wrapper">
                      <div class="left-side">


                        <div class="pl-[10px] md:pl-[50px] pr-[20px] md:pr-[80px]">
                          <div class="relative">
                            
                          <style>
                          .swiper {
                                width: 100%;
                                height: 100%;
                              }

                              .swiper-slide {
                                display: block;
                                width: 100%;
                                text-align: left;
                              }
                              .swiper-slide img {
                                width: auto
                              }
                          </style>

  <div class="swiper mySwiper2"> 
    <div class="swiper-wrapper">
      <div class="swiper-slide">
                            <div class="rounded-lg p-6 gradient-silver long-shadow">
                            <img class="mb-8" src="./img/visa-logo.svg"/>
                            <hr class="border-color-[#C4C4C]"/>
                            <hr class="border-color-[#C4C4C] mt-16 mb-0"/>
                            <div class="grid grid-cols-2">
                              <div class="border-r border-color-[#C4C4C] pt-4">
                                <p class="text-[#898989] text-sm font-medium">Number</p>
                                <p class="font-semibold text-sm">**** 4567</p>
                              </div>
                              <div class="pl-4 pt-4">
                                <p class="text-[#898989] text-sm font-medium">Expiry date</p>
                                <p class="font-semibold text-sm">12/25</p>
                              </div>
                            </div>
                            </div>
      </div>
      <div class="swiper-slide">
                            <div class="rounded-lg p-6 gradient-silver long-shadow">
                            <img class="mb-8" src="./img/visa-logo.svg"/>
                            <hr class="border-color-[#C4C4C]"/>
                            <hr class="border-color-[#C4C4C] mt-16 mb-0"/>
                            <div class="grid grid-cols-2">
                              <div class="border-r border-color-[#C4C4C] pt-4">
                                <p class="text-[#898989] text-sm font-medium">Number</p>
                                <p class="font-semibold text-sm">**** 4567</p>
                              </div>
                              <div class="pl-4 pt-4">
                                <p class="text-[#898989] text-sm font-medium">Expiry date</p>
                                <p class="font-semibold text-sm">12/25</p>
                              </div>
                            </div>
                            </div>
      </div>
      <div class="swiper-slide">
                            <div class="rounded-lg p-6 gradient-silver long-shadow">
                            <img class="mb-8" src="./img/visa-logo.svg"/>
                            <hr class="border-color-[#C4C4C]"/>
                            <hr class="border-color-[#C4C4C] mt-16 mb-0"/>
                            <div class="grid grid-cols-2">
                              <div class="border-r border-color-[#C4C4C] pt-4">
                                <p class="text-[#898989] text-sm font-medium">Number</p>
                                <p class="font-semibold text-sm">**** 4567</p>
                              </div>
                              <div class="pl-4 pt-4">
                                <p class="text-[#898989] text-sm font-medium">Expiry date</p>
                                <p class="font-semibold text-sm">12/25</p>
                              </div>
                            </div>
                            </div>
      </div>
    </div>
    <div class="swiper-button-next hidden"></div>
    <div class="swiper-button-prev hidden"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper2", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

                            <div class="rounded-lg absolute h-[90%] w-[90%] bg-[#9DB3C8] left-[-10px] md:left-[-50px] top-[5%] z-[-1]">
                          
                            </div>
                            <div class="rounded-lg absolute h-[90%] w-[90%] bg-[#F3E4E0] right-[-10px] md:right-[-50px] top-[5%] z-[-1]">
                          
                            </div>
                            <div class="rounded-lg absolute h-[70%] w-[80%] bg-[#C9C992] right-[-20px] md:right-[-80px] top-[15%] z-[-4]">
                          
                            </div>
                          </div>

                        </div>

                      </div>
                      <div class="col-span-2 md:col-span-1 md:pl-20 items-center">

                        <a class="icon-text-link block-card-popup">
                          <img src="./img/icon-block-card-btn.svg">
                          Block Card
                        </a>

                        <a class="icon-text-link">
                          <img src="./img/icon-disable-payments-btn.svg">
                          Disable payments
                        </a>

                        <a class="icon-text-link">
                          <img src="./img/icon-change-pin-btn.svg">
                          Change PIN code
                        </a>

                      </div>
                    
                    </div>

                  <div class="cards-carousel-control">
                    <img class="card-carousel-prev" src="./img/icon-arrow-right-brown.svg" alt="">
                    <button></button>
                    <button class="active-item-carousel"></button>
                    <button></button>
                    <button></button>
                    <img class="card-carousel-next" src="./img/icon-arrow-left-brown.svg" alt="">
                  </div>
                      

                </div>



            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="popup-wrapper block-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>
                    <img src="./img/icon-block-popup.svg"/>
                    <p>Lorem ipsum dolor sit amet?</p>
                    
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
    </section>

    <!-- footer --> 
    <?php include('./footer.php');?>

    <?php include('./footer-bot.php');?>