<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar2.php'); ?>

        <div class="w-full">
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
                              Identity vertification
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
                              Personal information
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
                              Tax information
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs4" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>4</span>
                              </div>
                              <div>
                              Permanent adress
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs5" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>5</span>
                              </div>
                              <div>
                              Personal information
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs6" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>6</span>
                              </div>
                              <div>
                              Purpose of opening account
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs7" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>7</span>
                              </div>
                              <div>
                              Field of activity
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs8" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>8</span>
                              </div>
                              <div>
                              Expected incoming activity
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs9" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>9</span>
                              </div>
                              <div>
                              Expected outgoing activity
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="swiper-slide-inner">
                          <a data-tab_id="tabs10" href="javascript:void(0)" class="js_tap_btn block">
                            <div class="swiper-slide-inner-button">
                              <div>
                                <span>10</span>
                              </div>
                              <div>
                              
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>

                    <hr class="swiper-divider"/>

                        <div class="content mt-8 md:mt-16">


                          <div id="tabs1" class="js_tab_view">
                            <div class="table-spacing-desktop">
                              <h2>Identity verification</h2>

                              <div class="input-group input-group-end">
                                <div>
                                  <label>FIRST NAME *</label>
                                  <input placeholder="Enter First Name" required>
                                </div>
                                <div>
                                  <label>LAST NAME *</label>
                                  <input placeholder="Enter Last Name" required>
                                </div>
                              </div>

                              <div class="input-group input-group-end">
                                <div>
                                  <label>PERSONAL CODE</label>
                                  <input placeholder="Enter Personal Code">
                                </div>
                                
                                <div>
                                  <label>DATE OF BIRTH *</label>

                                <div class="date-input">
                                  <div>
                                      <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1.58333 21C1.16111 21 0.791667 20.8425 0.475 20.5275C0.158333 20.2125 0 19.845 0 19.425V3.15C0 2.73 0.158333 2.3625 0.475 2.0475C0.791667 1.7325 1.16111 1.575 1.58333 1.575H3.29861V0H5.01389V1.575H13.9861V0H15.7014V1.575H17.4167C17.8389 1.575 18.2083 1.7325 18.525 2.0475C18.8417 2.3625 19 2.73 19 3.15V19.425C19 19.845 18.8417 20.2125 18.525 20.5275C18.2083 20.8425 17.8389 21 17.4167 21H1.58333ZM1.58333 19.425H17.4167V8.1375H1.58333V19.425ZM1.58333 6.5625H17.4167V3.15H1.58333V6.5625ZM9.5 12.6C9.20093 12.6 8.95023 12.4994 8.74792 12.2981C8.5456 12.0969 8.44444 11.8475 8.44444 11.55C8.44444 11.2525 8.5456 11.0031 8.74792 10.8019C8.95023 10.6006 9.20093 10.5 9.5 10.5C9.79907 10.5 10.0498 10.6006 10.2521 10.8019C10.4544 11.0031 10.5556 11.2525 10.5556 11.55C10.5556 11.8475 10.4544 12.0969 10.2521 12.2981C10.0498 12.4994 9.79907 12.6 9.5 12.6ZM5.27778 12.6C4.9787 12.6 4.72801 12.4994 4.52569 12.2981C4.32338 12.0969 4.22222 11.8475 4.22222 11.55C4.22222 11.2525 4.32338 11.0031 4.52569 10.8019C4.72801 10.6006 4.9787 10.5 5.27778 10.5C5.57685 10.5 5.82755 10.6006 6.02986 10.8019C6.23218 11.0031 6.33333 11.2525 6.33333 11.55C6.33333 11.8475 6.23218 12.0969 6.02986 12.2981C5.82755 12.4994 5.57685 12.6 5.27778 12.6ZM13.7222 12.6C13.4231 12.6 13.1725 12.4994 12.9701 12.2981C12.7678 12.0969 12.6667 11.8475 12.6667 11.55C12.6667 11.2525 12.7678 11.0031 12.9701 10.8019C13.1725 10.6006 13.4231 10.5 13.7222 10.5C14.0213 10.5 14.272 10.6006 14.4743 10.8019C14.6766 11.0031 14.7778 11.2525 14.7778 11.55C14.7778 11.8475 14.6766 12.0969 14.4743 12.2981C14.272 12.4994 14.0213 12.6 13.7222 12.6ZM9.5 16.8C9.20093 16.8 8.95023 16.6994 8.74792 16.4981C8.5456 16.2969 8.44444 16.0475 8.44444 15.75C8.44444 15.4525 8.5456 15.2031 8.74792 15.0019C8.95023 14.8006 9.20093 14.7 9.5 14.7C9.79907 14.7 10.0498 14.8006 10.2521 15.0019C10.4544 15.2031 10.5556 15.4525 10.5556 15.75C10.5556 16.0475 10.4544 16.2969 10.2521 16.4981C10.0498 16.6994 9.79907 16.8 9.5 16.8ZM5.27778 16.8C4.9787 16.8 4.72801 16.6994 4.52569 16.4981C4.32338 16.2969 4.22222 16.0475 4.22222 15.75C4.22222 15.4525 4.32338 15.2031 4.52569 15.0019C4.72801 14.8006 4.9787 14.7 5.27778 14.7C5.57685 14.7 5.82755 14.8006 6.02986 15.0019C6.23218 15.2031 6.33333 15.4525 6.33333 15.75C6.33333 16.0475 6.23218 16.2969 6.02986 16.4981C5.82755 16.6994 5.57685 16.8 5.27778 16.8ZM13.7222 16.8C13.4231 16.8 13.1725 16.6994 12.9701 16.4981C12.7678 16.2969 12.6667 16.0475 12.6667 15.75C12.6667 15.4525 12.7678 15.2031 12.9701 15.0019C13.1725 14.8006 13.4231 14.7 13.7222 14.7C14.0213 14.7 14.272 14.8006 14.4743 15.0019C14.6766 15.2031 14.7778 15.4525 14.7778 15.75C14.7778 16.0475 14.6766 16.2969 14.4743 16.4981C14.272 16.6994 14.0213 16.8 13.7222 16.8Z" fill="#8000E5"/>
                                      </svg>
                                  </div>
                                    <input datepicker type="date" placeholder="Select date">
                                </div>

                                </div>
                              </div>

                              <div class="input-group input-group-end input-group-mobile-full">
                                <div>
                                  <label>CITIZENSHIP *</label>
                                  <div class="custom-select">
                                  <select name="cars" id="cars">
                                    <option placeholder="volvo">Select Citizenship</option>
                                    <option placeholder="saab">USA</option>
                                    <option placeholder="mercedes">Lithuanian</option>
                                    <option placeholder="audi">Chinese</option>
                                  </select>
                                  </div>
                                </div>
                                <div>
                            
                                </div>
                              </div>

                            </div>
                          </div>


                          <div id="tabs2" class="js_tab_view hidden">

                            <div class="table-spacing-desktop">
                                <h2>Personal information</h2>

                                <div class="input-group input-group-end input-group-mobile-full input-group-mobile-nospacing">
                                  <div>
                                    <label>ID DOCUMENT TYPE *</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select ID Document Type</option>
                                      <option placeholder="saab">Card</option>
                                      <option placeholder="mercedes">Passport</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div>
                                    <label>ID DOCUMENT NUMBER *</label>
                                    <input placeholder="Select Enter ID Document Number" required>
                                  </div>
                                </div>

                                <div class="input-group input-group-end items-end input-group-mobile-full">
                                  <div>
                                    <label>ID DOCUMENT ISSUING COUNTRY *</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select ID Document Issuiring Country</option>
                                      <option placeholder="saab">Lithuania</option>
                                      <option placeholder="mercedes">Germany</option>
                                      <option placeholder="audi">Norway</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div>
                                    <label>DATE OF BIRTH *</label>

                                    <div class="date-input">
                                      <div>
                                          <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1.58333 21C1.16111 21 0.791667 20.8425 0.475 20.5275C0.158333 20.2125 0 19.845 0 19.425V3.15C0 2.73 0.158333 2.3625 0.475 2.0475C0.791667 1.7325 1.16111 1.575 1.58333 1.575H3.29861V0H5.01389V1.575H13.9861V0H15.7014V1.575H17.4167C17.8389 1.575 18.2083 1.7325 18.525 2.0475C18.8417 2.3625 19 2.73 19 3.15V19.425C19 19.845 18.8417 20.2125 18.525 20.5275C18.2083 20.8425 17.8389 21 17.4167 21H1.58333ZM1.58333 19.425H17.4167V8.1375H1.58333V19.425ZM1.58333 6.5625H17.4167V3.15H1.58333V6.5625ZM9.5 12.6C9.20093 12.6 8.95023 12.4994 8.74792 12.2981C8.5456 12.0969 8.44444 11.8475 8.44444 11.55C8.44444 11.2525 8.5456 11.0031 8.74792 10.8019C8.95023 10.6006 9.20093 10.5 9.5 10.5C9.79907 10.5 10.0498 10.6006 10.2521 10.8019C10.4544 11.0031 10.5556 11.2525 10.5556 11.55C10.5556 11.8475 10.4544 12.0969 10.2521 12.2981C10.0498 12.4994 9.79907 12.6 9.5 12.6ZM5.27778 12.6C4.9787 12.6 4.72801 12.4994 4.52569 12.2981C4.32338 12.0969 4.22222 11.8475 4.22222 11.55C4.22222 11.2525 4.32338 11.0031 4.52569 10.8019C4.72801 10.6006 4.9787 10.5 5.27778 10.5C5.57685 10.5 5.82755 10.6006 6.02986 10.8019C6.23218 11.0031 6.33333 11.2525 6.33333 11.55C6.33333 11.8475 6.23218 12.0969 6.02986 12.2981C5.82755 12.4994 5.57685 12.6 5.27778 12.6ZM13.7222 12.6C13.4231 12.6 13.1725 12.4994 12.9701 12.2981C12.7678 12.0969 12.6667 11.8475 12.6667 11.55C12.6667 11.2525 12.7678 11.0031 12.9701 10.8019C13.1725 10.6006 13.4231 10.5 13.7222 10.5C14.0213 10.5 14.272 10.6006 14.4743 10.8019C14.6766 11.0031 14.7778 11.2525 14.7778 11.55C14.7778 11.8475 14.6766 12.0969 14.4743 12.2981C14.272 12.4994 14.0213 12.6 13.7222 12.6ZM9.5 16.8C9.20093 16.8 8.95023 16.6994 8.74792 16.4981C8.5456 16.2969 8.44444 16.0475 8.44444 15.75C8.44444 15.4525 8.5456 15.2031 8.74792 15.0019C8.95023 14.8006 9.20093 14.7 9.5 14.7C9.79907 14.7 10.0498 14.8006 10.2521 15.0019C10.4544 15.2031 10.5556 15.4525 10.5556 15.75C10.5556 16.0475 10.4544 16.2969 10.2521 16.4981C10.0498 16.6994 9.79907 16.8 9.5 16.8ZM5.27778 16.8C4.9787 16.8 4.72801 16.6994 4.52569 16.4981C4.32338 16.2969 4.22222 16.0475 4.22222 15.75C4.22222 15.4525 4.32338 15.2031 4.52569 15.0019C4.72801 14.8006 4.9787 14.7 5.27778 14.7C5.57685 14.7 5.82755 14.8006 6.02986 15.0019C6.23218 15.2031 6.33333 15.4525 6.33333 15.75C6.33333 16.0475 6.23218 16.2969 6.02986 16.4981C5.82755 16.6994 5.57685 16.8 5.27778 16.8ZM13.7222 16.8C13.4231 16.8 13.1725 16.6994 12.9701 16.4981C12.7678 16.2969 12.6667 16.0475 12.6667 15.75C12.6667 15.4525 12.7678 15.2031 12.9701 15.0019C13.1725 14.8006 13.4231 14.7 13.7222 14.7C14.0213 14.7 14.272 14.8006 14.4743 15.0019C14.6766 15.2031 14.7778 15.4525 14.7778 15.75C14.7778 16.0475 14.6766 16.2969 14.4743 16.4981C14.272 16.6994 14.0213 16.8 13.7222 16.8Z" fill="#8000E5"/>
                                          </svg>
                                      </div>
                                        <input datepicker type="date" placeholder="Select date">
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div id="tabs3" class="js_tab_view hidden">
    
                            <div class="table-spacing-desktop">
                                <h2>Tax information</h2>

                                <div class="input-group input-group-end input-group-mobile-full">
                                  <div>
                                    <label>Tax residence country*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Tax Residence Country</option>
                                      <option placeholder="saab">Lithuania</option>
                                      <option placeholder="mercedes">Germany</option>
                                      <option placeholder="audi">Norway</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div>
                                    <label>Tax identification number (TIN)</label>
                                    <input placeholder="Enter Tax Identivication Number" required>
                                  </div>
                                </div>

                                <div class="input-group input-group-end input-group-mobile-full">
                                  <div>
                                    <label>Are you U.S. person?*</label>
                                  
                                    <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio5" type="radio" name="radio" class="hidden"  />
                                    <label for="radio5">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio6" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio6">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                                  </div>
                                  <div>
                                    <label>USA TIN NUMBER</label>
                                    <input placeholder="Enter USA TIN Number">
                                  </div>
                                </div>
                            </div>

                          </div>
                          <div id="tabs4" class="js_tab_view hidden">

                            <div class="table-spacing-desktop">
                                <h2>Permanent adress</h2>

                                  <div class="input-group-full">
                                    <div>
                                    <label>Street, building, apartment number*</label>
                                    <input placeholder="Enter Street, Building, Apartment Number" required>
                                    </div>
                                  </div>


                                <div class="input-group input-group-end input-group-mobile-full">
                                  <div>
                                    <label>City*</label>
                                    <input placeholder="Enter City" required>
                                  </div>
                                  <div>
                                    <label>County</label>
                                    <input placeholder="Enter County/State/Region">
                                  </div>
                                </div>

                                <div class="input-group input-group-end">
                                  <div>
                                    <label>Country* <p class="inline"><span class="hidden">asdasdasd sad sad</span><img class="mr-2 inline" src="./img/icon-questionmark.svg"/></p></label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Country</option>
                                      <option placeholder="saab">Lithuania</option>
                                      <option placeholder="mercedes">Germany</option>
                                      <option placeholder="audi">Norway</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div>
                                    <label>Postal code*</label>
                                    <input placeholder="Enter Postal Code" required>
                                  </div>
                                </div>

                            </div>

                          </div>

                          <div id="tabs5" class="js_tab_view hidden">

                            <div class="table-spacing-desktop">
                                <h2>Account information</h2>

                                  <div class="input-radio-group-full">
                                    <label>Do you have any connection to Lithuania*</label>
                                    
                                    <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio7" type="radio" name="radio" class="hidden"  />
                                    <label for="radio7">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio7" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio7">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                                  </div>

                                  <div class="input-group-full">
                                    <label>What is your connection to Lithuania?</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">I AM EMPLOYED BY A LITHUANIAN COMPANY</option>
                                      <option placeholder="saab">Yes</option>
                                      <option placeholder="mercedes">No</option>
                                    </select>
                                    </div>
                                  </div>

                                <div class="input-group input-group-end input-group-mobile-full">
                                  <div>
                                    <label>COMPANY NAME *</label>
                                    <input placeholder="Enter Company Name" required>
                                  </div>
                                  <div>
                                    <label>ROLE *</label>
                                    <input placeholder="Enter Your in this Role Company">
                                  </div>
                                </div>

                                <div class="input-group input-group-end items-end input-group-mobile-full">
                                  <div>
                                    <label>CAPITAL SHARES *</label>
                                    <input placeholder="Enter Your Capital Shares">
                                  </div>
                                  <div>
                                    <label>NAME OF EDUCATIONAL ESTABLISHMENT *</label>
                                    <input placeholder="Enter a Name Of Educational Establishment" required>
                                  </div>
                                </div>

                                <div class="input-group input-group-end">
                                  <div class="col-span-2 md:col-span-1">
                                    <label>PLEASE SPECIFY *</label>
                                    <input placeholder="Please specify your Connection to Lithuania">
                                  </div>
                                  <div>
                                  
                                  </div>
                                </div>

                            </div>

                          </div>

                          <div id="tabs6" class="js_tab_view hidden">

                            <div class="table-spacing-desktop">
                                <h2>Purpose of opening account</h2>

                                <div class="input-group input-group-end items-end input-group-mobile-full">
                                  <div>
                                    <label>What is purpose to opening account with us*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Account Opening Purpose</option>
                                      <option placeholder="saab">For work</option>
                                      <option placeholder="mercedes">Personal</option>
                                      <option placeholder="audi">Investment</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div>
                                    <label>Please specify*</label>
                                    <input placeholder="Please specify the other reasons">
                                  </div>
                                </div>

                                <div class="input-group input-group-end items-end input-group-mobile-full">
                                  <div>
                                    <label>How are you planining to fund your account and what is the source of your income*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Spurse of Income</option>
                                      <option placeholder="saab">Work</option>
                                      <option placeholder="mercedes">Investment</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div>
                                    <label>Please specify*</label>
                                    <input placeholder="Enter a Name Of Educational Establishment" required>
                                  </div>
                                </div>

                            </div>

                          </div>

                          <div id="tabs7" class="js_tab_view hidden">

                            <div class="table-spacing-desktop">
                                <h2>Field of activity</h2>

                                <div class="input-group input-group-end">
                                  <div class="col-span-2 md:col-span-1">
                                    <label>I AM *</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Activity Type</option>
                                      <option placeholder="saab">Active</option>
                                      <option placeholder="mercedes">Passive</option>
                                      <option placeholder="audi">Different</option>
                                    </select>
                                    </div>
                                  </div>
                                </div>

                                <h3 class="font-semibold text-base text-[#333333] mb-8">Please indicate all banks or financial institutions that you have accounts with*</h3>

                                <div class="input-group input-group-end">
                                  <div>
                                    <label>Name*</label>
                                    <input placeholder="Enter Name" required>

                                  </div>
                                  <div>
                                    <label>County</label>
                                    <input placeholder="Select Country">
                                  </div>
                                </div>

                            </div>

                          </div>

                          <div id="tabs8" class="js_tab_view hidden">

                            <div class="table-spacing-desktop">
                                <h2>Expected incoming activity</h2>

                                <div class="input-group">
                                  <div class="col-span-2 md:col-span-1">
                                    <label>Estimated incoming transaction per month*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Estimated Incoming Transactions Per Month</option>
                                      <option placeholder="saab">1-10</option>
                                      <option placeholder="mercedes">10-50</option>
                                      <option placeholder="audi">50-200</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div class="col-span-2 md:col-span-1">
                                    <label>Estimated incoming monthly turnover*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Estimated Incoming Monthly Turnover</option>
                                      <option placeholder="saab">100</option>
                                      <option placeholder="mercedes">500</option>
                                      <option placeholder="audi">1000</option>
                                    </select>
                                    </div>
                                    <p class="input-bot-text">Note: Please provide equivalent placeholder in EUR</p>
                                  </div>
                                </div>

                                <div class="grid grid-cols-2 mb-8 gap-8 md:mt-4 items-end">
                                  <div class="col-span-2 md:col-span-1">
                                    <label>Which countries will you be receiving transfers from*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Country</option>
                                      <option placeholder="saab">Lithuania</option>
                                      <option placeholder="mercedes">Germany</option>
                                      <option placeholder="audi">Norway</option>
                                    </select>
                                    </div>
                                  </div>
                                <div>
                                    
                                  </div>
                                </div>

                            </div>

                          </div>

                          <div id="tabs9" class="js_tab_view hidden">

                            <div class="table-spacing-desktop">
                                <h2>Expected outgoing activity</h2>

                                <div class="input-group">
                                  <div class="col-span-2 md:col-span-1">
                                    <label>Estimated outgoing transaction per month*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Estimated Outgoing Transactions Per Month</option>
                                      <option placeholder="saab">10</option>
                                      <option placeholder="mercedes">50</option>
                                      <option placeholder="audi">200</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div class="col-span-2 md:col-span-1">
                                    <label>Estimated outgoing monthly turnover*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Estimated Outgoing Monthly Turnover</option>
                                      <option placeholder="saab">100</option>
                                      <option placeholder="mercedes">500</option>
                                      <option placeholder="audi">2000</option>
                                    </select>
                                    </div>
                                    <p class="input-bot-text">Note: Please provide equivalent placeholder in EUR</p>
                                  </div>
                                </div>

                                <div class="grid grid-cols-2 mb-8 gap-8 md:mt-4 items-end">
                                  <div class="col-span-2 md:col-span-1">
                                    <label>Wich countries will you be receiving transfers to*</label>
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option placeholder="volvo">Select Country</option>
                                      <option placeholder="saab">Lithuania</option>
                                      <option placeholder="mercedes">Germany</option>
                                      <option placeholder="audi">Norway</option>
                                    </select>
                                    </div>
                                  </div>
                                <div>
                                    
                                  </div>
                                </div>

                            </div>

                          </div>

                          <div id="tabs10" class="js_tab_view hidden">
                            <div class="table-spacing-desktop">

                            <div class="radio-btn-wrapper radio-btn-wrapper-full">
                              <input type="checkbox" id="A3-yes" name="A3-confirmation" value="yes" />
                              <div class="border rounded-md border-[#C4C4C4] w-8 h-8 flex flex-shrink-0 justify-center items-center mr-2">
                                <svg version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                                  <g fill="none" fill-rule="evenodd">
                                    <g transform="translate(-9 -11)" fill="#8000E5" fill-rule="nonzero">
                                      <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                                    </g>
                                  </g>
                                </svg>
                              </div>
                              <label for="A3-yes">I DO CONFIRM THAT THE INFORMATION PROVIDED IN THE PRESENT FORM IS TRUE AND CORRECT AND I DO UNDERTAKE TO FORTHWITH NOTIFY IN WRITING OF ANY CHANGES IN THE INFORMATION PROVIDED. I DO CONFIRM I AM THE BENEFICIAL OWNER OF THE ACCOUNT AND THE FUNDS CONTAINED THEREIN AND I AM ACTING ON MY BEHALF *</label>
                            </div>

                            </div>
                          </div>

                        </div>

                    <div class="tab-btn-container">
                      <div>
                        <div class="back-btn hidden">
                          <button><img src="./img/icon-back-purple.svg">Previous Step</button>
                        </div>
                      </div>
                      <div>
                        <button type="submit" class="btn-success next-btn-tabs">NEXT STEP</button>
                        <button type="submit" class="btn-success finish-tabs-btn hidden">FINISH</button>
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