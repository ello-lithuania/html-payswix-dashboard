<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Account</h1>
                <div class="select-icon relative">
                  <button class="btn-language"><img src="./img/icon-usa.svg"/><img src="./img/icon-down.svg"/></button>
                  <div class="language-select hidden">

                    <div class="flex">
                      <span class="active">
                        <img src="./img/flag-usa.svg"/>
                        EN
                      </span>

                      <span>
                        <img src="./img/flag-lt.svg"/>
                        LT
                      </span>
                    </div>

                    <div class="flex">
                      <span>
                        <img src="./img/flag-fr.svg"/>
                        FR
                      </span>

                      <span>
                        <img src="./img/flag-it.svg"/>
                        IT
                      </span>

                      <span>
                        <img src="./img/flag-sp.svg"/>
                        SP
                      </span>
                    </div>

                    <div class="flex">
                      <span>
                        <img src="./img/flag-ge.svg"/>
                        GE
                      </span>

                      <span>
                        <img src="./img/flag-se.svg"/>
                        SE
                      </span>

                      <span>
                        <img src="./img/flag-pl.svg"/>
                        PL
                      </span>
                    </div>

                  </div>
                </div>
              </div>
              <div class="right-side">
                <ul class="icon-list">
                  <li><button class="btn-disabled"><img src="./img/icon-disabled.svg"/></button></li>
                  <li><button><img src="./img/icon-mail.svg"/>
                
                  <div class="list-item-absolute">
                    <div class="list-item-absolute-heading">
                      <p>INBOX</p>
                      <span>2</span>
                    </div>

                    <div class="list-item-absolute-inner">
                      <p>Deposit Waste</p>
                      <div class="icon-platinum !mr-0"></div>
                    </div>
                    <div class="list-item-absolute-inner2">
                      <span>Deposit Waste</span>
                      <span>Sep 20, 2023</span>
                    </div>

                    <hr/>

                    <div class="list-item-absolute-inner">
                      <p>Deposit Waste</p>
                      <div class="icon-platinum !mr-0"></div>
                    </div>
                    <div class="list-item-absolute-inner2">
                      <span>Deposit Waste</span>
                      <span>Sep 20, 2023</span>
                    </div>

                  </div>

                
                  </button>


                  </li>
                  <li class="active"><button href=""><img src="./img/icon-bell.svg"/>
                
                  <div class="list-item-absolute">
                    <div class="list-item-absolute-heading">
                      <p>Notifications</p>
                      <span>2</span>
                    </div>

                    <div class="list-item-absolute-inner">
                      <p>Deposit Waste</p>
                      <div class="icon-danger !mr-0"></div>
                    </div>
                    <div class="list-item-absolute-inner2">
                      <span>Deposit Waste</span>
                      <span>Sep 20, 2023</span>
                    </div>

                    <hr/>

                    <div class="list-item-absolute-inner">
                      <p>Deposit Waste</p>
                      <div class="icon-danger !mr-0"></div>
                    </div>
                    <div class="list-item-absolute-inner2">
                      <span>Deposit Waste</span>
                      <span>Sep 20, 2023</span>
                    </div>

                  </div>
                
                  </button>
                  </li>
                </ul>
              </div>
            </div>

            <div class="welcome-message">
              <p>Hi John, welcome back!</p>
            </div>

            <!---->
            <div class="dashboard-wrapper">
              <div class="dashboard-wrapper-5">
                
                <div class="block-wrapper gradient-violet balance-block">

                  <button class="close"><img src="./img/icon-group-select.svg"/></button>

                  <h2 class="dashboard-wrapper-heading">Total balance</h2>

                  <div class="balance-block-tabs">
                    <div class="balance-carousel-heading active">Account 1</div>
                    <div class="balance-carousel-heading hidden">Account 2</div>
                    <div class="balance-carousel-heading hidden">Account 3</div>
                    <div class="balance-block-tabs-control">
                      <button class="balance-carousel-back"><img src="./img/icon-carousel-back.svg"/></button>
                      <button class="balance-carousel-next"><img src="./img/icon-carousel-next.svg"/></button>
                    </div>
                  </div>

                  <p class="balance-carousel-amount active"><span>€1,302.<span>00</span></span>EURO</p>
                  <p class="balance-carousel-amount hidden"><span>€1,303.<span>00</span></span>EURO</p>
                  <p class="balance-carousel-amount hidden"><span>€1,304.<span>00</span></span>EURO</p>

                  <button class="button-select-with-image">
                    <div class="balance-carousel-account active">
                    <img src="./img/icon-down-white.svg"/>
                    <img src="./img/icon-card-image.svg"/>
                    IBAN 5252525252525 7984
                    </div>
                    <div class="balance-carousel-account hidden">
                      <img src="./img/icon-down-white.svg"/>
                      <img src="./img/icon-card-image.svg"/>
                      IBAN 5252525252525 7985
                    </div>
                    <div class="balance-carousel-account hidden">
                      <img src="./img/icon-down-white.svg"/>
                      <img src="./img/icon-card-image.svg"/>
                      IBAN 5252525252525 7986
                    </div>
                  </button>
                  <p class="select-text">Visa or MasterCard</p>

                </div>

              </div>
              <div class="dashboard-wrapper-7">
                <div class="block-wrapper tabs-block">
                  <button class="close"><img src="./img/icon-group-select.svg"/></button>
                  <div class="tabs-block-controls">
                    <div>
                      <button data-id="tab1" class="active-tab-btn btn-tab-select btn-tabs-outline-violet">Quick transfer</button>
                    </div>
                    <div>
                      <button data-id="tab2" class="btn-tab-select btn-tabs-outline-violet">CONVERSION</button>
                    </div>
                  </div>
                  
                  <div id="tab1" class="btn-tab-container">
                    <form class="w-full">
                      
                      <div class="input-group">
                        <div>
                          <label>Beneficiary</label>
                          <input value="Company name"/>
                        </div>
                        <div>
                          <label>Acount number</label>
                          <input value="LT**************65656"/>
                        </div>
                      </div>

                      <div class="">
                        <label>Amount</label>
                        <div class="input-group-with-select">
                          <div class="left-side">
                            <input value="246"/>
                          </div>
                          <div class="right-side">
                            <div class="custom-select">
                            <select name="cars" id="cars">
                              <option value="volvo">Eur</option>
                              <option value="saab">USD</option>
                              <option value="mercedes">RB</option>
                              <option value="audi">ZL</option>
                            </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="btn-black">TRANSFER</button>
                    </form>
                  </div>

                  <div id="tab2" class="btn-tab-container hidden">

                    <form class="w-full">
                      <div class="input-group-with-transfer-select">
                        <div class="left-side">
                          <label>Amount</label>
                          <div class="wrapper">
                            <div class="wrapper-select">
                              <div class="custom-select">
                                <select name="cars" id="cars">
                                  <option value="volvo">Eur</option>
                                  <option value="saab">EUR</option>
                                  <option value="mercedes">RB</option>
                                  <option value="audi">ZL</option>
                                </select>
                              </div>
                            </div>
                            <div class="wrapper-input">
                              <input value="246"/>
                            </div>
                          </div>
                        </div>
                        <div class="middle">
                          <button><img src="./img/icon-exchange-btn.svg"/></button>
                        </div>
                        <div class="right-side">
                          <label>Amount</label>
                          <div class="wrapper">
                            <div class="wrapper-select">
                              <div class="custom-select">
                              <select name="cars" id="cars">
                                <option value="volvo">Eur</option>
                                <option value="saab">USD</option>
                                <option value="mercedes">RB</option>
                                <option value="audi">ZL</option>
                              </select>
                              </div>
                            </div>
                            <div class="wrapper-input">
                              <input value="246"/>
                            </div>
                          </div>
                        </div>
                      </div>

                      <label>From currency account*</label>
                        <div class="custom-select">
                          <select name="cars" id="cars">
                            <option value="volvo">Select currency account</option>
                            <option value="saab">LT4864845461545</option>
                            <option value="mercedes">LT4864845461545</option>
                            <option value="audi">LT4864845461545</option>
                          </select>
                        </div>
                      <button type="submit" class="btn-black">Get quote</button>

                    </form>

                  </div>

                </div>
              </div>
            </div>

            <!---->
            <div class="dashboard-wrapper">
              <div class="dashboard-wrapper-7">
                <div class="block-wrapper">
                  <button class="close"><img src="./img/icon-group-select.svg"/></button>
                  
                  <div class="heading-wrapper-center">
                    <div>
                      <h2 class="dashboard-wrapper-heading">Latest TRANSACTIONS</h2>
                    </div>
                    <div>
                      <a href="./statements.php" class="link-violet">View statement</a>
                    </div>
                  </div>

                  <div class="table-2column">
                    <div class="iconbox">
                      <div class="img-side">
                        <img src="./img/icon-transaction-success.svg"/>
                      </div>
                      <div class="text-side">
                        <h3>Bank transfer</h3>
                        <p>2 March 2021</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <div class="indicator-box">
                        <img src="./img/icon-arrow-green.svg"/>
                        <p class="success">+$45.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="table-2column">
                    <div class="iconbox">
                      <div class="img-side">
                        <img src="./img/icon-transaction-danger.svg"/>
                      </div>
                      <div class="text-side">
                        <h3>Bank transfer</h3>
                        <p>2 March 2021</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <div class="indicator-box">
                        <img src="./img/icon-arrow-red.svg"/>
                        <p>+$45.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="table-2column">
                    <div class="iconbox">
                      <div class="img-side">
                        <img src="./img/icon-transaction-success.svg"/>
                      </div>
                      <div class="text-side">
                        <h3>Bank transfer</h3>
                        <p>2 March 2021</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <div class="indicator-box">
                        <img src="./img/icon-arrow-green.svg"/>
                        <p class="success">+$45.00</p>
                      </div>
                    </div>
                  </div>

                  <div class="table-2column">
                    <div class="iconbox">
                      <div class="img-side">
                        <img src="./img/icon-transaction-danger.svg"/>
                      </div>
                      <div class="text-side">
                        <h3>Bank transfer</h3>
                        <p>2 March 2021</p>
                      </div>
                    </div>
                    <div class="right-side">
                      <div class="indicator-box">
                        <img src="./img/icon-arrow-red.svg"/>
                        <p>+$45.00</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="dashboard-wrapper-5">
                
                <div class="block-wrapper">
                  <button class="close"><img src="./img/icon-group-select.svg"/></button>
                  
                  <div class="heading-wrapper-center">
                    <div>
                      <h2 class="dashboard-wrapper-heading">YOUR CARDS</h2>
                    </div>
                    <div>
                      <a href="./cards3.php" class="add-icon-btn icon-big">
                        <span>
                          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <line x1="1" y1="6.41187" x2="13" y2="6.41187" stroke="#8000E5" stroke-width="2" stroke-linecap="round"/>
                          <line x1="7.23535" y1="12.1765" x2="7.23535" y2="1.00004" stroke="#8000E5" stroke-width="2" stroke-linecap="round"/>
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>

                  <div class="cards-carousel">
                  <div class="cards-carousel-inner">
                      <div class="card-first">
                      
                      </div>
                      <div class="card-second">
                      
                      </div>
                      <div class="card-third">
                      
                      </div>

                    <div>
                    <img src="./img/visa-logo.svg"/>
                    <hr/>
                    </div>
                    
                    <div>
                    <hr/>
                    
                    <div class="cards-carousel-inner-details">
                      
                      <div>
                        <p>Number</p>
                        <p>**** 4567</p>
                      </div>
                      <div>
                        <p>Expiry date</p>
                        <p>12/25</p>
                      </div>
                    </div>
                    </div>

                  </div>
                  </div>

                  <div class="cards-carousel-control">
                    <img src="./img/icon-arrow-right-brown.svg" alt="">
                    <button></button>
                    <button class="active-item-carousel"></button>
                    <button></button>
                    <button></button>
                    <img src="./img/icon-arrow-left-brown.svg" alt="">
                  </div>

                </div>

              </div>
            </div>

            <!---->
            <div class="dashboard-wrapper">
              <div class="dashboard-wrapper-5">
                
                <div class="block-wrapper no-padding image-block">
                  <button class="close"><img src="./img/icon-group-select.svg"/></button>
                  <img src="./img/thumbnail-big-img.png"/>
                </div>

              </div>
              <div class="dashboard-wrapper-7">
                <div class="block-wrapper chart-block">
                  <button class="close"><img src="./img/icon-group-select.svg"/></button>

                  <div class="chart-block-filter">
                    <div class="heading">
                      <h2 class="dashboard-wrapper-heading">Latest activity</h2>
                    </div>
                    <div class="filters">
                      <div class="custom-select inline-block select-grayscale">
                      <select name="cars" id="cars">
                        <option value="volvo">Income</option>
                        <option value="saab">500</option>
                        <option value="mercedes">1000</option>
                        <option value="audi">15000</option>
                      </select>
                      </div>
                      <div class="custom-select inline-block select-grayscale select-grayscale-no-icon">
                      <select class="" name="cars" id="cars">
                        <option value="volvo">Weekly</option>
                        <option value="saab">200</option>
                        <option value="mercedes">400</option>
                        <option value="audi">600</option>
                      </select>
                      </div>
                    </div>
                  </div>

                  <button class="select-date-icon"><img src="./img/icon-calendar.svg"/>Jan 21, - Jan 29</button>

                  <div>
                    <canvas id="myChart"></canvas>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['M', 'T', 'W', 'T', 'F', 'S','S'],
          datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderWidth: 1
          }]
        },
        options: {
          plugins: {
            title: {
              display: false,
            },
            legend: {
              display: false
            },
            tooltip: {
              backgroundColor: 'white',
              titleColor: 'black',
              cornerRadius: '15px',
              bodyColor: 'black'
            },
          },
          elements: {
            line: {
              tension: 0.4,
              borderColor: '#8000E5'
            },

          },
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>

    <?php include('./footer-bot.php');?>