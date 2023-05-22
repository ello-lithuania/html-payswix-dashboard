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
                              Company representative
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
                              Company general representative
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
                              COMPANY REGISTERED ADDRESS
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
                              COMPANY TRADING ADDRESS
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
                              Tax information
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
                              Company roles and structure
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
                              Expected account activity
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
                              INCOMING ACTIVITY
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
                              Outgoing ACTIVITY
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
                              Business partners
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
                          <h2>Company representative</h2>

                          <div class="input-group input-group-end input-group-mobile-full">
                            <div>
                              <label>REPRESENTATIVE ROLE*</label>
                              <div class="custom-select">
                              <select name="cars" id="cars">
                                <option placeholder="volvo">Select one answer</option>
                                <option placeholder="saab">Yes</option>
                                <option placeholder="mercedes">No</option>
                                <option placeholder="audi">Maybe</option>
                              </select>
                              </div>
                            </div>
                            <div>
                              <label>ARE YOU AUTHORISED UNDER POWER OF ATTORNEY? *</label>
                              
                              <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio1" type="radio" name="radio" class="hidden"  />
                                    <label for="radio1">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio2" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio2">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                            </div>
                          </div>

                          <div class="input-group input-group-end input-group-mobile-full">
                            <div>
                              <label>POA VALID UNTIL?</label>
                              <div class="date-input">
                                  <div>
                                      <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1.58333 21C1.16111 21 0.791667 20.8425 0.475 20.5275C0.158333 20.2125 0 19.845 0 19.425V3.15C0 2.73 0.158333 2.3625 0.475 2.0475C0.791667 1.7325 1.16111 1.575 1.58333 1.575H3.29861V0H5.01389V1.575H13.9861V0H15.7014V1.575H17.4167C17.8389 1.575 18.2083 1.7325 18.525 2.0475C18.8417 2.3625 19 2.73 19 3.15V19.425C19 19.845 18.8417 20.2125 18.525 20.5275C18.2083 20.8425 17.8389 21 17.4167 21H1.58333ZM1.58333 19.425H17.4167V8.1375H1.58333V19.425ZM1.58333 6.5625H17.4167V3.15H1.58333V6.5625ZM9.5 12.6C9.20093 12.6 8.95023 12.4994 8.74792 12.2981C8.5456 12.0969 8.44444 11.8475 8.44444 11.55C8.44444 11.2525 8.5456 11.0031 8.74792 10.8019C8.95023 10.6006 9.20093 10.5 9.5 10.5C9.79907 10.5 10.0498 10.6006 10.2521 10.8019C10.4544 11.0031 10.5556 11.2525 10.5556 11.55C10.5556 11.8475 10.4544 12.0969 10.2521 12.2981C10.0498 12.4994 9.79907 12.6 9.5 12.6ZM5.27778 12.6C4.9787 12.6 4.72801 12.4994 4.52569 12.2981C4.32338 12.0969 4.22222 11.8475 4.22222 11.55C4.22222 11.2525 4.32338 11.0031 4.52569 10.8019C4.72801 10.6006 4.9787 10.5 5.27778 10.5C5.57685 10.5 5.82755 10.6006 6.02986 10.8019C6.23218 11.0031 6.33333 11.2525 6.33333 11.55C6.33333 11.8475 6.23218 12.0969 6.02986 12.2981C5.82755 12.4994 5.57685 12.6 5.27778 12.6ZM13.7222 12.6C13.4231 12.6 13.1725 12.4994 12.9701 12.2981C12.7678 12.0969 12.6667 11.8475 12.6667 11.55C12.6667 11.2525 12.7678 11.0031 12.9701 10.8019C13.1725 10.6006 13.4231 10.5 13.7222 10.5C14.0213 10.5 14.272 10.6006 14.4743 10.8019C14.6766 11.0031 14.7778 11.2525 14.7778 11.55C14.7778 11.8475 14.6766 12.0969 14.4743 12.2981C14.272 12.4994 14.0213 12.6 13.7222 12.6ZM9.5 16.8C9.20093 16.8 8.95023 16.6994 8.74792 16.4981C8.5456 16.2969 8.44444 16.0475 8.44444 15.75C8.44444 15.4525 8.5456 15.2031 8.74792 15.0019C8.95023 14.8006 9.20093 14.7 9.5 14.7C9.79907 14.7 10.0498 14.8006 10.2521 15.0019C10.4544 15.2031 10.5556 15.4525 10.5556 15.75C10.5556 16.0475 10.4544 16.2969 10.2521 16.4981C10.0498 16.6994 9.79907 16.8 9.5 16.8ZM5.27778 16.8C4.9787 16.8 4.72801 16.6994 4.52569 16.4981C4.32338 16.2969 4.22222 16.0475 4.22222 15.75C4.22222 15.4525 4.32338 15.2031 4.52569 15.0019C4.72801 14.8006 4.9787 14.7 5.27778 14.7C5.57685 14.7 5.82755 14.8006 6.02986 15.0019C6.23218 15.2031 6.33333 15.4525 6.33333 15.75C6.33333 16.0475 6.23218 16.2969 6.02986 16.4981C5.82755 16.6994 5.57685 16.8 5.27778 16.8ZM13.7222 16.8C13.4231 16.8 13.1725 16.6994 12.9701 16.4981C12.7678 16.2969 12.6667 16.0475 12.6667 15.75C12.6667 15.4525 12.7678 15.2031 12.9701 15.0019C13.1725 14.8006 13.4231 14.7 13.7222 14.7C14.0213 14.7 14.272 14.8006 14.4743 15.0019C14.6766 15.2031 14.7778 15.4525 14.7778 15.75C14.7778 16.0475 14.6766 16.2969 14.4743 16.4981C14.272 16.6994 14.0213 16.8 13.7222 16.8Z" fill="#8000E5"/>
                                      </svg>
                                  </div>
                                    <input datepicker type="date" placeholder="Select date">
                                </div>
                            </div>
                            
                            <div>
                              <label>IS THE PERSON, HIS/HERS IMMEDIATE FAMILY MEMBERS OR CLOSE ASSOCIATES* POLITICALLY EXPOSED PERSONS* (OR HAVE BEEN SO DURING THE PAST 12 MONTHS)? *</label>

                              <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio3" type="radio" name="radio" class="hidden"  />
                                    <label for="radio3">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio4" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio4">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                            </div>
                          </div>

                          <div class="input-group input-group-end input-group-mobile-full">
                            <div>
                              <label>POLITICALLY EXPOSED PERSONS *</label>
                              <input placeholder="Enter Politically Exposed Persons">
                            </div>
                            
                            <div>
                              <label>DOES THE REPRESENTATIVE ACT AS A NOMINEE?</label>

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
                          </div>

                          <div class="input-group input-group-end">
                              <div>
                                <label>DOES THE REPRESENTATIVE ACT AS A TRUSTEE?</label>
                              
                                <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio7" type="radio" name="radio" class="hidden"  />
                                    <label for="radio7">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio8" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio8">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                              </div>
                          
                            <div>
                              <label>IS THE REPRESENTATIVE A USA PERSON?</label>

                                <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio9" type="radio" name="radio" class="hidden"  />
                                    <label for="radio9">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio10" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio10">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                            </div>
                          </div>


                          <div class="input-group input-group-end">
                            <div class="col-span-2 md:col-span-1">
                              <label>USA TIN NUMBER</label>
                              <input placeholder="Enter USA TIN Number">
                            </div>
                            
                            <div>

                            </div>
                          </div>

                        </div>
                      </div>


                      <div id="tabs2" class="js_tab_view hidden">

                        <div class="table-spacing-desktop">
                            <h2>Company general representative</h2>

                            <div class="input-group input-group-mobile-full">
                              <div>
                                <label>COMPANY NAME *</label>
                                <input placeholder="Enter Company Name" required>
                              </div>
                              <div>
                                <label>COMPANY MAIN EMAIL *</label>
                                <input placeholder="Company" required>
                                <p class="input-bot-text">Note: Please provide equivalent placeholder in EUR</p>
                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>SELECT THE TYPE OF LEGAL ENTITY *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Legal Entity Type</option>
                                  <option placeholder="saab">Worker</option>
                                  <option placeholder="mercedes">Actress</option>
                                  <option placeholder="audi">Freelancer</option>
                                </select>
                                </div>
                              </div>
                              <div>
                                <label>DO YOU HAVE A TRADING NAME ? *</label>

                                <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio11" type="radio" name="radio" class="hidden"  />
                                    <label for="radio11">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio12" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio12">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>TRADING NAME *</label>
                                <input placeholder="Enter Trading Name" required>
                              </div>
                              <div>
                                <label>COUNTRY OF INCORPORATION *</label>
                                <input placeholder="Select Country Of Incorporation" required>
                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>DATE OF INCORPORATION *</label>
                                
                                <div class="date-input">
                                  <div>
                                      <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1.58333 21C1.16111 21 0.791667 20.8425 0.475 20.5275C0.158333 20.2125 0 19.845 0 19.425V3.15C0 2.73 0.158333 2.3625 0.475 2.0475C0.791667 1.7325 1.16111 1.575 1.58333 1.575H3.29861V0H5.01389V1.575H13.9861V0H15.7014V1.575H17.4167C17.8389 1.575 18.2083 1.7325 18.525 2.0475C18.8417 2.3625 19 2.73 19 3.15V19.425C19 19.845 18.8417 20.2125 18.525 20.5275C18.2083 20.8425 17.8389 21 17.4167 21H1.58333ZM1.58333 19.425H17.4167V8.1375H1.58333V19.425ZM1.58333 6.5625H17.4167V3.15H1.58333V6.5625ZM9.5 12.6C9.20093 12.6 8.95023 12.4994 8.74792 12.2981C8.5456 12.0969 8.44444 11.8475 8.44444 11.55C8.44444 11.2525 8.5456 11.0031 8.74792 10.8019C8.95023 10.6006 9.20093 10.5 9.5 10.5C9.79907 10.5 10.0498 10.6006 10.2521 10.8019C10.4544 11.0031 10.5556 11.2525 10.5556 11.55C10.5556 11.8475 10.4544 12.0969 10.2521 12.2981C10.0498 12.4994 9.79907 12.6 9.5 12.6ZM5.27778 12.6C4.9787 12.6 4.72801 12.4994 4.52569 12.2981C4.32338 12.0969 4.22222 11.8475 4.22222 11.55C4.22222 11.2525 4.32338 11.0031 4.52569 10.8019C4.72801 10.6006 4.9787 10.5 5.27778 10.5C5.57685 10.5 5.82755 10.6006 6.02986 10.8019C6.23218 11.0031 6.33333 11.2525 6.33333 11.55C6.33333 11.8475 6.23218 12.0969 6.02986 12.2981C5.82755 12.4994 5.57685 12.6 5.27778 12.6ZM13.7222 12.6C13.4231 12.6 13.1725 12.4994 12.9701 12.2981C12.7678 12.0969 12.6667 11.8475 12.6667 11.55C12.6667 11.2525 12.7678 11.0031 12.9701 10.8019C13.1725 10.6006 13.4231 10.5 13.7222 10.5C14.0213 10.5 14.272 10.6006 14.4743 10.8019C14.6766 11.0031 14.7778 11.2525 14.7778 11.55C14.7778 11.8475 14.6766 12.0969 14.4743 12.2981C14.272 12.4994 14.0213 12.6 13.7222 12.6ZM9.5 16.8C9.20093 16.8 8.95023 16.6994 8.74792 16.4981C8.5456 16.2969 8.44444 16.0475 8.44444 15.75C8.44444 15.4525 8.5456 15.2031 8.74792 15.0019C8.95023 14.8006 9.20093 14.7 9.5 14.7C9.79907 14.7 10.0498 14.8006 10.2521 15.0019C10.4544 15.2031 10.5556 15.4525 10.5556 15.75C10.5556 16.0475 10.4544 16.2969 10.2521 16.4981C10.0498 16.6994 9.79907 16.8 9.5 16.8ZM5.27778 16.8C4.9787 16.8 4.72801 16.6994 4.52569 16.4981C4.32338 16.2969 4.22222 16.0475 4.22222 15.75C4.22222 15.4525 4.32338 15.2031 4.52569 15.0019C4.72801 14.8006 4.9787 14.7 5.27778 14.7C5.57685 14.7 5.82755 14.8006 6.02986 15.0019C6.23218 15.2031 6.33333 15.4525 6.33333 15.75C6.33333 16.0475 6.23218 16.2969 6.02986 16.4981C5.82755 16.6994 5.57685 16.8 5.27778 16.8ZM13.7222 16.8C13.4231 16.8 13.1725 16.6994 12.9701 16.4981C12.7678 16.2969 12.6667 16.0475 12.6667 15.75C12.6667 15.4525 12.7678 15.2031 12.9701 15.0019C13.1725 14.8006 13.4231 14.7 13.7222 14.7C14.0213 14.7 14.272 14.8006 14.4743 15.0019C14.6766 15.2031 14.7778 15.4525 14.7778 15.75C14.7778 16.0475 14.6766 16.2969 14.4743 16.4981C14.272 16.6994 14.0213 16.8 13.7222 16.8Z" fill="#8000E5"/>
                                      </svg>
                                  </div>
                                    <input datepicker type="date" placeholder="Select date">
                                </div>

                              </div>
                              <div>
                                <label>Registration number *</label>
                                <input placeholder="Enter Registration Number" required>
                              </div>
                            </div>

                            <div class="input-group input-group-end">
                              <div class="col-span-2 md:col-span-1">
                                <label>Enter Legal Entity Identifier *</label>
                                <input placeholder="Enter Legal Entity Identifier" required>
                              </div>
                              <div>
                                
                              </div>
                            </div>

                        </div>
                      </div>
                      <div id="tabs3" class="js_tab_view hidden">
 
                        <div class="table-spacing-desktop">
                            <h2>COMPANY REGISTERED ADDRESS</h2>

                            <div class="input-group input-group-end">
                              <div>
                                <label>Country *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                      <option placeholder="saab">Lithuania</option>
                                      <option placeholder="mercedes">Germany</option>
                                      <option placeholder="audi">Norway</option>
                                </select>
                                </div>
                              </div>
                              <div>
                                <label>City *</label>
                                <input placeholder="Enter City" required>
                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>SELECT THE TYPE OF LEGAL ENTITY *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Legal Entity Type</option>
                                  <option placeholder="saab">Worker</option>
                                  <option placeholder="mercedes">Jobless</option>
                                  <option placeholder="audi">Freelancer</option>
                                </select>
                                </div>
                              </div>
                              <div>
                                <label>DO YOU HAVE A TRADING NAME ? *</label>
                               
                                <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio13" type="radio" name="radio" class="hidden"  />
                                    <label for="radio13">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio14" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio14">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                              </div>

                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>County</label>
                                <input placeholder="Enter County/State/Region" required>
                              </div>
                              <div>
                                <label>Street *</label>
                                <input placeholder="Enter Street" required>
                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>HOUSE, APT., OFFICE</label>
                                <input placeholder="Enter House, Apt., Office" required>
                              </div>
                              <div>
                                <label>POSTAL CODE *</label>
                                <input placeholder="Enter Postal Code" required>
                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>OFFICE LANDLINE NUMBER</label>
                                <div class="grid grid-cols-12">
                                  <div class="col-span-4 lg:col-span-2">
                                    <div class="custom-select">
                                    <select name="cars" id="cars">
                                      <option value="volvo">Eur</option>
                                      <option value="saab">Usd</option>
                                      <option value="mercedes">BL</option>
                                      <option value="audi">ZL</option>
                                    </select>
                                    </div>
                                  </div>
                                  <div class="!col-span-8 lg:col-span-10">
                                    <input placeholder="+370">
                                  </div>
                                </div>
                              </div>
                              <div>
                                <label>DO YOU HAVE A COMPANY WEBSITE? *</label>
                               
                                <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio15" type="radio" name="radio" class="hidden"  />
                                    <label for="radio15">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio16" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio16">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                              </div>

                            </div>

                            <div class="input-group input-group-end">
                              <div class="col-span-2 md:col-span-1">
                                <label>ALL COMPANY URLS *</label>
                                <input placeholder="Enter All Company URLs" required>
                              </div>
                              <div>
                                
                              </div>
                            </div>

                        </div>

                      </div>
                      <div id="tabs4" class="js_tab_view hidden">

                        <div class="table-spacing-desktop">
                            <h2>COMPANY TRADING ADDRESS</h2>

                              <div class="input-radio-group-full">
                                <label>SAME AS REGISTERED ADDRESS</label>

                                <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio17" type="radio" name="radio" class="hidden"  />
                                    <label for="radio17">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio18" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio18">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                              </div>


                            <div class="input-group input-group-mobile-full">
                              <div>
                                <label>Country *</label>
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
                                <label>City *</label>
                                <input placeholder="Enter County/State/Region">
                                <p class="input-bot-text">Please use only English characters or numbers.
