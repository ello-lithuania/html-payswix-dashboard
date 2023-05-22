<?php include('./header.php'); ?>

<div class="grid grid-cols-12 md:grid-cols-6 gap-4 items-center justify-center px-4">
  <button class="2fa_popup btn-success col-span-6 md:col-span-1">2fa</button>
  <button class="block-card-popup btn-success col-span-6 md:col-span-1">block</button>
  <button class="confirm_popup btn-success col-span-6 md:col-span-1">confirm</button>
  <button class="delete_popup btn-success col-span-6 md:col-span-1">delete</button>
  <button class="edit_popup btn-success col-span-6 md:col-span-1">edit</button>
  <button class="error_popup btn-success col-span-6 md:col-span-1">error</button>
</div>
<div class="grid grid-cols-12 md:grid-cols-6 gap-4 items-center justify-center px-4">
  <button class="notification_popup btn-success col-span-6 md:col-span-1">notification</button>
  <button class="success_popup btn-success col-span-6 md:col-span-1">success</button>
  <button class="transaction_popup btn-success col-span-6 md:col-span-1">transaction</button>
  <button class="warning_popup btn-success col-span-6 md:col-span-1">warning</button>
  <button class="conversions_popup btn-success col-span-6 md:col-span-1">conversions</button>
  <button class="recipient-add_popup btn-success col-span-6 md:col-span-1">recipient-add</button>
</div>
<div class="grid grid-cols-12 md:grid-cols-6 gap-4 items-center justify-center px-4 pb-8">
  <button class="recipient-view_popup btn-success col-span-6 md:col-span-1">recipient-view</button>
  <button class="subuser-add_popup btn-success col-span-6 md:col-span-1">subuser-add</button>
  <button class="subuser-add2_popup btn-success col-span-6 md:col-span-1">subuser-add2</button>
  <button class="subuser-add3_popup btn-success col-span-6 md:col-span-1">subuser-add3</button>
  <button class="subuser-edit_popup btn-success col-span-6 md:col-span-1">subuser-edit</button>
</div>



      <section class="popup-wrapper fa-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>

                    <p>Lorem ipsum dolor sit amet?</p>
                    
                        <div  class="fa-popup-digits">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                          <input type="number" maxlength="1" class="next-input-write" placeholder="-">
                        </div>

                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel modal-close-btn">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">COnfirm</button>
                      </div>
                    </div>
                  </div>
                  
                </div>
    </section>

    <section class="popup-wrapper block-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>
                    <img src="./img/icon-block-popup.svg"/>
                    <p>Lorem ipsum dolor sit amet?</p>
                    
                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel modal-close-btn">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">COnfirm</button>
                      </div>
                    </div>
                  </div>
                  
                </div>
    </section>

    <section class="popup-wrapper popup-wrapper-wider confirm-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore?</p>
                    
                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel modal-close-btn">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">COnfirm</button>
                      </div>
                    </div>
                  </div>
                  
                </div>
    </section>
    
    <section class="popup-wrapper delete-popup modal-element hidden">
            <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>

                    <img src="./img/icon-trash-popup.svg"/>
                    <p>Are you sure you want to delete this?</p>
                    <p>You can’t undo this action.</p>
                    
                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel modal-close-btn">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">COnfirm</button>
                      </div>
                    </div>
                    
                  </div>
                  
                </div>
    </section>

    <section class="popup-wrapper edit-popup modal-element hidden">
            <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>

                    <div class="input-group">
                        <div>
                          <label>Name*</label>
                          <input value="Enter Name"/>
                        </div>
                        <div>
                          <label>Country</label>
                          <input value="Select Country"/>
                        </div>
                      </div>

                    <div class="popup-btns">
                      <div class="popup-btns-inner">
                        <button class="btn-cancel modal-close-btn">Cancel</button>
                      </div>
                      <div class="popup-btns-inner">
                        <button class="btn-success">COnfirm</button>
                      </div>
                    </div>
                  
                </div>
    </section>

    <section class="popup-wrapper error-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>
                    <img src="./img/icon-error-popup.svg"/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore?</p>
                    <button class="modal-close-btn confirm">ok</button>
                  </div>
                  
                </div>
    </section>

    <section class="popup-wrapper notification-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">                      
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore?</p>
                    
                    <button class="modal-close-btn confirm">ok</button>
                      
                  </div>
                  
                </div>
    </section>

    <section class="popup-wrapper success-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>
                    <img src="./img/icon-success-popup.svg"/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore?</p>
                    <button class="modal-close-btn confirm">ok</button>
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

    <section class="popup-wrapper warning-popup modal-element hidden">
                <div class="popup-wrapper-main">
                  <div class="popup-wrapper-main-inner">
                    <button class="modal-close modal-close-btn">
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.65 14.85L0 13.2L5.775 7.425L0 1.65L1.65 0L7.425 5.775L13.2 0L14.85 1.65L9.075 7.425L14.85 13.2L13.2 14.85L7.425 9.075L1.65 14.85Z" fill="#898989"/>
                      </svg>
                    </button>
                    <img src="./img/icon-warning-popup.svg"/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore?</p>
                    <button class="modal-close-btn confirm">ok</button>
                  </div>
                  
                </div>
    </section>

