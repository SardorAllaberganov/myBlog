$(document).ready(function() {
  $("#owl-demo").owlCarousel({
    navigation : true, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    items : 1, 
    itemsDesktop : false,
    itemsDesktopSmall : false,
    itemsTablet: false,
    itemsMobile : false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    loop:true
  });
});

$(document).ready(function() {
  $(".navbar-brand").click(function() {
    let target = $(this).attr("href");
    $('html,body').stop().animate({
      scrollTop: $(target).offset().top
    }, 1000);
    event.preventDefault();
  });
});

$(document).ready(function () {
  $(document).on("scroll", onScroll);
  //smoothscroll
  $('.nav>li>a[href^="#"]').on('click', function (e) {
    $(document).off("scroll");
    $('a').each(function () {
      $(this).removeClass('active1').addClass("no-before");
    })
    $(this).addClass('active1');
    
    var target = this.hash,
    menu = target;
    $target = $(target);
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top+5
    }, 500, 'swing', function () {
      window.location.hash = target;
      $(document).on("scroll", onScroll);
    });
  });
});

function onScroll(event){
  var scrollPos = $(document).scrollTop();
  $('.nav>li>a').each(function () {
    var currLink = $(this);
    var refElement = $(currLink.attr("href"));
    $('.navbar-brand').removeClass('active1').addClass("no-before");
    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
      $('.nav > li > a, navbar-brand').removeClass('active1').addClass("no-before");
      currLink.addClass("active1");
    }
    else{
      currLink.removeClass('active1').addClass("no-before");
    }
  });
}
$(document).ready(function(){
  $('.button-group button').click(function(){
    $('button').removeClass("active-portfolio");
    $(this).addClass("active-portfolio");
});
});
// $(document).on('click','.navbar-collapse.in', '.navbar-brand',function(e) {
//     if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
//         $(this).collapse('hide');
//     }
// });
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});

/* main page counter js */
$(document).ready(function() {
  $(window).scroll( function(){
    $('.counter').each(function() {
      var $this = $(this), countTo = $this.attr('data-count');
      var bottom_of_object = $(this).position().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
    if( bottom_of_window > bottom_of_object ){
      $({ countNum: $this.text()}).animate({countNum: countTo},
        {
          duration: 1500,
          easing:'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });
      }
    });
  });
});


window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
    fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));

