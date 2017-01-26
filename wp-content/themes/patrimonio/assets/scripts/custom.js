
jQuery(function($){ 
  $('.carousel-homi').owlCarousel({
    loop:true,
    margin: 0,
    // nav: true,
    dots: true,    //Basic Speeds
    slideSpeed : 1200,
    paginationSpeed : 1200,
    rewindSpeed : 1000,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
	});
  $('.carousel-interno').owlCarousel({
    loop:true,
    margin: 0,
    // nav: true,
    dots: true,    //Basic Speeds
    slideSpeed : 1200,
    paginationSpeed : 1200,
    rewindSpeed : 1000,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  });
  $('.navbar-nav li').on('hover', function(e) {
    e.stopPropagation();
    $(this).find('.sub-menu').stop(true, true).fadeIn(200);
  });
  $('.navbar-nav li').on('mouseleave', function(e) {
    e.stopPropagation();
    $(this).find('.sub-menu').stop(true, true).hide();
  });
  $(window).scroll(function() {
    if ($(window).scrollTop() > 1) {
      $(".header-patrimonio").addClass("fixed-headerson");
      $('.navbar.header-top').addClass('sutil-top');
      $('.owl-carousel').css({'margin-top':'75px'});
      $('.lupita-zone').addClass('hiddenson');
    }else{
      $(".header-patrimonio").removeClass("fixed-headerson");
      $('.navbar.header-top').removeClass('sutil-top');
      $('.owl-carousel').css({'margin-top':'0'});
      $('.lupita-zone').removeClass('hiddenson');
    }
    // sidebar
    if ($(window).scrollTop() > 1) {
      $('.fixed-sidebar .sidebar-menute').fadeOut();
    }else{
      $('.fixed-sidebar .sidebar-menute').fadeIn();
    }
  });
  $('.lupita-zone, .lupita, .lupita-error').on('click', function(){
    $('.search-form').fadeIn(300);
    $('input#s').focus();
    $(document).keyup(function(event){
      if(event.which==27){
        $('.search-form').fadeOut(100,function(){
          $('input#s').val('');
        });
      }
    });
  });
  $('.closearch').on('click', function() {
    $('.search-form').fadeOut(100,function(){
      $('input#s').val('');
    });
  });
  $('.the-box').on('hover', function(e) {
    e.stopPropagation();
    $(this).find('.flow-image img').stop(true, true).toggleClass('grayscale');
  });
  $('.personajes .img-directorio').on('hover', function(e) {
    e.stopPropagation();
    $(this).find('.img-responsive').stop(true, true).toggleClass('grayscale');
  });
  // if por el buscador
  if (window.location.href.indexOf("?s=") > -1) {
    jQuery("#searchform").find('input[name="s"]').val(decodeURIComponent(window.location.search.replace("?s=", "")));
  };
});
function equalHeight(group) {
  var tallest = 0;
  group.each(function() {
    thisHeight = jQuery(this).height();
    if(thisHeight > tallest) {
      tallest = (thisHeight+0)+'px';
      //console.log(tallest);
    }
  });;
  group.css('height', tallest);
}
jQuery(window).load(function($) {
    equalHeight(jQuery(".the-box"));
    equalHeight(jQuery(".flow-image"));
    equalHeight(jQuery(".img-directorio"));
    //seteo después de cargar la wea
    jQuery(window).scroll(function($) {
        equalHeight(jQuery(".the-box"));
        equalHeight(jQuery(".flow-image"));
    });
});