<div class="add-new-popup conversions-popup modal-element hidden">

  <div class="add-new-popup-wrapper">
    <div class="add-new-popup-wrapper-inner">
      <div class="add-new-popup-wrapper-inner-box">
      <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
      
        <h2>Conversion quote</h2>
        
        <div class="conversions-info-top">
          <div>
            <label>Currency</label>
            <p>1,000<span>EURO</span></p>
          </div>
          <div>
            <label>Currency</label>
            <p>1,000<span>EURO</span></p>
          </div>
        </div>

        <div class="conversions-info">
          <div>
            <label>CONVERSION FEE</label>
            <p>€ 0.00</span></p>
          </div>
          <div>
            <label>Currency</label>
            <p>
              <img src="./img/icon-card-image.svg">
              IBAN 5252525252525 7984
            </p>
          </div>
        </div>

      <div class="popup-btns">
        <div class="popup-btns-inner">
          <button class="btn-cancel modal-close-btn">Cancel</button>
        </div>
        <div class="popup-btns-inner">
          <button class="btn-success">COnfirm</button>
        </div>
      </div>

      </div>
    </div>


  </div>

</div>

<div class="add-new-popup recipient-add-popup modal-element hidden">

  <div class="add-new-popup-wrapper">
      <div class="add-new-popup-wrapper-inner">
        <div class="add-new-popup-wrapper-inner-box">
        <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
        
          <h2>Add New Recipiant</h2>

          <div class="input-group">
            <div>
              <label>Name</label>
              <input value="Enter Name"/>
            </div>
            <div>
              <label>LASTNAME</label>
              <input value="Enter Lastname"/>
            </div>
          </div>

          <div class="input-group input-group-end">
            <div>
              <label>COMPANY</label>
              <input value="Enter Company"/>
            </div>
            <div>
              <label>Country</label>
              <div class="custom-select">
                <select name="cars" id="cars" class="bg-transparent text-left border-b border-black placeholder-black block w-full py-2 text-base font-medium capitalize outline-0">
                    <option placeholder="volvo">Select Country</option>
                    <option placeholder="saab">Lithuania</option>
                    <option placeholder="mercedes">Germany</option>
                    <option placeholder="audi">Norway</option>
                  </select>
              </div>
            </div>
          </div>

                  <div class="choose-radio-box">
                    <label>TYPE</label>
                  
                    <div class="choose-radio-box-inner">

                      <div class="radio-btn-text">
                        <input id="radio1" type="radio" name="radio" class="hidden"  />
                        <label for="radio1">
                        <span></span>
                        Company</label>
                      </div>

                      <div class="radio-btn-text">
                        <input id="radio2" type="radio" name="radio" class="hidden" checked />
                        <label for="radio2">
                        <span></span>
                        Individual</label>
                      </div>

                    </div>

                  </div>

        <div class="popup-btns">
          <div class="popup-btns-inner">
            <button class="btn-cancel modal-close-btn">Cancel</button>
          </div>
          <div class="popup-btns-inner">
            <button class="btn-success">add</button>
          </div>
        </div>

        </div>
      </div>


  </div>

</div>

<div class="add-new-popup recipient-view-popup modal-element hidden">

  <div class="add-new-popup-wrapper">
      <div class="add-new-popup-wrapper-inner">
        <div class="add-new-popup-wrapper-inner-box">
        <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
        
            <div class="thumbnail-image-box">
                <img src="./img/icon-thumbnail-popup.svg">
                <p>Samantha Williams</p>
            </div>

          <div class="recipient-view-details">
            <div>
              <p>COMPANY</p>
              <p>Company</p>
            </div>
            <div>
              <p>Country</p>
              <p>Country</p>
            </div>
            <div>
              <p>TYPE</p>
              <p>Company</p>
            </div>
          </div>

        <div class="popup-btns">
          <div class="popup-btns-inner">
            <button class="btn-cancel modal-close-btn">Cancel</button>
          </div>
          <div class="popup-btns-inner">
            <button class="btn-success btn-mobile-smaller">Make a transfer</button>
          </div>
        </div>

        </div>
      </div>


  </div>

</div>

