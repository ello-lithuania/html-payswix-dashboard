// A $( document ).ready() block.
$( document ).ready(function() {

  let card_width = $('.cards-carousel-inner').width();
  let counted_height = card_width * 0.9;
  $('.cards-carousel-inner').css('height', counted_height);

  $('.btn-tab-select').click(function() {
    let selection = $(this).attr('data-id');
    $('.active-tab-btn').removeClass('active-tab-btn');
    $(this).addClass('active-tab-btn');
    $( ".btn-tab-container" ).each(function() {
      $( this ).addClass( "hidden" );
    });

    $(`#${selection}`).removeClass('hidden');
  });

  //
  $('.block-card-popup').click(function(e) {
    e.preventDefault();
    $('.block-popup').removeClass('hidden');
  });  
  $('.block-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.block-popup').addClass('hidden');
  });  

  $('.2fa_popup').click(function(e) {
    e.preventDefault();
    $('.fa-popup').removeClass('hidden');
  });  
  $('.fa-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.fa-popup').addClass('hidden');
  });  

  $('.confirm_popup').click(function(e) {
    e.preventDefault();
    $('.confirm-popup').removeClass('hidden');
  });  
  $('.confirm-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.confirm-popup').addClass('hidden');
  });  

  $('.delete_popup').click(function(e) {
    e.preventDefault();
    $('.delete-popup').removeClass('hidden');
  });  
  $('.delete-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.delete-popup').addClass('hidden');
  });  

  $('.edit_popup').click(function(e) {
    e.preventDefault();
    $('.edit-popup').removeClass('hidden');
  });  
  $('.edit-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.edit-popup').addClass('hidden');
  });  

  $('.error_popup').click(function(e) {
    e.preventDefault();
    $('.error-popup').removeClass('hidden');
  });  
  $('.error-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.error-popup').addClass('hidden');
  });  

  $('.notification_popup').click(function(e) {
    e.preventDefault();
    $('.notification-popup').removeClass('hidden');
  });  
  $('.notification-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.notification-popup').addClass('hidden');
  });  

  $('.success_popup').click(function(e) {
    e.preventDefault();
    $('.success-popup').removeClass('hidden');
  });  
  $('.success-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.success-popup').addClass('hidden');
  });  

  $('.transaction_popup').click(function(e) {
    e.preventDefault();
    $('.transaction-popup').removeClass('hidden');
  });  
  $('.transaction-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.transaction-popup').addClass('hidden');
  });  

  $('.warning_popup').click(function(e) {
    e.preventDefault();
    $('.warning-popup').removeClass('hidden');
  });  
  $('.warning-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.warning-popup').addClass('hidden');
  });  

  $('.conversions_popup').click(function(e) {
    e.preventDefault();
    $('.conversions-popup').removeClass('hidden');
  });  
  $('.conversions-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.conversions-popup').addClass('hidden');
  });  

  $('.recipient-add_popup').click(function(e) {
    e.preventDefault();
    $('.recipient-add-popup').removeClass('hidden');
  });  
  $('.recipient-add-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.recipient-add-popup').addClass('hidden');
  });  

  $('.recipient-view_popup').click(function(e) {
    e.preventDefault();
    $('.recipient-view-popup').removeClass('hidden');
  });  
  $('.recipient-view-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.recipient-view-popup').addClass('hidden');
  });  

  $('.subuser-add_popup').click(function(e) {
    e.preventDefault();
    $('.subuser-add-popup').removeClass('hidden');
  });  
  $('.subuser-add-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.subuser-add-popup').addClass('hidden');
  });  

  $('.subuser-add2_popup').click(function(e) {
    e.preventDefault();
    $('.subuser-add2-popup').removeClass('hidden');
  });  
  $('.subuser-add2-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.subuser-add2-popup').addClass('hidden');
  });  

  $('.subuser-add3_popup').click(function(e) {
    e.preventDefault();
    $('.subuser-add3-popup').removeClass('hidden');
  });  
  $('.subuser-add3-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.subuser-add3-popup').addClass('hidden');
  });  

  $('.subuser-edit_popup').click(function(e) {
    e.preventDefault();
    $('.subuser-edit-popup').removeClass('hidden');
  });  
  $('.subuser-edit-popup .modal-close-btn').click(function(e) {
    e.preventDefault();
    $('.subuser-edit-popup').addClass('hidden');
  });  

  //
  $('.card-carousel-prev').click(function(e) {
    $('.swiper-button-prev').click();
  });  
  $('.card-carousel-next').click(function(e) {
    $('.swiper-button-next').click();
  });  

  //
  $('.btn-select-card').click(function(e) {
    $('.btn-select-card-active').removeClass('btn-select-card-active');
    $(this).addClass('btn-select-card-active');
  });  
  

  //
  $('.balance-carousel-back').click(function() {
    if($('.balance-carousel-heading.active').prev('.balance-carousel-heading').length > 0) {
      $('.balance-carousel-heading.active').removeClass('active').addClass('hidden').prev().removeClass('hidden').addClass('active');
      $('.balance-carousel-amount.active').removeClass('active').addClass('hidden').prev().removeClass('hidden').addClass('active');
      $('.balance-carousel-account.active').removeClass('active').addClass('hidden').prev().removeClass('hidden').addClass('active');
    } else {
      $('.balance-carousel-heading.active').removeClass('active').addClass('hidden');
      $('.balance-carousel-heading').last().removeClass('hidden').addClass('active');

      $('.balance-carousel-amount.active').removeClass('active').addClass('hidden');
      $('.balance-carousel-amount').last().removeClass('hidden').addClass('active');

      $('.balance-carousel-account.active').removeClass('active').addClass('hidden');
      $('.balance-carousel-account').last().removeClass('hidden').addClass('active');
    }
  });
  $('.balance-carousel-next').click(function() {
    let count = $('.balance-carousel-heading').length;
    if($('.balance-carousel-heading.active').next('.balance-carousel-heading').length > 0) {
      $('.balance-carousel-heading.active').removeClass('active').addClass('hidden').next().removeClass('hidden').addClass('active');
      $('.balance-carousel-amount.active').removeClass('active').addClass('hidden').next().removeClass('hidden').addClass('active');
      $('.balance-carousel-account.active').removeClass('active').addClass('hidden').next().removeClass('hidden').addClass('active');
    } else {
      $('.balance-carousel-heading.active').removeClass('active').addClass('hidden');
      $('.balance-carousel-heading').eq(0).removeClass('hidden').addClass('active');

      $('.balance-carousel-amount.active').removeClass('active').addClass('hidden');
      $('.balance-carousel-amount').eq(0).removeClass('hidden').addClass('active');

      $('.balance-carousel-account.active').removeClass('active').addClass('hidden');
      $('.balance-carousel-account').eq(0).removeClass('hidden').addClass('active');
    }
  });

  //
  $('.button-check-item').click(function() {
    $('.button-check-item.active').removeClass('active');
    $(this).addClass('active');
  });

  //
  $(".js_tap_btn").click(function() {
    $(".js_tap_btn").removeClass("active text-blue-800").addClass("text-blue-400 hover:text-blue-800"); //removing active and font-text-800 from all tab btns, add hover:text-blue-800 in all tabs
    $(this).removeClass("text-blue-400 hover:text-blue-800").addClass("active text-blue-800"); // adding active class and text color to clicked tab
    let tab_to_show = $(this).data("tab_id"); // getting tab id to un-hide from clicked tab using data attribute;
    $(".js_tab_view").addClass("hidden"); //hiding all tabs using tailwind css;
    $(`#${tab_to_show}`).removeClass("hidden"); // removing class hidden from wanted tab only, note that i am using Grave Accent symbol instead for inverted comma ;
  });

  //
  $('.next-btn-tabs').click(function() {
    $('.back-btn').removeClass('hidden');
    let item = $('.js_tap_btn.active').attr('data-tab_id');
    $(`#${item}`).addClass('hidden');
    
    let nextID = parseInt(item.split('tabs')[1]) + 1;
    $(`#tabs${nextID}`).removeClass('hidden');

    $('.js_tap_btn.active').removeClass('active').addClass('done');
    $(`*[data-tab_id="tabs${nextID}"]`).addClass('active');


    let count = $('.js_tap_btn').length;

    if(nextID == count) {
      $('.next-btn-tabs').addClass('hidden');
      $('.finish-tabs-btn').removeClass('hidden');
    }
  });
  $('.back-btn').click(function() {
    let currentID = parseInt($('.js_tap_btn.active').attr('data-tab_id').split('tabs')[1]);
    if(currentID == 2) {
      $('.back-btn').addClass('hidden');
    }
    let backID = currentID - 1;

    $('.js_tap_btn.active').removeClass('active').removeClass('done');
    $(`*[data-tab_id="tabs${backID}"]`).addClass('active');

    if(currentID !== 1) {
      $(`#tabs${currentID}`).addClass('hidden');
      $(`#tabs${backID}`).removeClass('hidden');
    }
  });

  //
  $('.modal-close-btn').click(function() {
    $('.modal-element').addClass('hidden');
  });

  //
  $('.show-less-btn').click(function() {
    $('.content-wrapper').removeClass('transfers-page');
    $('.content-wrapper').addClass('new-payment');
    $('.show-less-container').addClass('hidden');
    $('.show-more-container').removeClass('hidden');
  });
  $('.show-more-btn').click(function() {
    $('.content-wrapper').addClass('transfers-page');
    $('.content-wrapper').removeClass('new-payment');
    $('.show-more-container').addClass('hidden');
    $('.show-less-container').removeClass('hidden');
  });

  //
  $('.next-input-write').keyup(function( event ) {
    $(this).next('.next-input-write').focus();
  });

  //
  $('.radio-btn-check-all').click(function() {

    if($('.radio-btn-check-all input:checked').length > 0) {
      $('.radio-btn-wrapper').each(function(  ) {
        $(this).find('input').prop( "checked", true );
      });
    } else {
      $('.radio-btn-wrapper').each(function(  ) {
        $(this).find('input').prop( "checked", false );
      });
    }
  });

  //
  $('.accordion-button').click(function() {
    if ( $( this ).hasClass( "active" ) ) {
      $(this).removeClass('active');
    } else {
      $(this).addClass('active');
    }
  });

  //
  $('.main-navbar-collapse').click(function() {
    if ( $( this ).hasClass( "active" ) ) {
      $(this).removeClass('active');
      $('.main-navbar-collapse-menu').addClass('hidden');
    } else {
      $(this).addClass('active');
      $('.main-navbar-collapse-menu').removeClass('hidden');
    }
  });

  //
  $('.show-password').click(function() {
    if ( $( this ).is( ".selected" ) ) {
      $(this).removeClass('selected');
      $('#test-input').attr('type', 'text');
    } else {
      $(this).addClass('selected');
      $('#test-input').attr('type', 'password');
    }
  });

  //
  $('.icon-list li button').click(function() {
    if ( $( this ).is( ".list-selected" ) ) {
      $(this).removeClass('list-selected');
    } else {
      $('button.list-selected').removeClass('list-selected');
      $(this).addClass('list-selected');
    }
  });

  //
  $('.btn-language').click(function() {
    if ( $( '.language-select' ).is( ".hidden" ) ) {
      $('.language-select').removeClass('hidden');
    } else {
      $('.language-select').addClass('hidden');
    }
  });
  
  //
  $('.btn-language').click(function() {
    if ( $( this ).is( ".language-selected" ) ) {
      $(this).removeClass('language-selected');
    } else {
      $(this).addClass('language-selected');
    }
  });

  // 
  $(document).on("click",".dashboard-wrapper-5 .close,.dashboard-wrapper-7 .close",function() {
    if ($(this).hasClass("active-tab-btn")) {
      $(this).removeClass('active-tab-btn');
      $('.btns-tab-controls').remove();
    } else {
    $(this).addClass('active-tab-btn');
    $( `
    <div class='btns-tab-controls'>
    <button>
      <svg width='15' height='15' viewBox='0 0 15 15' fill='none' xmlns='http://www.w3.org/2000/svg'>
      <path d='M7.50001 15L4.42083 11.9208L5.32848 11.0132L6.87839 12.5587V8.12162H2.44131L3.8956 9.58029L2.98795 10.4879L0 7.5L3.0062 4.49381L3.91385 5.40146L2.44131 6.87838H6.87839V2.43693L5.41972 3.89558L4.51207 2.98794L7.50001 0L10.4879 2.98794L9.5803 3.89558L8.12163 2.43693V6.87838H12.5631L11.1044 5.41971L12.0121 4.51206L15 7.5L12.0121 10.4879L11.1044 9.58029L12.5631 8.12162H8.12163V12.5587L9.67154 11.0132L10.5792 11.9208L7.50001 15Z' fill='#898989'/>
      </svg>
      Move
    </button>
    <button class='!mb-0'>
      <svg width='13' height='13' viewBox='0 0 13 13' fill='none' xmlns='http://www.w3.org/2000/svg'>
      <path d='M1.11324 13L0 11.8868L5.38676 6.5L0 1.11324L1.11324 0L6.5 5.38676L11.8868 0L13 1.11324L7.61324 6.5L13 11.8868L11.8868 13L6.5 7.61324L1.11324 13Z' fill='#898989'/>
      </svg>
      Remove
    </button>
    </div>
    ` ).insertBefore( this );
    }
  });    

  $('.btn-thumbnail').click(function() {
    if ( $( this ).is( ".selected" ) ) {
      $(this).removeClass('selected');
      $('.profile-btns').remove();
    } else {
      $(this).addClass('selected');
      $( `
      <div class="profile-btns">
      <a href="">
        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.20765 11.0642C1.91803 10.413 2.71721 9.88912 3.60519 9.49249C4.49317 9.09586 5.45811 8.89754 6.5 8.89754C7.54189 8.89754 8.50683 9.09586 9.39481 9.49249C10.2828 9.88912 11.082 10.413 11.7923 11.0642V1.20765H1.20765V11.0642ZM6.53552 7.61885C7.23406 7.61885 7.82013 7.3791 8.29372 6.89959C8.7673 6.42008 9.0041 5.83106 9.0041 5.13251C9.0041 4.43397 8.7673 3.84791 8.29372 3.37432C7.82013 2.90073 7.23406 2.66393 6.53552 2.66393C5.83698 2.66393 5.25091 2.90073 4.77732 3.37432C4.30373 3.84791 4.06694 4.43397 4.06694 5.13251C4.06694 5.83106 4.30373 6.42008 4.77732 6.89959C5.25091 7.3791 5.83698 7.61885 6.53552 7.61885ZM1.20765 13C0.887978 13 0.606785 12.8786 0.364071 12.6359C0.121357 12.3932 0 12.112 0 11.7923V1.20765C0 0.876139 0.121357 0.591985 0.364071 0.355191C0.606785 0.118397 0.887978 0 1.20765 0H11.7923C12.1239 0 12.408 0.118397 12.6448 0.355191C12.8816 0.591985 13 0.876139 13 1.20765V11.7923C13 12.112 12.8816 12.3932 12.6448 12.6359C12.408 12.8786 12.1239 13 11.7923 13H1.20765ZM2.14891 11.7923H10.8511V11.6503C10.2117 11.1056 9.52505 10.6972 8.79098 10.4249C8.05692 10.1525 7.29326 10.0164 6.5 10.0164C5.70674 10.0164 4.94308 10.1525 4.20902 10.4249C3.47495 10.6972 2.78825 11.1056 2.14891 11.6503V11.7923ZM6.53552 6.5C6.15665 6.5 5.83402 6.3668 5.56762 6.10041C5.30123 5.83402 5.16803 5.51138 5.16803 5.13251C5.16803 4.75364 5.30123 4.43397 5.56762 4.1735C5.83402 3.91302 6.15665 3.78279 6.53552 3.78279C6.91439 3.78279 7.23702 3.91302 7.50342 4.1735C7.76981 4.43397 7.90301 4.75364 7.90301 5.13251C7.90301 5.51138 7.76981 5.83402 7.50342 6.10041C7.23702 6.3668 6.91439 6.5 6.53552 6.5Z" fill="#898989"/>
        </svg>
        Profile
      </a>
      <a href="">
        <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 10.7124V9.02878C0 8.61821 0.105497 8.24663 0.316492 7.91405C0.527475 7.58146 0.82057 7.33147 1.19578 7.16408C2.01676 6.80654 2.75804 6.54822 3.41961 6.38911C4.0812 6.23002 4.76246 6.15047 5.46339 6.15047C6.16944 6.15047 6.84983 6.22935 7.50456 6.38712C8.15929 6.54487 8.89714 6.80386 9.71812 7.16408C10.0926 7.32805 10.3883 7.57642 10.6053 7.90921C10.8222 8.242 10.9307 8.61512 10.9307 9.02856V10.7124H0ZM11.9803 10.7124V9.03681C11.9803 8.32754 11.8022 7.74131 11.446 7.27812C11.0898 6.81491 10.6185 6.42895 10.0322 6.12023C10.7818 6.21229 11.4886 6.34358 12.1529 6.51409C12.817 6.6846 13.3588 6.87892 13.778 7.09704C14.1547 7.30934 14.4526 7.58234 14.6715 7.91605C14.8905 8.24975 15 8.62742 15 9.04904V10.7124H11.9803ZM5.46432 5.12812C4.71019 5.12812 4.09448 4.88948 3.6172 4.4122C3.13991 3.9349 2.90127 3.31886 2.90127 2.56406C2.90127 1.80927 3.13997 1.19322 3.61738 0.715928C4.09479 0.238643 4.71016 0 5.4635 0C6.21684 0 6.83283 0.238687 7.31145 0.716062C7.79008 1.19344 8.02939 1.80877 8.02939 2.56205C8.02939 3.31818 7.79041 3.9349 7.31244 4.4122C6.83449 4.88948 6.21845 5.12812 5.46432 5.12812ZM11.6451 2.56202C11.6451 3.3155 11.4059 3.93156 10.9274 4.41018C10.4489 4.88881 9.83247 5.12812 9.07807 5.12812C8.95234 5.12812 8.81559 5.11908 8.66784 5.10099C8.52008 5.08289 8.38074 5.05016 8.24982 5.00279C8.52332 4.71812 8.72991 4.36873 8.86958 3.95462C9.00924 3.54052 9.07907 3.0772 9.07907 2.56465C9.07907 2.05211 9.00903 1.59912 8.86896 1.20568C8.72887 0.81224 8.52249 0.45195 8.24982 0.12481C8.37539 0.0889663 8.51325 0.0592014 8.6634 0.0355143C8.81354 0.0118383 8.95177 0 9.07807 0C9.83149 0 10.4477 0.239341 10.9267 0.718023C11.4056 1.19672 11.6451 1.81138 11.6451 2.56202ZM1.14184 9.57057H9.78479V9.04482C9.78479 8.86778 9.73172 8.69616 9.62558 8.52997C9.51943 8.36379 9.38815 8.24758 9.23172 8.18132C8.43794 7.8318 7.77132 7.59692 7.23184 7.47669C6.69237 7.35645 6.10286 7.29634 5.46332 7.29634C4.82912 7.29634 4.23749 7.35645 3.68842 7.47669C3.13936 7.59692 2.46927 7.8318 1.67816 8.18132C1.52441 8.24718 1.39659 8.36327 1.29469 8.52957C1.19279 8.69587 1.14184 8.86762 1.14184 9.04482V9.57057ZM5.46268 4.03036C5.88724 4.03036 6.2382 3.89207 6.51556 3.61549C6.79294 3.33891 6.93163 2.98859 6.93163 2.56455C6.93163 2.14049 6.79334 1.79002 6.51675 1.51312C6.24017 1.23622 5.88986 1.09777 5.4658 1.09777C5.04175 1.09777 4.69128 1.23584 4.41437 1.512C4.13748 1.78816 3.99903 2.13796 3.99903 2.56141C3.99903 2.98597 4.13711 3.33694 4.41327 3.61431C4.68942 3.89168 5.03923 4.03036 5.46268 4.03036Z" fill="#898989"/>
        </svg>
        Users
      </a>
      <a href="">
        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.76105 15H6.23455C6.07114 15 5.92659 14.9507 5.8009 14.8522C5.6752 14.7537 5.59978 14.6244 5.57464 14.4643L5.27297 12.6355C5.05929 12.5616 4.82675 12.4538 4.57536 12.3122C4.32396 12.1706 4.10399 12.0259 3.91545 11.8781L2.19969 12.6539C2.04885 12.7278 1.89173 12.7401 1.72833 12.6909C1.56492 12.6416 1.44551 12.5431 1.37009 12.3953L0.0879875 10.1601C-7.8667e-08 10.0246 -0.0219969 9.87993 0.0219969 9.72599C0.0659907 9.57204 0.150836 9.44581 0.276532 9.34729L1.87916 8.20197C1.85402 8.10345 1.83831 7.98645 1.83203 7.85099C1.82574 7.71552 1.8226 7.59852 1.8226 7.5C1.8226 7.40148 1.82574 7.28448 1.83203 7.14901C1.83831 7.01355 1.85402 6.89655 1.87916 6.79803L0.276532 5.65271C0.150836 5.55419 0.0659907 5.42796 0.0219969 5.27401C-0.0219969 5.12007 -7.8667e-08 4.97537 0.0879875 4.8399L1.37009 2.60468C1.45808 2.4569 1.58063 2.35837 1.73776 2.30911C1.89488 2.25985 2.04885 2.27217 2.19969 2.34606L3.9343 3.12192C4.11028 2.97414 4.32396 2.83251 4.57536 2.69704C4.82675 2.56158 5.05929 2.4569 5.27297 2.383L5.57464 0.517241C5.59978 0.369458 5.6752 0.246305 5.8009 0.147783C5.92659 0.049261 6.07114 0 6.23455 0H8.76105C8.92446 0 9.06901 0.049261 9.1947 0.147783C9.3204 0.246305 9.39582 0.369458 9.42096 0.517241L9.72263 2.36453C9.93631 2.45074 10.172 2.5585 10.4297 2.68781C10.6874 2.81712 10.9042 2.96182 11.0802 3.12192L12.7959 2.34606C12.9467 2.27217 13.1039 2.25985 13.2673 2.30911C13.4307 2.35837 13.5501 2.4569 13.6255 2.60468L14.9076 4.82143C14.9956 4.9569 15.0207 5.10468 14.983 5.26478C14.9453 5.42488 14.8573 5.55419 14.7191 5.65271L13.1164 6.76108C13.1416 6.87192 13.1573 6.99507 13.1636 7.13054C13.1699 7.26601 13.173 7.38916 13.173 7.5C13.173 7.61084 13.1699 7.73091 13.1636 7.86022C13.1573 7.98953 13.1416 8.10961 13.1164 8.22044L14.7191 9.34729C14.8448 9.44581 14.9296 9.57204 14.9736 9.72599C15.0176 9.87993 14.9956 10.0246 14.9076 10.1601L13.6255 12.3953C13.5375 12.5431 13.415 12.6416 13.2578 12.6909C13.1007 12.7401 12.9467 12.7278 12.7959 12.6539L11.0613 11.8781C10.8853 12.0259 10.6748 12.1736 10.4297 12.3214C10.1846 12.4692 9.94888 12.5739 9.72263 12.6355L9.42096 14.4643C9.39582 14.6244 9.3204 14.7537 9.1947 14.8522C9.06901 14.9507 8.92446 15 8.76105 15ZM7.4978 9.90148C8.17656 9.90148 8.75477 9.66749 9.23241 9.19951C9.71006 8.73153 9.94888 8.16502 9.94888 7.5C9.94888 6.83498 9.71006 6.26847 9.23241 5.80049C8.75477 5.33251 8.17656 5.09852 7.4978 5.09852C6.81904 5.09852 6.24083 5.33251 5.76319 5.80049C5.28554 6.26847 5.04672 6.83498 5.04672 7.5C5.04672 8.16502 5.28554 8.73153 5.76319 9.19951C6.24083 9.66749 6.81904 9.90148 7.4978 9.90148ZM7.4978 8.7931C7.12071 8.7931 6.80647 8.66687 6.55508 8.41441C6.30368 8.16195 6.17799 7.85714 6.17799 7.5C6.17799 7.14286 6.30368 6.83805 6.55508 6.58559C6.80647 6.33313 7.12071 6.2069 7.4978 6.2069C7.86232 6.2069 8.17342 6.33313 8.4311 6.58559C8.68878 6.83805 8.81761 7.14286 8.81761 7.5C8.81761 7.85714 8.68878 8.16195 8.4311 8.41441C8.17342 8.66687 7.86232 8.7931 7.4978 8.7931ZM6.70591 13.7438H8.28969L8.55365 11.6749C8.96845 11.5764 9.3644 11.4224 9.74148 11.2131C10.1186 11.0037 10.458 10.7451 10.7596 10.4372L12.7582 11.2869L13.4747 10.0123L11.7024 8.75616C11.7526 8.5468 11.7966 8.33744 11.8343 8.12808C11.872 7.91872 11.8909 7.70936 11.8909 7.5C11.8909 7.29064 11.8752 7.08128 11.8438 6.87192C11.8123 6.66256 11.7652 6.4532 11.7024 6.24384L13.4747 4.98769L12.7582 3.71305L10.7596 4.56281C10.4705 4.2303 10.1406 3.9532 9.76977 3.73153C9.39896 3.50985 8.99359 3.37438 8.55365 3.32512L8.28969 1.25616H6.70591L6.44195 3.32512C6.01458 3.39901 5.61235 3.54372 5.23526 3.75924C4.85817 3.97475 4.51879 4.24261 4.21712 4.56281L2.2374 3.71305L1.52093 4.98769L3.2744 6.24384C3.22412 6.4532 3.18327 6.66256 3.15184 6.87192C3.12042 7.08128 3.10471 7.29064 3.10471 7.5C3.10471 7.70936 3.12042 7.91872 3.15184 8.12808C3.18327 8.33744 3.22412 8.5468 3.2744 8.75616L1.52093 10.0123L2.2374 11.2869L4.21712 10.4372C4.53136 10.7451 4.87703 11.0037 5.25412 11.2131C5.63121 11.4224 6.02715 11.5764 6.44195 11.6749L6.70591 13.7438Z" fill="#898989"/>
        </svg>
        Settings
      </a>
    </div>
      ` ).insertAfter( this );
    }
    
  });
});

var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);