$(function () {
  $(document).ready(function () {
    
  //EFEITO MENU
  // var _rys = jQuery.noConflict();
  $('document').ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 140) {
        $('.settings .header__middle').addClass('mostrar');
      } else {
        $('.settings .header__middle').removeClass('mostrar');
      }
    });
  });
    
    
  $("li[data-value=price] a").html("Preço: menor para maior"); 
  $("li[data-value=price-desc] a").html("Preço: maior para menor");
  $("a.apply-filters.button.alt").html("Salvar");

  $(".menu_mobile .itemMenu").click(function () {
    $(".takeSubmenuMobile").toggle();
  });
    
    $('.bannerHome').slick({
    lazyLoad: 'progressive',
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    prevArrow: '<div class="arrowPrev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(6 -2985)"><g transform="matrix(1, 0, 0, 1, -6, 2985)" filter="url(#a)"><rect width="66" height="68" transform="translate(6 6)" fill="#fff"/></g><path d="M0,23.355a5.049,5.049,0,0,0,1.429,3.5,4.966,4.966,0,0,0,7,0L23.4,11.924,38.383,26.9a4.947,4.947,0,1,0,7-7L26.9,1.429A4.877,4.877,0,0,0,23.4,0a5.09,5.09,0,0,0-3.5,1.429L1.429,19.856A5.137,5.137,0,0,0,0,23.355Z" transform="translate(19 3048.821) rotate(-90)" fill="#151c29"/></g></svg></div>',
    nextArrow: '<div class="arrowNext"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="-3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(-1842 -2994)"><g transform="matrix(1, 0, 0, 1, 1842, 2994)" filter="url(#a)"><rect width="66" height="68" transform="translate(12 6)" fill="#fff"/></g><path d="M84,123.567a5.049,5.049,0,0,1,1.429-3.5,4.966,4.966,0,0,1,7,0L107.4,135l14.979-14.979a4.947,4.947,0,1,1,7,7L110.9,145.493a4.877,4.877,0,0,1-3.5,1.429,5.09,5.09,0,0,1-3.5-1.429L85.425,127.065a5.137,5.137,0,0,1-1.429-3.5Z" transform="translate(1754.422 3141.817) rotate(-90)" fill="#151c29"/></g></svg></div>',
    infinite: true,
    fade: true,
    speed: 1200,
    autoplay: true,
    autoplaySpeed: 8000,
    cssEase: 'linear',
    draggable: 'false',
    touchMove: 'false',
  });

  
  $('.slider_categories').slick({
    slidesToShow: 12,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    prevArrow: '<div class="arrowPrev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(6 -2985)"><g transform="matrix(1, 0, 0, 1, -6, 2985)" filter="url(#a)"><rect width="66" height="68" transform="translate(6 6)" fill="#fff"/></g><path d="M0,23.355a5.049,5.049,0,0,0,1.429,3.5,4.966,4.966,0,0,0,7,0L23.4,11.924,38.383,26.9a4.947,4.947,0,1,0,7-7L26.9,1.429A4.877,4.877,0,0,0,23.4,0a5.09,5.09,0,0,0-3.5,1.429L1.429,19.856A5.137,5.137,0,0,0,0,23.355Z" transform="translate(19 3048.821) rotate(-90)" fill="#151c29"/></g></svg></div>',
    nextArrow: '<div class="arrowNext"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="-3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(-1842 -2994)"><g transform="matrix(1, 0, 0, 1, 1842, 2994)" filter="url(#a)"><rect width="66" height="68" transform="translate(12 6)" fill="#fff"/></g><path d="M84,123.567a5.049,5.049,0,0,1,1.429-3.5,4.966,4.966,0,0,1,7,0L107.4,135l14.979-14.979a4.947,4.947,0,1,1,7,7L110.9,145.493a4.877,4.877,0,0,1-3.5,1.429,5.09,5.09,0,0,1-3.5-1.429L85.425,127.065a5.137,5.137,0,0,1-1.429-3.5Z" transform="translate(1754.422 3141.817) rotate(-90)" fill="#151c29"/></g></svg></div>',
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 4800,
    cssEase: 'linear',
    pauseOnHover: true,
    pauseOnFocus: false,
    draggable: true,
    responsive: [
      {
        breakpoint: 1600,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 8
        }
      },
      {
        breakpoint: 992,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 5
        }
      },
      {
        breakpoint: 769,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 4
        }
      },
      {
        breakpoint: 700,
        settings: {
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 2
        }
      }
    ]
  });

  
    $('.slider_our_clients').slick({
    lazyLoad: 'progressive',
    slidesToShow: 6,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    autoplaySpeed: 2500,
    cssEase: 'linear',
    pauseOnHover: true,
    pauseOnFocus: true,
    draggable: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 5
        }
      },
      {
        breakpoint: 769,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 4
        }
      },
      {
        breakpoint: 700,
        settings: {
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 350,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 1
        }
      }
    ]
  });

  
    $('.slider_products').slick({
    lazyLoad: 'progressive',
    slidesToShow: 6,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    prevArrow: '<div class="arrowPrev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(6 -2985)"><g transform="matrix(1, 0, 0, 1, -6, 2985)" filter="url(#a)"><rect width="66" height="68" transform="translate(6 6)" fill="#fff"/></g><path d="M0,23.355a5.049,5.049,0,0,0,1.429,3.5,4.966,4.966,0,0,0,7,0L23.4,11.924,38.383,26.9a4.947,4.947,0,1,0,7-7L26.9,1.429A4.877,4.877,0,0,0,23.4,0a5.09,5.09,0,0,0-3.5,1.429L1.429,19.856A5.137,5.137,0,0,0,0,23.355Z" transform="translate(19 3048.821) rotate(-90)" fill="#151c29"/></g></svg></div>',
    nextArrow: '<div class="arrowNext"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="-3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(-1842 -2994)"><g transform="matrix(1, 0, 0, 1, 1842, 2994)" filter="url(#a)"><rect width="66" height="68" transform="translate(12 6)" fill="#fff"/></g><path d="M84,123.567a5.049,5.049,0,0,1,1.429-3.5,4.966,4.966,0,0,1,7,0L107.4,135l14.979-14.979a4.947,4.947,0,1,1,7,7L110.9,145.493a4.877,4.877,0,0,1-3.5,1.429,5.09,5.09,0,0,1-3.5-1.429L85.425,127.065a5.137,5.137,0,0,1-1.429-3.5Z" transform="translate(1754.422 3141.817) rotate(-90)" fill="#151c29"/></g></svg></div>',
    cssEase: 'linear',
    pauseOnFocus: false,
    draggable: false,
    responsive: [
      {
        breakpoint: 1600,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 4
        }
      },
      {
        breakpoint: 992,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 700,
        settings: {
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {          
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 390,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 1
        }
      }
    ]
  });

    

    $('.slider-for').slick({
    lazyLoad: 'progressive',
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    fade: true,
    arrows: true,
    prevArrow: '<div class="arrowPrev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(6 -2985)"><g transform="matrix(1, 0, 0, 1, -6, 2985)" filter="url(#a)"><rect width="66" height="68" transform="translate(6 6)" fill="#fff"/></g><path d="M0,23.355a5.049,5.049,0,0,0,1.429,3.5,4.966,4.966,0,0,0,7,0L23.4,11.924,38.383,26.9a4.947,4.947,0,1,0,7-7L26.9,1.429A4.877,4.877,0,0,0,23.4,0a5.09,5.09,0,0,0-3.5,1.429L1.429,19.856A5.137,5.137,0,0,0,0,23.355Z" transform="translate(19 3048.821) rotate(-90)" fill="#151c29"/></g></svg></div>',
    nextArrow: '<div class="arrowNext"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="-3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(-1842 -2994)"><g transform="matrix(1, 0, 0, 1, 1842, 2994)" filter="url(#a)"><rect width="66" height="68" transform="translate(12 6)" fill="#fff"/></g><path d="M84,123.567a5.049,5.049,0,0,1,1.429-3.5,4.966,4.966,0,0,1,7,0L107.4,135l14.979-14.979a4.947,4.947,0,1,1,7,7L110.9,145.493a4.877,4.877,0,0,1-3.5,1.429,5.09,5.09,0,0,1-3.5-1.429L85.425,127.065a5.137,5.137,0,0,1-1.429-3.5Z" transform="translate(1754.422 3141.817) rotate(-90)" fill="#151c29"/></g></svg></div>',
    asNavFor: '.slider-nav, .slider-colors'
  });
    
    $('.slider-colors').slick({
     lazyLoad: 'progressive',
     arrows: true,
     infinite: true,
      slidesToShow: 5,
      prevArrow: '<div class="arrowPrev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(6 -2985)"><g transform="matrix(1, 0, 0, 1, -6, 2985)" filter="url(#a)"><rect width="66" height="68" transform="translate(6 6)" fill="#fff"/></g><path d="M0,23.355a5.049,5.049,0,0,0,1.429,3.5,4.966,4.966,0,0,0,7,0L23.4,11.924,38.383,26.9a4.947,4.947,0,1,0,7-7L26.9,1.429A4.877,4.877,0,0,0,23.4,0a5.09,5.09,0,0,0-3.5,1.429L1.429,19.856A5.137,5.137,0,0,0,0,23.355Z" transform="translate(19 3048.821) rotate(-90)" fill="#151c29"/></g></svg></div>',
      nextArrow: '<div class="arrowNext"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="86" viewBox="0 0 84 86"><defs><filter id="a" x="0" y="0" width="84" height="86" filterUnits="userSpaceOnUse"><feOffset dx="-3" dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="b"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(-1842 -2994)"><g transform="matrix(1, 0, 0, 1, 1842, 2994)" filter="url(#a)"><rect width="66" height="68" transform="translate(12 6)" fill="#fff"/></g><path d="M84,123.567a5.049,5.049,0,0,1,1.429-3.5,4.966,4.966,0,0,1,7,0L107.4,135l14.979-14.979a4.947,4.947,0,1,1,7,7L110.9,145.493a4.877,4.877,0,0,1-3.5,1.429,5.09,5.09,0,0,1-3.5-1.429L85.425,127.065a5.137,5.137,0,0,1-1.429-3.5Z" transform="translate(1754.422 3141.817) rotate(-90)" fill="#151c29"/></g></svg></div>',
     centerMode: false,
    focusOnSelect: true,
    asNavFor: '.slider-for, .slider-nav ',
    });
    

    $('.slider-nav').slick({
    lazyLoad: 'progressive',
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow: '<div class="arrowPrev"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg></div>',
    nextArrow: '<div class="arrowNext"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg></div>',
    asNavFor: '.slider-for, .slider-colors',
    centerMode: false,
    // centerPadding: '60px',
    dots: false,
    arrow: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 5
        }
      },
      {
        breakpoint: 992, 
        settings: {
          centerMode: false,
          centerPadding: '0px',
          slidesToShow: 4,
          arrows: false,
          vertical: false,
        }
      },
    ]
  });

    $(".top_single_product .quantity label").html("Quantidade");
    
    $(".comments .stars span a").html('<div class="star"><svg height="511pt" viewBox="0 -10 511.98685 511" width="511pt" xmlns="http://www.w3.org/2000/svg"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"/></svg></div>');

    $(".comment-form-rating .stars").css("display", "none")
    // $(".comments .stars span a").mouseenter(function () {
    //   var classeStar = $(this).attr('class');
    //   if (classeStar === 'star-1') {
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //   } else if (classeStar === 'star-2') {
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //     $(".star-2 .star svg path").css('fill','#ffb244')
    //   } else if (classeStar === 'star-3') {
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //     $(".star-2 .star svg path").css('fill', '#ffb244')
    //     $(".star-3 .star svg path").css('fill','#ffb244')
    //   } else if (classeStar === 'star-4') {
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //     $(".star-2 .star svg path").css('fill', '#ffb244')
    //     $(".star-3 .star svg path").css('fill', '#ffb244')
    //     $(".star-4 .star svg path").css('fill', '#ffb244')
        
    //   } else if (classeStar === 'star-5') {
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //     $(".star-2 .star svg path").css('fill', '#ffb244')
    //     $(".star-3 .star svg path").css('fill','#ffb244')
    //     $(".star-4 .star svg path").css('fill', '#ffb244')
    //     $(".star-5 .star svg path").css('fill','#ffb244')
    //   }
     
    // });
    $('#rating').css('display','block');
    // $('.comments .stars span a').mouseleave(function () {
    //   $("a .star svg path").css('fill', '#898989')
    // // })
    // var classeStar = $(".comments .stars span a").attr('class');

    // $("." + classeStar).click(function () {
      
    //   if (classeStar === 'star-1') {
    //     console.log(variable.length)
    //   } else if (classeStar === 'star-2') {
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //     $(".star-2 .star svg path").css('fill', '#ffb244')
    //     console.log(variable.length)
    //   } else if (classeStar === 'star-3') {
    //     console.log(variable.length)
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //     $(".star-2 .star svg path").css('fill', '#ffb244')
    //     $(".star-3 .star svg path").css('fill','#ffb244')
    //   } else if (classeStar === 'star-4') {
    //     console.log(variable.length)
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //     $(".star-2 .star svg path").css('fill', '#ffb244')
    //     $(".star-3 .star svg path").css('fill', '#ffb244')
    //     $(".star-4 .star svg path").css('fill', '#ffb244')
        
    //   } else if (classeStar === 'star-5') {
    //     console.log(variable.length)
    //     $(".star-1 .star svg path").css('fill', '#ffb244')
    //     $(".star-2 .star svg path").css('fill', '#ffb244')
    //     $(".star-3 .star svg path").css('fill','#ffb244')
    //     $(".star-4 .star svg path").css('fill', '#ffb244')
    //     $(".star-5 .star svg path").css('fill','#ffb244')
    //   }
    // });

    $(".single_add_to_cart_button ").html("Adicionar no carrinho");


    $('.zoomImage').each(function (index, el) {
      $(el).zoom({
        url: $(el).data('zoom'),
      });
    });


 // ALGOLIA SEARCH AUTOCOMPLETE
  // $('#search-input').on('focus', function() {
  //   $('.nav-search').addClass('active');
  //   $('.search-icon').css('display', 'none')
  // })

  $('#search-input').on('keyup', function() {
    $('#hits-container').scrollTop(0);
    $('.nav-search').addClass('active');
    $('.search-icon').css('display', 'none')
  })

  $('.close-search').on('click', function(evt) {
    evt.preventDefault();
    $('#search-input').val('');
    $('.search-icon').css('display','inline-block')
     $('.nav-search').removeClass('active');
   })

 $('#search-input').on('blur', function(evt) {
   if(!evt.isDefaultPrevented) {
     console.log("blur");
    $('.nav-search').removeClass('active');
   }
  })

  let search = instantsearch({
    appId: 'YT26PF0EK0',
    apiKey: '5a50123da1cbf6797a3db1ec970b6cf6',
    indexName: 'wp_posts_product',
    searchParameters: {replaceSynonymsInHighlight: false},
    searchFunction: function(helper) {
       var searchResults = $('.search-results');
       if (helper.state.query === '') {
         searchResults.hide();
         return;
       }
       helper.search();
       searchResults.show();
     }
  });

      // add a searchBox widget
  search.addWidget(
    instantsearch.widgets.searchBox({
      container: '#search-input',
      placeholder: 'Procure seu produto...'
    })
  );

  // add a hits widget
  search.addWidget(
    instantsearch.widgets.hits({
      container: '#hits-container',
      hitsPerPage: 10,
      debug: true,
      templates: {
        item: '<a href="{{permalink}}"><div class="hit col-12"><div class="hit-content"><img src="{{images.thumbnail.url}}"><h2 class="hit-title">{{{post_title}}}</h2></div></a>',
        empty: '<div id="no-results-message"> <p>Não encontramos nenhum produto parecido com: <em>"{{query}}" :(</em></p></div>'
      }
    })
  );

  // start
    search.start();
    function toTitleCase(str) {
      return str.replace(/(?:^|\s)\w/g, function(match) {
          return match.toUpperCase();
      });
    }
  });

  
  // $(".qty").val("10");
  // $("input[name=quantidade_2]").attr('type', 'number').val("10");
  // $("input[name=quantidade_3]").attr('type', 'number').val("10");

  
  // $(".qty").on('change', function () {
  //   if ($(this).val() <= 9) {
  //     $("#result_mensagem_add").html('<span class="material-icons">report_problem</span>Quantidade mínima permitida é de 10 unidades!').css("display", "block");
  //     setTimeout(() => { 
  //       $("#result_mensagem_add").slideUp("slow",function (){
  //       $("#result_mensagem_add").css("display", "none").fadeOut('slow');
  //         $("input[name=quantity]").val("10").delay(2000);
  //       })
  //     }, 4000);
  //   } else {

  //   }     
  // });


  
  // $(".qty").on('change', function () {
  //   if ($(this).val() <= 9) {
  //     $("#result_mensagem_add").html('<span class="material-icons">report_problem</span>Quantidade mínima permitida é de 10 unidades!').css("display", "block");
  //     setTimeout(() => { 
  //       $("#result_mensagem_add").slideUp("slow",function (){
  //       $("#result_mensagem_add").css("display", "none").fadeOut('slow');
  //         $("input[name=quantity]").val("10");
  //       })
  //     }, 4000);
  //   } else {

  //   }     
  // });  


  // $("input[name=quantidade_2]").on("change",function () {
  //   if ($(this).val() <= 9) {
  //     $("#result_mensagem_add_carrinho_1").html('<span class="material-icons">report_problem</span>Quantidade mínima permitida é de 10 unidades!').css("display", "block");
      
  //     setTimeout(() => { 
  //       $("#result_mensagem_add_carrinho_1").slideUp("slow",function (){
  //       $("#result_mensagem_add_carrinho_1").css("display", "none").fadeOut('slow');
  //       $("input[name=quantidade_2]").val("10");
  //       })
  //     }, 4000);
  //   } else {
      
  //   }     
  // });  
  // $("input[name=quantidade_3]").on("change",function () {
  //   if ($(this).val() <= 9) {
  //     $("#result_mensagem_add_carrinho_3").html('<span class="material-icons">report_problem</span>Quantidade mínima permitida é de 10 unidades!').css("display", "block");
  //     setTimeout(() => { 
  //       $("#result_mensagem_add_carrinho_3").slideUp("slow",function (){
  //       $("#result_mensagem_add_carrinho_3").css("display", "none").fadeOut('slow');
  //         $("input[name=quantidade_3]").val("10");
  //       })
  //     }, 4000);
  //   } else {

  //   }     
  // });  

  $(".product-name span").html("Produto");
  $(".wishlist .wishlist_table .product-add-to-cart a.button").html("Remover");
  $(".woocommerce-MyAccount-navigation-link--quotes a").html("Minha Lista");
  $(".ywraq_my_account_quotes_title").html("Minha Lista");
  $(".ywraq-no-quote-in-list").html("Não há nenhum produto na sua lista");
  $(".yith-wcan-active-filters h4").html("Filtros ativos");
  $('select option[value="menu_order"]').html("Padrão");
  $('select option[value="popularity"]').html("Por popularidade");
  $('select option[value="rating"]').html("Por classificação média");
  $('select option[value="date"]').html("Mais recente");


  $(".btn_finalizar_orcamento_ button").click(function () {
    $(".yith-ywraq-mail-form-wrapper").addClass("active_formulario_orcamento");
    $(this).css("display", "none"); 
  });

  const items = document.querySelectorAll('.submenu .item button');

  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
    }
  }

  items.forEach((item) => item.addEventListener('click', toggleAccordion));

  
  const itemMobile = document.querySelectorAll('.menu_mobile .submenuMobile .item button');

  function toggleAccordionMobile() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
      itemMobile[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
    }
  }

  itemMobile.forEach((itemMobile) => itemMobile.addEventListener('click', toggleAccordionMobile));

  $(".dropDownMoreInfos .title").click(function () {
    $(".contentSingleProduct").toggle();
  });

    // ANIMATION ELEMENT
    var $animation_elements = $('.animation-element');
    var $window = $(window);
  
    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = window_top_position + window_height;
  
      $.each($animation_elements, function () {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = element_top_position + element_height;
  
        //check to see if this current container is within viewport
        if (
          element_bottom_position >= window_top_position &&
          element_top_position <= window_bottom_position
        ) {
          $element.addClass('in-view');
        } else {
          $element.removeClass('in-view');
        }
      });
    }
  
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll', check_if_in_view);
});