City should be minimum 3 characters.</p>
                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>County</label>
                                <input placeholder="Enter County/State/Region" required>
                              </div>
                              <div>
                                <label>Street *</label>
                                <input placeholder="Enter Street" required>
                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>HOUSE, APT., OFFICE</label>
                                <input placeholder="Enter House, Apt., Office" required>
                              </div>
                              <div>
                                <label>POSTAL CODE *</label>
                                <input placeholder="Enter Postal Code" required>
                              </div>
                            </div>

                        </div>

                      </div>

                      <div id="tabs5" class="js_tab_view hidden">

                        <div class="table-spacing-desktop">
                            <h2>Tax information</h2>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>TAX RESIDENCE COUNTRY *</label>

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
                                <label>TAX IDENTIFICATION NUMBER (TIN)</label>
                                <input placeholder="Enter Tax Identivication Number">
                              </div>
                            </div>

                        </div>

                      </div>

                      <div id="tabs6" class="js_tab_view hidden">

                        <div class="table-spacing-desktop">
                            <h2>Company roles and structure</h2>

                            <div class="input-button-add">
                              <label>Director *</label>
                              <button>Add Signatory</button>
                            </div>

                            <div class="add-details-table">
                              <label>AUTHORISED SIGNATORY *</label>
                              <hr/>
                              <div class="add-details-table-inner">
                                <div>
                                  <p>Name Surename</p>
                                </div>
                                <div>
                                  <a href="">View statement</a>
                                  <img src="./img/icon-trash.svg"/>
                                </div>
                              </div>
                              
                              <hr/>
                            </div>
                            <div class="input-button-add">
                              <button>Add Director</button>
                            </div>

                            <div class="input-button-add">
                              <label>SHAREHOLDER *</label>
                              <button>Add Shareholder</button>
                            </div>

                            <div class="input-button-add">
                              <label>UBO *</label>
                              <button>Add UBO</button>
                            </div>
                            <p class="mt-4 input-bot-text">* If company has several people for each role please list them all.</p>

                        </div>

                      </div>

                      <div id="tabs7" class="js_tab_view hidden">

                        <div class="table-spacing-desktop">
                            <h2>Expected account activity</h2>


                              <div class="input-group-full">
                                <label>STATE YOUR MAIN BUSINESS ACTIVITY AND PROVIDE A DETAILED DESCRIPTION OF IT: *</label>
                                <input placeholder="Enter Main Business Activity and Provide a Detailed Description of It" required>
                              </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>HOW MANY EMPLOYEES WORK IN YOUR COMPANY? *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Number of Employees</option>
                                  <option placeholder="saab">10</option>
                                  <option placeholder="mercedes">50</option>
                                  <option placeholder="audi">100</option>
                                </select>
                                </div>
                              </div>
                              <div>
                                <label>NACE INDUSTRY CODE FOR MAIN BUSINESS ACTIVITY:</label>
                                <input placeholder="Select NACE Industry Code">
                              </div>
                            </div>

                            <div class="input-group input-group-end">
                              <div class="col-span-2 md:col-span-1">
                                <label>NACE CODE TYPE OF INDUSTRY:</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select NACE Code</option>
                                  <option placeholder="saab">46456456</option>
                                  <option placeholder="mercedes">56546456456</option>
                                  <option placeholder="audi">456546456</option>
                                </select>
                                </div>
                              </div>
                              <div>
                                
                              </div>
                            </div>

                              <div class="input-group-full">
                                <label>STATE YOUR ADDITIONAL BUSINESS ACTIVITY AND PROVIDE A DETAILED DESCRIPTION OF IT:</label>
                                <input placeholder="Enter Additional Business Activity and Provide a Detailed Description of It" required>
                              </div>

                              <div class="input-radio-group-full">
                                <label>DOES THE BUSINESS ACTIVITY REQUIRE A LICENSE, PERMISSION, OR SPECIAL REGISTRATION? *</label>
                               
                                <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio19" type="radio" name="radio" class="hidden"  />
                                    <label for="radio19">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio20" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio20">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                              </div>

                            <div class="input-group input-group-end">
                              <div>
                                <label>LICENCE ISSUING DATE *</label>
                                <input placeholder="LICENCE NUMBER" required>
                              </div>
                              <div>
                                <label>LICENCE ISSUING DATE *</label>

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

                            <div class="input-group input-group-end">
                              <div>
                                <label>LICENCE EXPIRATION DATE</label>
                                <div class="date-input">
                                  <div>
                                      <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M1.58333 21C1.16111 21 0.791667 20.8425 0.475 20.5275C0.158333 20.2125 0 19.845 0 19.425V3.15C0 2.73 0.158333 2.3625 0.475 2.0475C0.791667 1.7325 1.16111 1.575 1.58333 1.575H3.29861V0H5.01389V1.575H13.9861V0H15.7014V1.575H17.4167C17.8389 1.575 18.2083 1.7325 18.525 2.0475C18.8417 2.3625 19 2.73 19 3.15V19.425C19 19.845 18.8417 20.2125 18.525 20.5275C18.2083 20.8425 17.8389 21 17.4167 21H1.58333ZM1.58333 19.425H17.4167V8.1375H1.58333V19.425ZM1.58333 6.5625H17.4167V3.15H1.58333V6.5625ZM9.5 12.6C9.20093 12.6 8.95023 12.4994 8.74792 12.2981C8.5456 12.0969 8.44444 11.8475 8.44444 11.55C8.44444 11.2525 8.5456 11.0031 8.74792 10.8019C8.95023 10.6006 9.20093 10.5 9.5 10.5C9.79907 10.5 10.0498 10.6006 10.2521 10.8019C10.4544 11.0031 10.5556 11.2525 10.5556 11.55C10.5556 11.8475 10.4544 12.0969 10.2521 12.2981C10.0498 12.4994 9.79907 12.6 9.5 12.6ZM5.27778 12.6C4.9787 12.6 4.72801 12.4994 4.52569 12.2981C4.32338 12.0969 4.22222 11.8475 4.22222 11.55C4.22222 11.2525 4.32338 11.0031 4.52569 10.8019C4.72801 10.6006 4.9787 10.5 5.27778 10.5C5.57685 10.5 5.82755 10.6006 6.02986 10.8019C6.23218 11.0031 6.33333 11.2525 6.33333 11.55C6.33333 11.8475 6.23218 12.0969 6.02986 12.2981C5.82755 12.4994 5.57685 12.6 5.27778 12.6ZM13.7222 12.6C13.4231 12.6 13.1725 12.4994 12.9701 12.2981C12.7678 12.0969 12.6667 11.8475 12.6667 11.55C12.6667 11.2525 12.7678 11.0031 12.9701 10.8019C13.1725 10.6006 13.4231 10.5 13.7222 10.5C14.0213 10.5 14.272 10.6006 14.4743 10.8019C14.6766 11.0031 14.7778 11.2525 14.7778 11.55C14.7778 11.8475 14.6766 12.0969 14.4743 12.2981C14.272 12.4994 14.0213 12.6 13.7222 12.6ZM9.5 16.8C9.20093 16.8 8.95023 16.6994 8.74792 16.4981C8.5456 16.2969 8.44444 16.0475 8.44444 15.75C8.44444 15.4525 8.5456 15.2031 8.74792 15.0019C8.95023 14.8006 9.20093 14.7 9.5 14.7C9.79907 14.7 10.0498 14.8006 10.2521 15.0019C10.4544 15.2031 10.5556 15.4525 10.5556 15.75C10.5556 16.0475 10.4544 16.2969 10.2521 16.4981C10.0498 16.6994 9.79907 16.8 9.5 16.8ZM5.27778 16.8C4.9787 16.8 4.72801 16.6994 4.52569 16.4981C4.32338 16.2969 4.22222 16.0475 4.22222 15.75C4.22222 15.4525 4.32338 15.2031 4.52569 15.0019C4.72801 14.8006 4.9787 14.7 5.27778 14.7C5.57685 14.7 5.82755 14.8006 6.02986 15.0019C6.23218 15.2031 6.33333 15.4525 6.33333 15.75C6.33333 16.0475 6.23218 16.2969 6.02986 16.4981C5.82755 16.6994 5.57685 16.8 5.27778 16.8ZM13.7222 16.8C13.4231 16.8 13.1725 16.6994 12.9701 16.4981C12.7678 16.2969 12.6667 16.0475 12.6667 15.75C12.6667 15.4525 12.7678 15.2031 12.9701 15.0019C13.1725 14.8006 13.4231 14.7 13.7222 14.7C14.0213 14.7 14.272 14.8006 14.4743 15.0019C14.6766 15.2031 14.7778 15.4525 14.7778 15.75C14.7778 16.0475 14.6766 16.2969 14.4743 16.4981C14.272 16.6994 14.0213 16.8 13.7222 16.8Z" fill="#8000E5"/>
                                      </svg>
                                  </div>
                                    <input datepicker type="date" placeholder="Select date">
                                </div>
                              </div>
                              <div>
                                <label>REGULATOR *</label>
                                <input placeholder="LICENCE NUMBER" required>

                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>WEB LINK TO THE LICENSE *</label>
                                <input placeholder="Enter Web URL" required>

                              </div>
                              <div>
                                <label>PLEASE STATE THE COMPANY ANNUAL TURNOVER (IN PRECEDING FISCAL YEAR), IN EUR: *</label>
                                <input placeholder="Enter Company Annual Turnover" required>

                              </div>
                            </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>PLEASE INDICATE THE AMOUNT OF SHARE CAPITAL, IN EUR: *</label>
                                <input placeholder="Enter Share Capital Amount" required>

                              </div>
                              <div>
                                <label>PLEASE SPECIFY SOURCE OF SHARE CAPITAL: *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Account Currencies</option>
                                  <option placeholder="saab">Usd</option>
                                  <option placeholder="mercedes">Eur</option>
                                  <option placeholder="audi">BL</option>
                                </select>
                                </div>
                              </div>
                            </div>

                            <div class="input-group input-group-end">
                              <div class="col-span-2 md:col-span-1">
                                
                              </div>
                              <div class="col-span-2 md:col-span-1">
                                <label>PLEASE SPECIFY SOURCE OF SHARE CAPITAL: *</label>
                                <input placeholder="Enter Specification" required>

                              </div>
                            </div>

                              <div class="input-radio-group-full">
                                <label>PLEASE SPECIFY WHETHER PASSIVE INCOME (RENT, DIVIDENDS, ETC.) IS MORE THAN 50% OF THE COMPANY ANNUAL REVENUE? *</label>
                               
                                <div class="input-radio-group-full-inner">
                                  <div class="radio-input-inner">
                                    <input id="radio21" type="radio" name="radio" class="hidden"  />
                                    <label for="radio21">
                                    <span></span>
                                    Yes</label>
                                  </div>
                                  <div class="radio-input-inner">
                                    <input id="radio22" type="radio" name="radio" class="hidden" checked />
                                    <label for="radio22">
                                    <span></span>
                                    No</label>
                                  </div>
                                </div>

                              </div>

                            <div class="input-group input-group-end input-group-mobile-full">
                              <div>
                                <label>SELECT MAIN BUSINESS REGIONS *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">SELECT MAIN BUSINESS REGIONS</option>
                                      <option placeholder="saab">Lithuania</option>
                                      <option placeholder="mercedes">Germany</option>
                                      <option placeholder="audi">Norway</option>
                                </select>
                                </div>
                              </div>
                              <div>
                                <label>SPECIFY THE OTHER BUSINESS REGIONS: *</label>
                                <input placeholder="Enter The Other Business Regions" required>

                              </div>
                            </div>

                        </div>

                      </div>

                      <div id="tabs8" class="js_tab_view hidden">

                        <div class="table-spacing-desktop">
                            <h2>INCOMING ACTIVITY</h2>

                              <div class="md:mt-16 mt-8">
                                <label>ESTIMATED INCOMING MONTHLY TURNOVER *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Estimated Incoming Monthly Turnover</option>
                                  <option placeholder="saab">100</option>
                                  <option placeholder="mercedes">1000</option>
                                  <option placeholder="audi">5000</option>
                                </select>
                                </div>
                              </div>

                              <div class="md:mt-16 mt-8">
                                <label>ESTIMATED NUMBER OF INCOMING TRANSACTIONS PER MONTH *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Estimated Outgoing Transactions Per Month</option>
                                  <option placeholder="saab">1000</option>
                                  <option placeholder="mercedes">2000</option>
                                  <option placeholder="audi">3000</option>
                                </select>
                                </div>
                              </div>

                        </div>

                      </div>

                      <div id="tabs9" class="js_tab_view hidden">

                        <div class="table-spacing-desktop">
                            <h2>OUTGOING ACTIVITY</h2>

                              <div class="md:mt-16 mt-8">
                                <label>ESTIMATED OUTGOING MONTHLY TURNOVER *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Estimated Outgoing Monthly Turnover</option>
                                  <option placeholder="saab">1000</option>
                                  <option placeholder="mercedes">5000</option>
                                  <option placeholder="audi">10000</option>
                                </select>
                                </div>
                              </div>

                              <div class="md:mt-16 mt-8">
                                <label>ESTIMATED OUTGOING TRANSACTIONS PER MONTH *</label>
                                <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option placeholder="volvo">Select Estimated Outgoing Transactions Per Month</option>
                                  <option placeholder="saab">50</option>
                                  <option placeholder="mercedes">100</option>
                                  <option placeholder="audi">500</option>
                                </select>
                                </div>
                              </div>

                        </div>

                      </div>

                      <div id="tabs10" class="js_tab_view hidden">
                        <div class="table-spacing-desktop">

                        <h2>BUSINESS PARTNERS</h2>

                          <div class="add-details-table">
                                <label>Customer's main business partners to whom payments will be made through the company.</label>
                                <hr/>
                                <div class="add-details-table-inner">
                                  <div>
                                    <p>Test Company</p>
                                  </div>
                                  <div class="text-right">
                                    <a href="">View statement</a>
                                    <img src="./img/icon-trash.svg"/>
                                  </div>
                                </div>
                                
                                <hr/>
                              </div>
                              <div class="input-button-add">
                                <button>Add Business Partner</button>
                              </div>
                              <p class="mt-4 input-bot-text">NOTE: YOU CAN ADD MULTIPLE BUSINESS PARTNERS.</p>

                              <p class="questionmark-icon"><img title="asdasdasd sad sad" src="./img/icon-questionmark.svg"></p>

                              <div>
                                <div class="radio-btn-wrapper radio-btn-wrapper-full radio-btn-wrapper-full-center">
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
                                  <label for="A3-yes">I CERTIFY THAT ALL THE PROVIDED INFORMATION IS COMPLETE AND TRUE.</label>
                                </div>
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