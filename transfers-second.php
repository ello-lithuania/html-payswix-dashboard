<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Transfers</h1>
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

            <div class="content-wrapper new-payment">
                <div class="content-wrapper-main">
                    <h2>New payment</h2>

                    <label>IBAN</label>
                    <button class="button-select-with-image">
                      <img src="./img/icon-down.svg"/>
                      <img src="./img/icon-card-image.svg"/>
                      LT**************************
                    </button>

                      <div class="input-group mt-8">
                        <div>
                          <label>Beneficiary</label>
                          <input value="Beneficiary"/>
                        </div>
                        <div>
                          <label>Account number</label>
                          <input value="Account number"/>
                        </div>
                      </div>

                        <div class="input-group-full-amount-half">
                          <div class="left-side">
                            <label>Amount</label>
                            <input value="1,000"/>
                          </div>
                          <div class="right-side">
                          <div class="custom-select">
                            <select name="cars" id="cars">
                              <option value="volvo">NOK</option>
                              <option value="saab">Saab</option>
                              <option value="mercedes">Mercedes</option>
                              <option value="audi">Audi</option>
                            </select>
                          </div>
                          </div>
                        </div>

                        <div class="input-group-full">
                          <label>Recipient’s bank</label>
                          <input value="Enter Recipient’s bank"/>
                        </div>

                      <div class="input-group mt-8">
                        <div>
                          <label>Bank address</label>
                          <input value="Enter Bank address"/>
                        </div>
                        <div>
                          <label>Swift code</label>
                          <input value="Enter Swift code"/>
                        </div>
                      </div>

                      <div class="input-group mt-8">
                        <div>
                          <label>Bank address</label>
                          <div>
                            <div class="radio-btn-wrapper">
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
                              <label for="A3-yes">express</label>
                            </div>
                          </div>
                        </div>
                        <div>
                          <label>Reference number</label>
                          <input value="Enter Reference number"/>
                        </div>
                      </div>       

                        <div class="input-group-full">
                          <label>Details</label>
                          <input value="Enter Details"/>
                        </div>

                      <div class="input-group mt-8">
                        <div>
                          <label>Reference number</label>
                          <input value="Enter Bank address"/>
                        </div>
                        <div>
                          <label>Date</label>
                          <input type="date"/>
                        </div>
                      </div>

                    <div class="show-more-btn">
                      <button><img src="./img/icon-showless.svg"/>Show less</button>
                    </div>

                      <button type="submit" class="btn-success">TRANSFER</button>
                </div>
                <div class="content-wrapper-sidebar">

                  <div class="heading-wrapper-center">
                    <div>
                      <h2 class="dashboard-wrapper-heading">Contacts</h2>
                    </div>
                    <div>
                      <a href="./recipient_list.php" class="link-violet">See all</a>
                    </div>
                  </div>

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
                  
                  <a href="./recipient_add.php" class="add-icon-btn">
                    <img src="./img/icon-add-btn.svg"/>
                    New contact
                  </a>

                  <a href="" class="btn-thumbnail-icon">
                    <div class="left-side">
                      <div class="img-box">
                          <img src="./img/thumbnail-profile.png">
                          <p>Samantha Williams</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <img src="./img/icon-switch.svg">
                    </div>
                  </a>
                  <a href="" class="btn-thumbnail-icon">
                    <div class="left-side">
                      <div class="img-box">
                          <img src="./img/thumbnail-profile.png">
                          <p>Samantha Williams</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <img src="./img/icon-switch.svg">
                    </div>
                  </a>
                  <a href="" class="btn-thumbnail-icon">
                    <div class="left-side">
                      <div class="img-box">
                          <img src="./img/thumbnail-profile.png">
                          <p>Samantha Williams</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <img src="./img/icon-switch.svg">
                    </div>
                  </a>
                  <a href="" class="btn-thumbnail-icon">
                    <div class="left-side">
                      <div class="img-box">
                          <img src="./img/thumbnail-profile.png">
                          <p>Samantha Williams</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <img src="./img/icon-switch.svg">
                    </div>
                  </a>
                  <a href="" class="btn-thumbnail-icon">
                    <div class="left-side">
                      <div class="img-box">
                          <img src="./img/thumbnail-profile.png">
                          <p>Samantha Williams</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <img src="./img/icon-switch.svg">
                    </div>
                  </a>
                  <a href="" class="btn-thumbnail-icon">
                    <div class="left-side">
                      <div class="img-box">
                          <img src="./img/thumbnail-profile.png">
                          <p>Samantha Williams</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <img src="./img/icon-switch.svg">
                    </div>
                  </a>

              

                </div>

            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- footer --> 
    <?php include('./footer.php');?>

    <?php include('./footer-bot.php');?>