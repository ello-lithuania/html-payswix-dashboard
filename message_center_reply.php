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

            <div class="message-reply">

              <div class="message-reply-wrapper">
                  <div class="message-reply-wrapper-inner modal-element">
                    <div class="message-reply-wrapper-inner-box">
                      <button class="close-btn modal-close-btn "><img src="./img/icon-modal-close.svg"/></button>
                    
                      <h2>REPLY</h2>

                    <div class="table-pagination">
                      <div class="left-side">
                        <p>03/11/2022</p>
                      </div>
                      <div class="right-side">
                        <button><img src="./img/icon-arrow-right-brown.svg"></button>
                        <button><img src="./img/icon-arrow-left-brown.svg"></button>
                      </div>
                    </div>


                <hr/>

                      <div class="message-reply-input">
                        <div class="left-side">
                          <label>Subject</label>
                        </div>
                        <div class="right-side">
                          <input value="Yearly Paswix Survey">
                        </div>
                      </div>

                <hr/>

                      <div class="message-reply-input">
                        <div class="left-side">
                          <label>From</label>
                        </div>
                        <div class="right-side">
                          <input value="Marketing">
                        </div>
                      </div>


                      <hr/>

                      <textarea rows="12">Dear Client, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </textarea>

                      <div class="reply-btns-control">
                        <div>
                          <button><svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.34375 25.4375V4.5625L28.0312 15L3.34375 25.4375ZM5.625 21.9062L22.125 15L5.625 8V12.875L13.375 15L5.625 17.0625V21.9062ZM5.625 21.9062V8V17.0625V21.9062Z" fill="#8000E5"/>
</svg>
</button>
                        </div>
                        <div>

                          <button>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.81779 22.2409C4.26223 22.2409 3.78046 22.0369 3.37248 21.6289C2.96449 21.2209 2.7605 20.7391 2.7605 20.1836V6.5638C2.7605 6.2513 2.79522 5.9822 2.86466 5.75651C2.93411 5.53082 3.04696 5.32248 3.20321 5.13151L4.66154 3.15234C4.85251 2.97873 5.06084 2.84418 5.28654 2.7487C5.51223 2.65321 5.77265 2.60547 6.06779 2.60547H18.9324C19.2275 2.60547 19.4836 2.65321 19.7006 2.7487C19.9176 2.84418 20.1216 2.97873 20.3126 3.15234L21.797 5.13151C21.9532 5.32248 22.0704 5.53082 22.1485 5.75651C22.2266 5.9822 22.2657 6.2513 22.2657 6.5638V20.1836C22.2657 20.7391 22.0617 21.2209 21.6537 21.6289C21.2457 22.0369 20.7553 22.2409 20.1824 22.2409H4.81779ZM5.20841 5.88672H19.7917L18.8282 4.6888H6.14591L5.20841 5.88672ZM4.81779 7.44922V20.1836H20.1824V7.44922H4.81779ZM12.5001 17.8919L16.7709 13.6211L15.573 12.4232L13.4115 14.6107V9.40234H11.6147V14.6107L9.42716 12.4232L8.25529 13.6211L12.5001 17.8919Z" fill="#898989"/>
                            </svg>
                          </button>

                          <button>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66667 22.2383C6.09375 22.2383 5.60764 22.0386 5.20833 21.6393C4.80903 21.24 4.60938 20.7539 4.60938 20.181V5.59766H3.28125V3.51432H8.80208V2.47266H16.1719V3.51432H21.7188V5.59766H20.3906V20.181C20.3906 20.7365 20.1866 21.2183 19.7786 21.6263C19.3707 22.0343 18.8889 22.2383 18.3333 22.2383H6.66667ZM18.3333 5.59766H6.66667V20.181H18.3333V5.59766ZM9.375 18.0456H11.1719V7.65495H9.375V18.0456ZM13.8281 18.0456H15.651V7.65495H13.8281V18.0456Z" fill="#898989"/>
                            </svg>
                          </button>

                          <button>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.0825 7.96875V4.73958H7.91585V7.96875H6.14502V2.96875H18.8534V7.96875H17.0825ZM3.6971 9.73958H21.3013H6.14502H3.6971ZM19.1398 12.3698C19.3655 12.3698 19.5652 12.283 19.7388 12.1094C19.9124 11.9358 19.9992 11.7361 19.9992 11.5104C19.9992 11.2847 19.9124 11.0851 19.7388 10.9115C19.5652 10.7378 19.3655 10.651 19.1398 10.651C18.9141 10.651 18.7145 10.7378 18.5409 10.9115C18.3672 11.0851 18.2804 11.2847 18.2804 11.5104C18.2804 11.7361 18.3672 11.9358 18.5409 12.1094C18.7145 12.283 18.9141 12.3698 19.1398 12.3698ZM17.0825 20.3646V15.7292H7.91585V20.3646H17.0825ZM18.8534 22.1094H6.14502V17.4219H1.92627V10.8854C1.92627 10.0694 2.20405 9.37934 2.7596 8.8151C3.31516 8.25087 4.0096 7.96875 4.84294 7.96875H20.1554C20.9888 7.96875 21.6832 8.25087 22.2388 8.8151C22.7943 9.37934 23.0721 10.0694 23.0721 10.8854V17.4219H18.8534V22.1094ZM21.3013 15.651V10.8594C21.3013 10.5469 21.1928 10.2821 20.9757 10.0651C20.7587 9.84809 20.4853 9.73958 20.1554 9.73958H4.84294C4.51308 9.73958 4.23964 9.84809 4.02262 10.0651C3.80561 10.2821 3.6971 10.5556 3.6971 10.8854V15.651H6.14502V13.9583H18.8534V15.651H21.3013Z" fill="#898989"/>
                            </svg>
                          </button>
                        </div>
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
    
    <?php include('./footer-bot.php');?>