<div class="add-new-popup modal-element subuser-add-popup hidden">

  <div class="add-new-popup-wrapper">
      <div class="add-new-popup-wrapper-inner">
        <div class="add-new-popup-wrapper-inner-box">
        <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
        
          <h2>Add New Sub User</h2>

          <div class="input-group input-group-end">
            <div>
              <label>e-mail</label>
              <input value="Company name"/>
            </div>
            <div>
              <label>permission</label>
              <div class="custom-select">
                    <select name="cars" id="cars">
                      <option placeholder="volvo">Select Permission</option>
                      <option placeholder="saab">User</option>
                      <option placeholder="mercedes">Moderator</option>
                      <option placeholder="audi">Admin</option>
                    </select>
              </div>
            </div>
          </div>

          <div class="input-group">
            <div>
              <label>Position in company</label>
              <input value="Enter Position"/>
            </div>
            <div>
            </div>
          </div>

        <div class="popup-btns">
          <div class="popup-btns-inner">
            <button class="btn-cancel modal-close-btn">Cancel</button>
          </div>
          <div class="popup-btns-inner">
            <button class="btn-success">Add</button>
          </div>
        </div>

        </div>
      </div>

  </div>

</div>

<div class="add-new-popup modal-element subuser-add2-popup hidden">

  <div class="add-new-popup-wrapper">
      <div class="add-new-popup-wrapper-inner">
        <div class="add-new-popup-wrapper-inner-box">
        <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
        
          <h2>Add New Sub User</h2>

          <div class="input-group">
            <div>
              <label>e-mail</label>
              <input value="Company name"/>
            </div>
            <div>
              <label>permission</label>
              <input value="Company name"/>
            </div>
          </div>

          <div class="input-group">
            <div>
              <label>Position in company</label>
              <input value="Enter Position"/>
            </div>
            <div>
            </div>
          </div>

        <div class="popup-btns">
          <div class="popup-btns-inner">
            <button class="btn-cancel modal-close-btn">Cancel</button>
          </div>
          <div class="popup-btns-inner">
            <button class="btn-success">Add</button>
          </div>
        </div>

        </div>
      </div>

  </div>

</div>

<div class="add-new-popup modal-element subuser-add3-popup hidden">

  <div class="add-new-popup-wrapper">
      <div class="add-new-popup-wrapper-inner">
        <div class="add-new-popup-wrapper-inner-box">
        <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
        
          <h2>CREATE SUB ACCOUNT</h2>

            <div class="input-group-full">
              <label>SUB ACCOUNT NAME*</label>
              <input placeholder="Enter Sub Account Name"/>
            </div>

        <div class="popup-btns">
          <div class="popup-btns-inner">
            <button class="btn-cancel modal-close-btn">Cancel</button>
          </div>
          <div class="popup-btns-inner">
            <button class="btn-success">create</button>
          </div>
        </div>

        </div>
      </div>


  </div>

</div>

<div class="add-new-popup modal-element subuser-create-popup hidden">

  <div class="add-new-popup-wrapper">
      <div class="add-new-popup-wrapper-inner">
        <div class="add-new-popup-wrapper-inner-box">
        <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
        
          <h2>CREATE SUB ACCOUNT</h2>
          
            <div class="input-group-full">
              <label>SUB ACCOUNT NAME*</label>
              <input placeholder="Enter Sub Account Name" required>
            </div>

        <div class="popup-btns">
          <div class="popup-btns-inner">
            <button class="btn-cancel modal-close-btn">Cancel</button>
          </div>
          <div class="popup-btns-inner">
            <button class="btn-success">CREATE</button>
          </div>
        </div>

        </div>
      </div>


  </div>

</div>

<div class="add-new-popup  modal-element subuser-edit-popup hidden">

  <div class="add-new-popup-wrapper">
        <div class="add-new-popup-wrapper-inner">
          <div class="add-new-popup-wrapper-inner-box">
          <button class="modal-close-btn close-btn"><img src="./img/icon-modal-close.svg"/></button>
          
            <h2>EDIT Sub User</h2>

            <div class="input-group input-group-end">
              <div>
                <label>e-mail</label>
                <input value="Enter E-mail"/>
              </div>
              <div>
                <label>permission</label>
                <div class="custom-select">
                      <select name="cars" id="cars">
                        <option placeholder="volvo">Select Permission</option>
                        <option placeholder="saab">User</option>
                        <option placeholder="mercedes">Moderator</option>
                        <option placeholder="audi">Admin</option>
                      </select>
                </div>
              </div>
            </div>

            <div class="input-group">
              <div>
                <label>Position in company</label>
                <input value="Enter Position"/>
              </div>
              <div>
              </div>
            </div>

          <div class="popup-btns">
            <div class="popup-btns-inner">
              <button class="btn-cancel modal-close-btn">Cancel</button>
            </div>
            <div class="popup-btns-inner">
              <button class="btn-success">Add</button>
            </div>
          </div>

          </div>
        </div>


    </div>



  </div>

</div>

<?php include('./footer-bot.php');?>