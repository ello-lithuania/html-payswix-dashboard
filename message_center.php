<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Message center</h1>
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

            <div class="content-wrapper-full inbox-page">
                <div class="content-wrapper-full-inner">
                    <h2>INBOX</h2>

                    <div class="inbox-filters-box">
                      <div class="left-side">
                        <button><img src="./img/icon-refresh.svg"/></button>
                        <button>
                          <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.57664 15.6122V13.2636H13.928V15.6122H8.57664ZM3.81989 9.19063V6.81225H18.6848V9.19063H3.81989ZM0.252319 2.73927V0.390625H22.2523V2.73927H0.252319Z" fill="#898989"/>
                          </svg>
                        </button>
                        <p>Subject</p>
                      </div>
                      <div class="right-side">
 
                        <div class="search-input">
                          <form>
                            <button type="submit">
                              <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20.5253 22L12.5499 14.0547C11.9681 14.5563 11.2759 14.9476 10.4733 15.2285C9.67077 15.5093 8.81806 15.6498 7.91519 15.6498C5.70816 15.6498 3.83721 14.8874 2.30233 13.3625C0.767442 11.8377 0 9.99179 0 7.8249C0 5.658 0.767442 3.81213 2.30233 2.28728C3.83721 0.762426 5.6881 0 7.85499 0C10.0219 0 11.8678 0.762426 13.3926 2.28728C14.9175 3.81213 15.6799 5.658 15.6799 7.8249C15.6799 8.68764 15.5394 9.52029 15.2586 10.3228C14.9777 11.1254 14.5663 11.8778 14.0246 12.58L22.0301 20.4952L20.5253 22ZM7.88509 13.6033C9.47013 13.6033 10.8194 13.0365 11.933 11.9029C13.0465 10.7693 13.6033 9.40994 13.6033 7.8249C13.6033 6.23985 13.0465 4.88053 11.933 3.74692C10.8194 2.61332 9.47013 2.04651 7.88509 2.04651C6.25992 2.04651 4.88555 2.61332 3.76197 3.74692C2.6384 4.88053 2.07661 6.23985 2.07661 7.8249C2.07661 9.40994 2.6384 10.7693 3.76197 11.9029C4.88555 13.0365 6.25992 13.6033 7.88509 13.6033Z" fill="#898989"/>
                              </svg>
                            </button>
                            <input placeholder="Search..."/>
                          </form>
                        </div>

                      </div>
                      <div class="col-span-4">

                      </div>
                    </div>


                    <div class="message-inbox-table message-inbox-heading">
                      <div>
                        
                      <div class="radio-btn-wrapper radio-btn-check-all">
                        <input type="checkbox" id="A3-yes" name="A3-confirmation" value="yes" />
                        <div>
                          <svg version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                              <g transform="translate(-9 -11)" fill="#8000E5" fill-rule="nonzero">
                                <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>

                      </div>
                      <div><p>From</p></div>
                      <div><p>Subject</p></div>
                      <div><p>date</p></div>
                    </div>

                    <div class="message-inbox-table">
                      <div>
                        
                      <div class="radio-btn-wrapper">
                        <input type="checkbox" id="A3-yes" name="A3-confirmation" value="yes" />
                        <div>
                          <svg version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                              <g transform="translate(-9 -11)" fill="#8000E5" fill-rule="nonzero">
                                <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>

                      </div>
                      <div><p>Marketing</p></div>
                      <div><p>Yearly Payswix Survey</p></div>
                      <div><p>03/11/2022</p></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="message-inbox-table">
                      <div>

                      <div class="radio-btn-wrapper">
                        <input type="checkbox" id="A3-yes" name="A3-confirmation" value="yes" />
                        <div>
                          <svg version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                              <g transform="translate(-9 -11)" fill="#8000E5" fill-rule="nonzero">
                                <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                        
                      </div>
                      <div><p>Marketing</p></div>
                      <div><p>Yearly Payswix Survey</p></div>
                      <div><p>03/11/2022</p></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="message-inbox-table">
                      <div>

                      <div class="radio-btn-wrapper">
                        <input type="checkbox" id="A3-yes" name="A3-confirmation" value="yes" />
                        <div>
                          <svg version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                              <g transform="translate(-9 -11)" fill="#8000E5" fill-rule="nonzero">
                                <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                        
                      </div>
                      <div><p>Marketing</p></div>
                      <div><p>Yearly Payswix Survey</p></div>
                      <div><p>03/11/2022</p></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="message-inbox-table">
                      <div>

                      <div class="radio-btn-wrapper">
                        <input type="checkbox" id="A3-yes" name="A3-confirmation" value="yes" />
                        <div>
                          <svg version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                              <g transform="translate(-9 -11)" fill="#8000E5" fill-rule="nonzero">
                                <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                        
                      </div>
                      <div><p>Marketing</p></div>
                      <div><p>Yearly Payswix Survey</p></div>
                      <div><p>03/11/2022</p></div>
                    </div>

                    <hr class="table-divider"/>

                <div class="table-pagination">
                  <div class="left-side">
                    <p>Showing 05 of 05</p>
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