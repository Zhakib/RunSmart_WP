$(document).ready(function(){
  $('.carousel__inner').slick({
    speed: 1200,
    // adaptiveHeight: true,
    
    prevArrow: '<button type="button" class="slick-prev"> <img src="'+wp_url+'/assets/img/catalog/iconLeft.png"></img> </button>',//'+wp_url+'
    nextArrow: '<button type="button" class="slick-next"> <img src="'+wp_url+'/assets/img/catalog/iconRight.png"></img> </button>',
    responsive:[
      {
      breakpoint: 500,
      settings:{
        arrows: false,
      }
      }
    ],
  });
  $('ul.catalog__tabs').on('click', 'li:not(.catalog__tab_active)', function() {
    $(this)
      .addClass('catalog__tab_active').siblings().removeClass('catalog__tab_active')
      .closest('div.container').find('div.catalog__content').removeClass('catalog__content_active').eq($(this).index()).addClass('catalog__content_active');
  });
  
  function toggleSlide(item) {
    $(item).each(function(i) {
        $(this).on('click', function(e) {
            e.preventDefault();
            $('.catalog-item__content').eq(i).toggleClass('catalog-item__content_active');
            $('.catalog-item__list').eq(i).toggleClass('catalog-item__list_active');
        })
    });
};

  toggleSlide('.catalog-item__link');  toggleSlide('.catalog-item__back');

  $('[data-modal=consultation]').on('click', function(){
    $('.overlay, #consultation').fadeIn('slow');
  });
  $('.modal__close').on('click', function(){
    $('.overlay, #consultation, #thanks, #order').fadeOut('slow');
  });

  $('.button_mini').each(function(i){
    $(this).on('click', function(){
      $('#order .modal__descr').text($('.catalog-item__subtitle').eq(i).text());
      $('.overlay, #order').fadeIn('slow');
    });
  });

  function validateForms(form){
    $(form).validate({
      rules:{
        your_name: "required",
        your_phone: "required",
        your_email: {
          required: true,
          email: true,
        }
      },
      messages:{
        your_name: "Пожалуйста, введите свое имя",
        your_phone: "Пожалуйста, введите свой номер телефона",
        your_email: "Пожалуйста, введите свой адрес электронной почты"
      },
    });
  }

  validateForms('#order form');
  validateForms('#consultation-form');
  validateForms('#consultation form');
  
  $('input[name=your_phone]').mask("+7 (999) 999-99-99");

  $('form').submit(function(e){
    e.preventDefault();
    if(!$(this).valid()){
      return;
    }
    $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      data: $(this).serialize(),
    }).done(function(){
      $(this).find('input').val('');
      $('form').triger('reset');
    });
    return false;
  });
  
  // mouse scroll & page up

  $(window).scroll(function(){
    if($(this).scrollTop()>1600){
      $('.pageup').fadeIn();
    } else{
      $('.pageup').fadeOut();
    }
  });

  $("a[href=#up]").click(function(){
    const _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
    return false;
  });

  new WOW().init();
});
