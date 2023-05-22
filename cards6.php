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

            <div class="content-wrapper-full checkout-page">
                <div class="content-wrapper-full-inner">

                  <div class="heading-wrapper-center">
                    <div>
                      <h2 class="dashboard-wrapper-heading">Checkout</h2>
                    </div>
                    <div>
                      <a href="" class="link-violet">Return</a>
                    </div>
                  </div>

                    <div class="checkout-page-inner">
                        <div class="checkout-page-inner-wrapper">
                          <div class="left-side">
                            <p>CARD</p>
                          </div>
                          <div class="right-side">

                            <button class="btn-select-card-active btn-select-card">
                              <svg width="74" height="24" viewBox="0 0 74 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M69.0746 0.40632C70.6824 7.89773 72.279 15.3399 73.8881 22.8313H68.41C68.2018 21.8795 67.9826 20.9542 67.8033 20.0209C67.7316 19.6527 67.5869 19.5077 67.176 19.5104C64.9478 19.529 62.7196 19.5277 60.4914 19.5117C60.1094 19.5091 59.9123 19.6207 59.7923 19.9797C59.5179 20.8013 59.2187 21.6149 58.8878 22.4166C58.8133 22.5987 58.5707 22.8407 58.4024 22.8433C56.4762 22.8739 54.55 22.8619 52.5176 22.8619C52.9657 21.809 53.3766 20.8319 53.7958 19.8587C56.3011 14.0344 58.8078 8.21147 61.3173 2.38852C61.9502 0.920814 62.7444 0.407649 64.3742 0.40499C65.9116 0.402331 67.449 0.40499 69.0746 0.40499V0.40632ZM64.9409 6.72915C64.8816 6.7225 64.8223 6.71452 64.763 6.70787C63.7537 9.41196 62.7444 12.1174 61.7048 14.9012H66.6934C66.0991 12.128 65.52 9.42924 64.9409 6.72915Z" fill="#8000E5"/>
                              <path d="M15.516 15.7002C16.6095 13.0095 17.6298 10.5008 18.6488 7.99081C19.6705 5.47816 20.6922 2.96685 21.7222 0.431599H27.9021C27.8263 0.664252 27.7822 0.851703 27.7063 1.02852C24.6605 8.09716 21.6077 15.1631 18.5757 22.2371C18.3702 22.7157 18.1317 22.8912 17.5829 22.8779C15.8842 22.8354 14.1841 22.854 12.484 22.8659C12.1338 22.8686 11.9669 22.7915 11.8704 22.4259C10.5977 17.5601 9.30438 12.6984 8.01241 7.83659C7.71596 6.72252 7.40435 5.61111 7.101 4.49836C6.89418 3.74191 6.43365 3.16626 5.67667 2.89904C3.97932 2.29814 2.25991 1.75306 0.558429 1.16412C0.346088 1.091 0.184764 0.884939 0 0.74003C0.227508 0.627027 0.455016 0.418305 0.683903 0.416975C3.7849 0.397034 6.88591 0.403681 9.98691 0.407669C11.5905 0.410328 12.6812 1.29574 12.9707 2.80332C13.7594 6.91263 14.5522 11.0219 15.3464 15.1312C15.3713 15.2575 15.4195 15.3798 15.5174 15.7002H15.516Z" fill="#8000E5"/>
                              <path d="M36.809 17.1758C37.2255 17.3499 37.5536 17.4882 37.8832 17.6251C39.8232 18.4307 41.8404 18.7604 43.9349 18.456C44.4878 18.3749 45.0586 18.1821 45.5398 17.9096C46.7808 17.2063 46.9076 15.7865 45.7701 14.929C45.0007 14.3494 44.0948 13.9399 43.2579 13.4413C42.3616 12.9096 41.424 12.4257 40.5912 11.8128C37.1482 9.27886 37.8459 5.3384 39.9238 3.09696C41.5136 1.38065 43.586 0.561713 45.8832 0.194787C48.4244 -0.212022 50.9104 0.0246184 53.3358 0.846214C53.5205 0.908697 53.7949 1.16794 53.7715 1.28892C53.4888 2.73934 53.1565 4.17912 52.8601 5.5192C51.3889 5.23603 49.9935 4.91564 48.5802 4.71223C47.5047 4.55802 46.414 4.65108 45.4364 5.18152C44.1017 5.90474 43.9845 7.15176 45.2296 7.99595C46.2003 8.65403 47.2772 9.16852 48.3113 9.74018C49.5909 10.4474 50.818 11.2132 51.7267 12.3711C53.3551 14.4451 52.9001 17.879 51.2882 19.816C49.5798 21.87 47.2455 22.7355 44.6588 23.0838C41.817 23.4653 39.0331 23.1383 36.3113 22.2728C35.9004 22.1412 35.717 22.0016 35.837 21.523C36.19 20.1125 36.4767 18.686 36.809 17.1784V17.1758Z" fill="#8000E5"/>
                              <path d="M36.4961 0.443359C36.2673 1.53483 36.0563 2.59174 35.8246 3.64333C34.4624 9.83055 33.0877 16.0164 31.7419 22.2077C31.6302 22.7195 31.4441 22.8883 30.8967 22.8777C29.1787 22.8431 27.4593 22.8644 25.6475 22.8644C27.2993 15.3504 28.9346 7.91748 30.5768 0.443359H36.4948H36.4961Z" fill="#8000E5"/>
                              </svg>
                            </button>
                            <button class="btn-select-card">
                            <svg width="51" height="31" viewBox="0 0 51 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16.0193" cy="15.1316" r="15.1316" fill="#898989"/>
                            <circle cx="16.0193" cy="15.1316" r="15.1316" fill="#C4C4C4"/>
                            <circle cx="35.7566" cy="15.1316" r="15.1316" fill="#898989"/>
                            <circle cx="35.7566" cy="15.1316" r="15.1316" fill="#C4C4C4"/>
                            </svg>

                            </button>

                          </div>
                        </div>

                        <div class="checkout-page-inner-wrapper">
                          <div class="left-side">
                            <p>CARD DELIVERY</p>
                          </div>
                          <div class="right-side-second">

                          <div class="inner">

                            <div class="input-radio-main">
                              <input id="radio1" type="radio" name="radio" class="hidden" checked />
                              <label for="radio1">
                              <span></span>
                              Type 1</label>
                            </div>

                            <div class="input-radio-main">
                              <input id="radio2" type="radio" name="radio" class="hidden" />
                              <label for="radio2">
                              <span></span>
                              Type 2</label>
                            </div>

                          </div>
                          </div>
                        </div>

                        <hr/>

                        <div class="checkout-page-inner-wrapper">
                          <div class="left-side">
                            <p>TOTAL AMOUNT</p>
                          </div>
                          <div class="right-side">
                            <p>€ 0.00</p>
                          </div>
                        </div>

                        <button type="submit" class="btn-success btn-rounded-more">CONTINUE</button>
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