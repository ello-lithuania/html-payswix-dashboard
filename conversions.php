<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Conversions</h1>
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

            <div class="content-wrapper-full new-conversion">
                <div class="content-wrapper-full-inner">
                    <h2>NEW CONVERSION</h2>

                    <div class="columns2-mobile-1">
                      <div class="columns2-mobile-1-inner">
                        <label>From currency account*</label>
                        <button class="button-select-with-image">
                          <img src="./img/icon-down.svg"/>
                          <img src="./img/icon-card-image.svg"/>
                          LT**************************
                        </button>
                      </div>
                      <div class="columns2-mobile-1-inner">

                        <div class="exchange-box">
                          <div class="left-side">
                            <label>Amount</label>
                            <div class="exchange-input">
                              <div class="left-side">
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option value="volvo">Eur</option>
                                  <option value="saab">USD</option>
                                  <option value="mercedes">RB</option>
                                  <option value="audi">ZL</option>
                                </select>
                                </div>
                              </div>
                              <div class="right-side">
                                <input value="246">
                              </div>
                            </div>
                          </div>
                          <div class="middle">
                            <button><img src="./img/icon-exchange-btn.svg"></button>
                          </div>
                          <div class="right-side">
                            <div class="exchange-input">
                              <div class="left-side">
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option value="volvo">Eur</option>
                                  <option value="saab">USD</option>
                                  <option value="mercedes">RB</option>
                                  <option value="audi">ZL</option>
                                </select>
                                </div>
                              </div>
                              <div class="right-side">
                                <input value="246">
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="columns2-mobile-1 mb-0 antispace-button">
                      <div class="columns2-mobile-1-inner">
                      </div>
                      <div class="columns2-mobile-1-inner">
                        <button class="btn-success btn-rounded-more">Convert</button>
                      </div>
                    </div>
                    

                  </div>
              </div>

              <div class="content-wrapper-full conversions-page">
                <div class="content-wrapper-full-inner">
                    <h2>CONVERSIONS LIST</h2>

                     <div class="from-to-box">
                      <div>
                            <label>FROm</label>

                          <button class="add-icon-btn icon-big">
                            <span>
                              <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.58333 21C1.16111 21 0.791667 20.8425 0.475 20.5275C0.158333 20.2125 0 19.845 0 19.425V3.15C0 2.73 0.158333 2.3625 0.475 2.0475C0.791667 1.7325 1.16111 1.575 1.58333 1.575H3.29861V0H5.01389V1.575H13.9861V0H15.7014V1.575H17.4167C17.8389 1.575 18.2083 1.7325 18.525 2.0475C18.8417 2.3625 19 2.73 19 3.15V19.425C19 19.845 18.8417 20.2125 18.525 20.5275C18.2083 20.8425 17.8389 21 17.4167 21H1.58333ZM1.58333 19.425H17.4167V8.1375H1.58333V19.425ZM1.58333 6.5625H17.4167V3.15H1.58333V6.5625ZM9.5 12.6C9.20093 12.6 8.95023 12.4994 8.74792 12.2981C8.5456 12.0969 8.44444 11.8475 8.44444 11.55C8.44444 11.2525 8.5456 11.0031 8.74792 10.8019C8.95023 10.6006 9.20093 10.5 9.5 10.5C9.79907 10.5 10.0498 10.6006 10.2521 10.8019C10.4544 11.0031 10.5556 11.2525 10.5556 11.55C10.5556 11.8475 10.4544 12.0969 10.2521 12.2981C10.0498 12.4994 9.79907 12.6 9.5 12.6ZM5.27778 12.6C4.9787 12.6 4.72801 12.4994 4.52569 12.2981C4.32338 12.0969 4.22222 11.8475 4.22222 11.55C4.22222 11.2525 4.32338 11.0031 4.52569 10.8019C4.72801 10.6006 4.9787 10.5 5.27778 10.5C5.57685 10.5 5.82755 10.6006 6.02986 10.8019C6.23218 11.0031 6.33333 11.2525 6.33333 11.55C6.33333 11.8475 6.23218 12.0969 6.02986 12.2981C5.82755 12.4994 5.57685 12.6 5.27778 12.6ZM13.7222 12.6C13.4231 12.6 13.1725 12.4994 12.9701 12.2981C12.7678 12.0969 12.6667 11.8475 12.6667 11.55C12.6667 11.2525 12.7678 11.0031 12.9701 10.8019C13.1725 10.6006 13.4231 10.5 13.7222 10.5C14.0213 10.5 14.272 10.6006 14.4743 10.8019C14.6766 11.0031 14.7778 11.2525 14.7778 11.55C14.7778 11.8475 14.6766 12.0969 14.4743 12.2981C14.272 12.4994 14.0213 12.6 13.7222 12.6ZM9.5 16.8C9.20093 16.8 8.95023 16.6994 8.74792 16.4981C8.5456 16.2969 8.44444 16.0475 8.44444 15.75C8.44444 15.4525 8.5456 15.2031 8.74792 15.0019C8.95023 14.8006 9.20093 14.7 9.5 14.7C9.79907 14.7 10.0498 14.8006 10.2521 15.0019C10.4544 15.2031 10.5556 15.4525 10.5556 15.75C10.5556 16.0475 10.4544 16.2969 10.2521 16.4981C10.0498 16.6994 9.79907 16.8 9.5 16.8ZM5.27778 16.8C4.9787 16.8 4.72801 16.6994 4.52569 16.4981C4.32338 16.2969 4.22222 16.0475 4.22222 15.75C4.22222 15.4525 4.32338 15.2031 4.52569 15.0019C4.72801 14.8006 4.9787 14.7 5.27778 14.7C5.57685 14.7 5.82755 14.8006 6.02986 15.0019C6.23218 15.2031 6.33333 15.4525 6.33333 15.75C6.33333 16.0475 6.23218 16.2969 6.02986 16.4981C5.82755 16.6994 5.57685 16.8 5.27778 16.8ZM13.7222 16.8C13.4231 16.8 13.1725 16.6994 12.9701 16.4981C12.7678 16.2969 12.6667 16.0475 12.6667 15.75C12.6667 15.4525 12.7678 15.2031 12.9701 15.0019C13.1725 14.8006 13.4231 14.7 13.7222 14.7C14.0213 14.7 14.272 14.8006 14.4743 15.0019C14.6766 15.2031 14.7778 15.4525 14.7778 15.75C14.7778 16.0475 14.6766 16.2969 14.4743 16.4981C14.272 16.6994 14.0213 16.8 13.7222 16.8Z" fill="#8000E5"/>
                              </svg>
                            </span>
                            03/11/2023 
                          </button>
                      </div>
                      <div>
                            <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8301 5.29124L12.2593 8.86204C12.0625 9.05885 11.8046 9.15724 11.5466 9.15724C11.2887 9.15724 11.0308 9.05885 10.834 8.86204C10.4404 8.46845 10.4404 7.83034 10.834 7.43675L12.6843 5.58644L1.00783 5.58644C0.451223 5.58644 0 5.13522 0 4.57861C0 4.02201 0.451223 3.57079 1.00783 3.57079L12.6843 3.57079L10.834 1.72048C10.4404 1.32689 10.4404 0.688779 10.834 0.295191C11.2276 -0.098397 11.8657 -0.098397 12.2593 0.295191L15.8301 3.86599C16.2236 4.25954 16.2236 4.89769 15.8301 5.29124Z" fill="#898989"/>
                            </svg>
                      </div>
                      <div>
                            <label>To</label>
                          <button class="add-icon-btn icon-big">
                            <span>
                              <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M1.58333 21C1.16111 21 0.791667 20.8425 0.475 20.5275C0.158333 20.2125 0 19.845 0 19.425V3.15C0 2.73 0.158333 2.3625 0.475 2.0475C0.791667 1.7325 1.16111 1.575 1.58333 1.575H3.29861V0H5.01389V1.575H13.9861V0H15.7014V1.575H17.4167C17.8389 1.575 18.2083 1.7325 18.525 2.0475C18.8417 2.3625 19 2.73 19 3.15V19.425C19 19.845 18.8417 20.2125 18.525 20.5275C18.2083 20.8425 17.8389 21 17.4167 21H1.58333ZM1.58333 19.425H17.4167V8.1375H1.58333V19.425ZM1.58333 6.5625H17.4167V3.15H1.58333V6.5625ZM9.5 12.6C9.20093 12.6 8.95023 12.4994 8.74792 12.2981C8.5456 12.0969 8.44444 11.8475 8.44444 11.55C8.44444 11.2525 8.5456 11.0031 8.74792 10.8019C8.95023 10.6006 9.20093 10.5 9.5 10.5C9.79907 10.5 10.0498 10.6006 10.2521 10.8019C10.4544 11.0031 10.5556 11.2525 10.5556 11.55C10.5556 11.8475 10.4544 12.0969 10.2521 12.2981C10.0498 12.4994 9.79907 12.6 9.5 12.6ZM5.27778 12.6C4.9787 12.6 4.72801 12.4994 4.52569 12.2981C4.32338 12.0969 4.22222 11.8475 4.22222 11.55C4.22222 11.2525 4.32338 11.0031 4.52569 10.8019C4.72801 10.6006 4.9787 10.5 5.27778 10.5C5.57685 10.5 5.82755 10.6006 6.02986 10.8019C6.23218 11.0031 6.33333 11.2525 6.33333 11.55C6.33333 11.8475 6.23218 12.0969 6.02986 12.2981C5.82755 12.4994 5.57685 12.6 5.27778 12.6ZM13.7222 12.6C13.4231 12.6 13.1725 12.4994 12.9701 12.2981C12.7678 12.0969 12.6667 11.8475 12.6667 11.55C12.6667 11.2525 12.7678 11.0031 12.9701 10.8019C13.1725 10.6006 13.4231 10.5 13.7222 10.5C14.0213 10.5 14.272 10.6006 14.4743 10.8019C14.6766 11.0031 14.7778 11.2525 14.7778 11.55C14.7778 11.8475 14.6766 12.0969 14.4743 12.2981C14.272 12.4994 14.0213 12.6 13.7222 12.6ZM9.5 16.8C9.20093 16.8 8.95023 16.6994 8.74792 16.4981C8.5456 16.2969 8.44444 16.0475 8.44444 15.75C8.44444 15.4525 8.5456 15.2031 8.74792 15.0019C8.95023 14.8006 9.20093 14.7 9.5 14.7C9.79907 14.7 10.0498 14.8006 10.2521 15.0019C10.4544 15.2031 10.5556 15.4525 10.5556 15.75C10.5556 16.0475 10.4544 16.2969 10.2521 16.4981C10.0498 16.6994 9.79907 16.8 9.5 16.8ZM5.27778 16.8C4.9787 16.8 4.72801 16.6994 4.52569 16.4981C4.32338 16.2969 4.22222 16.0475 4.22222 15.75C4.22222 15.4525 4.32338 15.2031 4.52569 15.0019C4.72801 14.8006 4.9787 14.7 5.27778 14.7C5.57685 14.7 5.82755 14.8006 6.02986 15.0019C6.23218 15.2031 6.33333 15.4525 6.33333 15.75C6.33333 16.0475 6.23218 16.2969 6.02986 16.4981C5.82755 16.6994 5.57685 16.8 5.27778 16.8ZM13.7222 16.8C13.4231 16.8 13.1725 16.6994 12.9701 16.4981C12.7678 16.2969 12.6667 16.0475 12.6667 15.75C12.6667 15.4525 12.7678 15.2031 12.9701 15.0019C13.1725 14.8006 13.4231 14.7 13.7222 14.7C14.0213 14.7 14.272 14.8006 14.4743 15.0019C14.6766 15.2031 14.7778 15.4525 14.7778 15.75C14.7778 16.0475 14.6766 16.2969 14.4743 16.4981C14.272 16.6994 14.0213 16.8 13.7222 16.8Z" fill="#8000E5"/>
                              </svg>
                            </span>
                            03/23/2023 
                          </button>
                      </div>
                      <div>
                        <button class="btn-success btn-rounded-more !m-0 !w-auto px-6">SUBMIT REQUEST</button>
                      </div>
                     </div>

                    <hr/>

                    <p class="date-selection">03/11/2023 - 03/23/2023</p>

                    <div class="filter-section-2-3">
                      <div class="left-side">
                        <div class="entries-box">
                          <p>Entries</p>
                          <div class="custom-select select-grayscale inline-block">
                          <select class="" name="cars" id="cars">
                            <option value="volvo">10</option>
                            <option value="saab">10</option>
                            <option value="mercedes">10</option>
                            <option value="audi">10</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="right-side">

                        <button><img src="./img/icon-three-lines.svg"></button>
                        
                        <div class="custom-select select-grayscale">
                        <select class="select-grayscale" name="cars" id="cars">
                          <option value="volvo">TO AMOUNT</option>
                          <option value="saab">Saab</option>
                          <option value="mercedes">Mercedes</option>
                          <option value="audi">Audi</option>
                        </select>
                        </div>

                        <div class="inline-icons">
                        <button><img src="./img/icon-print.svg"></button>
                        <button><img src="./img/icon-download-active.svg"></button>
                        </div>
                      </div>
                    </div>

                    <div class="conversions-table conversions-heading">
                      <div><p>Date</p></div>
                      <div><p>From Amount</p></div>
                      <div><p>From Currency</p></div>
                      <div><p>To Amount</p></div>
                      <div><p>To Currency</p></div>
                      <div><p>Actual Rate</p></div>
                      <div><p>Status</p></div>
                      <div><p>ID</p></div>
                    </div>

                    <div class="conversions-table">
                      <div><p>03/11/2022</p></div>
                      <div><p>0.54</p><p>GBP</p></div>
                      <div><p>GBP</p></div>
                      <div><p>1.00</p><p>AUD</p></div>
                      <div><p>AUD</p></div>
                      <div><p>1.8413</p></div>
                      <div><p>Done</p></div>
                      <div><p>2865</p></div>
                    </div>

                    <hr class="table-divider"/>
                    <div class="conversions-table">
                      <div><p>03/11/2022</p></div>
                      <div><p>0.54</p></div>
                      <div><p>GBP</p></div>
                      <div><p>1.00</p></div>
                      <div><p>AUD</p></div>
                      <div><p>1.8413</p></div>
                      <div><p>Done</p></div>
                      <div><p>2865</p></div>
                    </div>

                    <hr class="table-divider"/>
                    <div class="conversions-table">
                      <div><p>03/11/2022</p></div>
                      <div><p>0.54</p></div>
                      <div><p>GBP</p></div>
                      <div><p>1.00</p></div>
                      <div><p>AUD</p></div>
                      <div><p>1.8413</p></div>
                      <div><p>Done</p></div>
                      <div><p>2865</p></div>
                    </div>

                    <hr class="table-divider"/>
                    <div class="conversions-table">
                      <div><p>03/11/2022</p></div>
                      <div><p>0.54</p></div>
                      <div><p>GBP</p></div>
                      <div><p>1.00</p></div>
                      <div><p>AUD</p></div>
                      <div><p>1.8413</p></div>
                      <div><p>Done</p></div>
                      <div><p>2865</p></div>
                    </div>

                    <hr class="table-divider"/>
                    <div class="conversions-table">
                      <div><p>03/11/2022</p></div>
                      <div><p>0.54</p></div>
                      <div><p>GBP</p></div>
                      <div><p>1.00</p></div>
                      <div><p>AUD</p></div>
                      <div><p>1.8413</p></div>
                      <div><p>Done</p></div>
                      <div><p>2865</p></div>
                    </div>

                    <hr class="table-divider"/>
                    <div class="conversions-table">
                      <div><p>03/11/2022</p></div>
                      <div><p>0.54</p></div>
                      <div><p>GBP</p></div>
                      <div><p>1.00</p></div>
                      <div><p>AUD</p></div>
                      <div><p>1.8413</p></div>
                      <div><p>Done</p></div>
                      <div><p>2865</p></div>
                    </div>

                    <hr class="table-divider"/>
                    <div class="conversions-table">
                      <div><p>03/11/2022</p></div>
                      <div><p>0.54</p></div>
                      <div><p>GBP</p></div>
                      <div><p>1.00</p></div>
                      <div><p>AUD</p></div>
                      <div><p>1.8413</p></div>
                      <div><p>Done</p></div>
                      <div><p>2865</p></div>
                    </div>

                    <hr class="table-divider"/>
                    <div class="conversions-table">
                      <div><p>03/11/2022</p></div>
                      <div><p>0.54</p></div>
                      <div><p>GBP</p></div>
                      <div><p>1.00</p></div>
                      <div><p>AUD</p></div>
                      <div><p>1.8413</p></div>
                      <div><p>Done</p></div>
                      <div><p>2865</p></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="table-pagination">
                      <div class="left-side">
                        <p>Showing 06 of 100</p>
                      </div>
                      <div class="right-side">
                        <button><img src="./img/icon-arrow-right-brown.svg"></button>
                        <button><img src="./img/icon-arrow-left-brown.svg"></button>
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