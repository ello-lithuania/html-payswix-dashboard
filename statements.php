<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full statements-page">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Statements</h1>
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
                    <h2>New statement</h2>

                    <div class="columns2-mobile-1">
                      <div class="columns2-mobile-1-inner">
                        <label>IBAN</label>
                        <button class="button-select-with-image">
                          <img src="./img/icon-down.svg"/>
                          <img src="./img/icon-card-image.svg"/>
                          LT**************************
                        </button>

                      </div>
                      <div class="columns2-mobile-1-inner">
                        <div class="search-input">
                          <form>
                            <button type="submit">
                              <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20.5253 22L12.5499 14.0547C11.9681 14.5563 11.2759 14.9476 10.4733 15.2285C9.67077 15.5093 8.81806 15.6498 7.91519 15.6498C5.70816 15.6498 3.83721 14.8874 2.30233 13.3625C0.767442 11.8377 0 9.99179 0 7.8249C0 5.658 0.767442 3.81213 2.30233 2.28728C3.83721 0.762426 5.6881 0 7.85499 0C10.0219 0 11.8678 0.762426 13.3926 2.28728C14.9175 3.81213 15.6799 5.658 15.6799 7.8249C15.6799 8.68764 15.5394 9.52029 15.2586 10.3228C14.9777 11.1254 14.5663 11.8778 14.0246 12.58L22.0301 20.4952L20.5253 22ZM7.88509 13.6033C9.47013 13.6033 10.8194 13.0365 11.933 11.9029C13.0465 10.7693 13.6033 9.40994 13.6033 7.8249C13.6033 6.23985 13.0465 4.88053 11.933 3.74692C10.8194 2.61332 9.47013 2.04651 7.88509 2.04651C6.25992 2.04651 4.88555 2.61332 3.76197 3.74692C2.6384 4.88053 2.07661 6.23985 2.07661 7.8249C2.07661 9.40994 2.6384 10.7693 3.76197 11.9029C4.88555 13.0365 6.25992 13.6033 7.88509 13.6033Z" fill="#898989"/>
                              </svg>
                            </button>
                            <input placeholder="Type name"/>
                          </form>
                        </div>
                      </div>
                    </div>

                    <h3>Period</h3>

                    <div class="btn-with-filters">

                      <div class="left-side">
                          <a href="./cards3.php" class="add-icon-btn icon-big">
                            <span>
                              <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.58333 21C1.16111 21 0.791667 20.8425 0.475 20.5275C0.158333 20.2125 0 19.845 0 19.425V3.15C0 2.73 0.158333 2.3625 0.475 2.0475C0.791667 1.7325 1.16111 1.575 1.58333 1.575H3.29861V0H5.01389V1.575H13.9861V0H15.7014V1.575H17.4167C17.8389 1.575 18.2083 1.7325 18.525 2.0475C18.8417 2.3625 19 2.73 19 3.15V19.425C19 19.845 18.8417 20.2125 18.525 20.5275C18.2083 20.8425 17.8389 21 17.4167 21H1.58333ZM1.58333 19.425H17.4167V8.1375H1.58333V19.425ZM1.58333 6.5625H17.4167V3.15H1.58333V6.5625ZM9.5 12.6C9.20093 12.6 8.95023 12.4994 8.74792 12.2981C8.5456 12.0969 8.44444 11.8475 8.44444 11.55C8.44444 11.2525 8.5456 11.0031 8.74792 10.8019C8.95023 10.6006 9.20093 10.5 9.5 10.5C9.79907 10.5 10.0498 10.6006 10.2521 10.8019C10.4544 11.0031 10.5556 11.2525 10.5556 11.55C10.5556 11.8475 10.4544 12.0969 10.2521 12.2981C10.0498 12.4994 9.79907 12.6 9.5 12.6ZM5.27778 12.6C4.9787 12.6 4.72801 12.4994 4.52569 12.2981C4.32338 12.0969 4.22222 11.8475 4.22222 11.55C4.22222 11.2525 4.32338 11.0031 4.52569 10.8019C4.72801 10.6006 4.9787 10.5 5.27778 10.5C5.57685 10.5 5.82755 10.6006 6.02986 10.8019C6.23218 11.0031 6.33333 11.2525 6.33333 11.55C6.33333 11.8475 6.23218 12.0969 6.02986 12.2981C5.82755 12.4994 5.57685 12.6 5.27778 12.6ZM13.7222 12.6C13.4231 12.6 13.1725 12.4994 12.9701 12.2981C12.7678 12.0969 12.6667 11.8475 12.6667 11.55C12.6667 11.2525 12.7678 11.0031 12.9701 10.8019C13.1725 10.6006 13.4231 10.5 13.7222 10.5C14.0213 10.5 14.272 10.6006 14.4743 10.8019C14.6766 11.0031 14.7778 11.2525 14.7778 11.55C14.7778 11.8475 14.6766 12.0969 14.4743 12.2981C14.272 12.4994 14.0213 12.6 13.7222 12.6ZM9.5 16.8C9.20093 16.8 8.95023 16.6994 8.74792 16.4981C8.5456 16.2969 8.44444 16.0475 8.44444 15.75C8.44444 15.4525 8.5456 15.2031 8.74792 15.0019C8.95023 14.8006 9.20093 14.7 9.5 14.7C9.79907 14.7 10.0498 14.8006 10.2521 15.0019C10.4544 15.2031 10.5556 15.4525 10.5556 15.75C10.5556 16.0475 10.4544 16.2969 10.2521 16.4981C10.0498 16.6994 9.79907 16.8 9.5 16.8ZM5.27778 16.8C4.9787 16.8 4.72801 16.6994 4.52569 16.4981C4.32338 16.2969 4.22222 16.0475 4.22222 15.75C4.22222 15.4525 4.32338 15.2031 4.52569 15.0019C4.72801 14.8006 4.9787 14.7 5.27778 14.7C5.57685 14.7 5.82755 14.8006 6.02986 15.0019C6.23218 15.2031 6.33333 15.4525 6.33333 15.75C6.33333 16.0475 6.23218 16.2969 6.02986 16.4981C5.82755 16.6994 5.57685 16.8 5.27778 16.8ZM13.7222 16.8C13.4231 16.8 13.1725 16.6994 12.9701 16.4981C12.7678 16.2969 12.6667 16.0475 12.6667 15.75C12.6667 15.4525 12.7678 15.2031 12.9701 15.0019C13.1725 14.8006 13.4231 14.7 13.7222 14.7C14.0213 14.7 14.272 14.8006 14.4743 15.0019C14.6766 15.2031 14.7778 15.4525 14.7778 15.75C14.7778 16.0475 14.6766 16.2969 14.4743 16.4981C14.272 16.6994 14.0213 16.8 13.7222 16.8Z" fill="#8000E5"/>
                              </svg>
                            </span>
                            Jan 6, 2023 - Jan 6, 2023 
                          </a>
                      </div>
                      <div class="right-side">
                        <button class="button-check-item active">Today</button>
                        <button class="button-check-item">Current month</button>
                        <button class="button-check-item">Previous month</button>
                        <button class="button-check-item">Last month and this month</button>
                        <button class="button-check-item">Last year</button>
                      </div>

                    </div>

                    <div class="filters-submit-wrapper">
                      <div class="left-side">
                        <button><img src="./img/icon-settings.svg"/>
                        Show advanced settings
                        </button>
                      </div>
                      <div class="right-side">
                        <button class="btn-success">SUBMIT REQUEST</button>
                      </div>
                    </div>
                    
                    <hr/>

                    <div class="table-top-statement">
                      <div class="left-side">
                        <p>Name Lastname<br/>
                        ID76890<br/>
                        LT*****************<br/>
                        Jan 6, 2023 - Jan 6, 2023</p>
                      </div>
                      <div class="right-side">
                        <button><img src="./img/icon-print.svg"/></button>
                        <button><img src="./img/icon-download-active.svg"/></button>
                      </div>
                    </div>

                    <div class="table-statements-main table-statements-heading">
                      <div><p>Date</p><button><img src="./img/icon-arrow-up.svg"/></button></div>
                      <div><p>Beneficiary</p><button><img src="./img/icon-arrow-up.svg"/></button></div>
                      <div><p>Details</p></div>
                      <div><p>Turnover</p><button><img src="./img/icon-arrow-up.svg"/></button></div>
                      <div><p>Balance</p></div>
                    </div>

                    <div class="table-statements-main transaction_popup">
                      <div><span>1.</span><p>Jan 6, 2023</p></div>
                      <div><p>Beneficiary Name</p><div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div></div>
                      <div><p>Lorem ipsum dolor sit amet</p></div>
                      <div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div>
                      <div><p>$245.00</p></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="table-statements-main transaction_popup">
                      <div><span>1.</span><p>Jan 6, 2023</p></div>
                      <div><p>Beneficiary Name</p><div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div></div>
                      <div><p>Lorem ipsum dolor sit amet</p></div>
                      <div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div>
                      <div><p>$245.00</p></div>
                    </div>
                    
                    <hr class="table-divider"/>

                    <div class="table-statements-main transaction_popup">
                      <div><span>1.</span><p>Jan 6, 2023</p></div>
                      <div><p>Beneficiary Name</p><div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div></div>
                      <div><p>Lorem ipsum dolor sit amet</p></div>
                      <div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div>
                      <div><p>$245.00</p></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="table-statements-main transaction_popup">
                      <div><span>1.</span><p>Jan 6, 2023</p></div>
                      <div><p>Beneficiary Name</p><div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div></div>
                      <div><p>Lorem ipsum dolor sit amet</p></div>
                      <div><img src="./img/icon-arrow-red.svg"/><p>-$45.00</p></div>
                      <div><p>$245.00</p></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="table-statements-main transaction_popup">
                      <div><span>1.</span><p>Jan 6, 2023</p></div>
                      <div><p>Beneficiary Name</p><div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div></div>
                      <div><p>Lorem ipsum dolor sit amet</p></div>
                      <div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div>
                      <div><p>$245.00</p></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="table-statements-main transaction_popup">
                      <div><span>1.</span><p>Jan 6, 2023</p></div>
                      <div><p>Beneficiary Name</p><div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div></div>
                      <div><p>Lorem ipsum dolor sit amet</p></div>
                      <div><img src="./img/icon-arrow-green.svg"/><p>+$45.00</p></div>
                      <div><p>$245.00</p></div>
                    </div>

                </div>


            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="popup-wrapper transaction-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>

                    <h2>transaction DETAIL</h2>

                  <div class="thumbnail-info">
                      <div class="left-side">
                        <div class="thumbnail-box">
                            <img src="./img/icon-thumbnail-popup.svg"/>
                            <p>Samantha Williams</p>
                        </div>
                      </div>
                      <div class="right-side">
                      <p>Jan 6, 2023</p>
                      </div>
                  </div>

                  <hr/>

                  <div class="transaction-details">
                      <div class="left-side">
                        <p>Details</p>
                        <p>Lorem ipsum dolor sit amet ipsum </p> 
                      </div>
                      <div class="right-side">
                        <div class="transaction-details-inner">
                          <div>
                            <p>Turnover</p>
                            <img src="./img/icon-arrow-green.svg"/><p>+$45.00</p> 
                          </div>
                          <div>
                            <p>BALANCE</p>
                            <p>$245.00</p>
                          </div>

                        </div>
                      </div>
                  </div>
                  
                </div>
    </section>

    <!-- footer --> 
    <?php include('./footer.php');?>
    
    <?php include('./footer-bot.php');?>