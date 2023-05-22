<?php include('./header.php'); ?>

    <!-- main page -->
    <section>
      <div class="flex">
        
        <?php include('./sidebar.php'); ?>

        <div class="w-full">
          <div class="main-content">

            <div class="heading-top">
              <div class="left-side">
                <h1>Recipient list</h1>
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
                    <h2>Recipients list</h2>


                    <div class="grid grid-cols-12 md:gap-8 items-center my-6">

                      <div class="col-span-12 md:col-span-6">
                        <a href="./recipient_add.php" class="add-icon-btn add-icon-mobile-big">
                          <img src="./img/icon-add-btn.svg">
                          Add new
                        </a>
                      </div>
                      <div class="col-span-12 md:col-span-2">
                      </div>
                      <div class="col-span-12 md:col-span-4">
                        <div class="search-input">
                          <form>
                            <button type="submit">
                              <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20.5253 22L12.5499 14.0547C11.9681 14.5563 11.2759 14.9476 10.4733 15.2285C9.67077 15.5093 8.81806 15.6498 7.91519 15.6498C5.70816 15.6498 3.83721 14.8874 2.30233 13.3625C0.767442 11.8377 0 9.99179 0 7.8249C0 5.658 0.767442 3.81213 2.30233 2.28728C3.83721 0.762426 5.6881 0 7.85499 0C10.0219 0 11.8678 0.762426 13.3926 2.28728C14.9175 3.81213 15.6799 5.658 15.6799 7.8249C15.6799 8.68764 15.5394 9.52029 15.2586 10.3228C14.9777 11.1254 14.5663 11.8778 14.0246 12.58L22.0301 20.4952L20.5253 22ZM7.88509 13.6033C9.47013 13.6033 10.8194 13.0365 11.933 11.9029C13.0465 10.7693 13.6033 9.40994 13.6033 7.8249C13.6033 6.23985 13.0465 4.88053 11.933 3.74692C10.8194 2.61332 9.47013 2.04651 7.88509 2.04651C6.25992 2.04651 4.88555 2.61332 3.76197 3.74692C2.6384 4.88053 2.07661 6.23985 2.07661 7.8249C2.07661 9.40994 2.6384 10.7693 3.76197 11.9029C4.88555 13.0365 6.25992 13.6033 7.88509 13.6033Z" fill="#898989"></path>
                              </svg>
                            </button>
                            <input placeholder="Search...">
                          </form>
                        </div>
                      </div>

                    </div>

                    <div class="grid grid-cols-12 items-end">
                      <div class="col-span-6">
                        
                      </div>
                      <div class="col-span-6 text-right ml-auto">
                        <div class="inline-icons">
                        <button><img src="./img/icon-print.svg"></button>
                        <button><img src="./img/icon-download-active.svg"></button>
                        </div>
                      </div>
                    </div>

                    <div class="recipient-table recipient-heading">
                      <div><p>name</p></div>
                      <div><p>COMPANY</p></div>
                      <div><p>COUNTRY</p></div>
                      <div><p>Type</p></div>
                      <div><p>Actions</p></div>
                    </div>

                    <div class="recipient-table">
                      <div>
                        <div class="thumbnail-name-box">
                            <img src="./img/icon-thumbnail-popup.svg">
                            <p>Samantha Williams</p>
                        </div>
                        <button><img src="./img/icon-group-select.svg"></button>
                      </div>
                      <div><p>Company name</p></div>
                      <div><p>Country</p></div>
                      <div><p>Individual</p></div>
                      <div><button><img src="./img/icon-edit.svg"/></button><button><img src="./img/icon-watch.svg"/></button></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="recipient-table">
                      <div>
                        <div class="thumbnail-name-box">
                            <img src="./img/icon-thumbnail-popup.svg">
                            <p>Samantha Williams</p>
                        </div>
                      </div>
                      <div><p>Company name</p></div>
                      <div><p>Country</p></div>
                      <div><p>Individual</p></div>
                      <div><button><img src="./img/icon-edit.svg"/></button><button><img src="./img/icon-watch.svg"/></button></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="recipient-table">
                      <div>
                        <div class="thumbnail-name-box">
                            <img src="./img/icon-thumbnail-popup.svg">
                            <p>Samantha Williams</p>
                        </div>
                      </div>
                      <div><p>Company name</p></div>
                      <div><p>Country</p></div>
                      <div><p>Individual</p></div>
                      <div><button><img src="./img/icon-edit.svg"/></button><button><img src="./img/icon-watch.svg"/></button></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="recipient-table">
                      <div>
                        <div class="thumbnail-name-box">
                            <img src="./img/icon-thumbnail-popup.svg">
                            <p>Samantha Williams</p>
                        </div>
                      </div>
                      <div><p>Company name</p></div>
                      <div><p>Country</p></div>
                      <div><p>Individual</p></div>
                      <div><button><img src="./img/icon-edit.svg"/></button><button><img src="./img/icon-watch.svg"/></button></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="recipient-table">
                      <div>
                        <div class="thumbnail-name-box">
                            <img src="./img/icon-thumbnail-popup.svg">
                            <p>Samantha Williams</p>
                        </div>
                      </div>
                      <div><p>Company name</p></div>
                      <div><p>Country</p></div>
                      <div><p class="company">Company</p></div>
                      <div><button><img src="./img/icon-edit.svg"/></button><button><img src="./img/icon-watch.svg"/></button></div>
                    </div>

                    <hr class="table-divider"/>

                    <div class="table-pagination">
                      <div class="left-side">
                        <p>1-5 of 23</p>
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