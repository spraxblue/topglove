AOS.init();

// Toggle Horizontal Collapse

$(".collapsible-div").click(function () {
  // remove classes from all
  $(".collapsible-div").removeClass("active");
  // add class to the one we clicked
  $(this).addClass("active");
});

// Checkbox
$(":checkbox[name=select-all]").click(function () {
  $(":checkbox[name=checklist-item]").prop("checked", this.checked);
});

$(":checkbox[name=all-year]").click(function () {
  $(":checkbox[name=all-year-item]").prop("checked", this.checked);
});

// CheckBox

// Toggle Horizontal Collapse

// Menu Toggle
$(document).ready(function () {
  $(".nav-button").click(function () {
    $("body").toggleClass("nav-open");
  });
});
// Menu Toggle
$(document).ready(function () {
  $(".list-image_holder").click(function () {
    $(this).parent().children("div").removeClass("d-none").addClass("d-flex");
  });

  $(".award-listing_collapse>span").click(function () {
    $(this).parent().removeClass("d-flex").addClass("d-none");
  });

  //about-us-overview video toggle//

  $(".corporate-video-click2").click(function () {
    $(this).addClass("click-margin");
    $(".corporate-video-click1").addClass("collapse-margin");
  });

  $(".corporate-video-click1").click(function () {
    $(this).removeClass("collapse-margin");
    $(".corporate-video-click2").removeClass("click-margin");
  });
});

// Custom Dropdown Function
$(".dropdown-menu li").click(function () {
  // Getting ID of dropdown
  var btn = $(this).parent().attr("aria-labelledby");
  // Image Source of dropdown Content
  var imgSrc = $(this).children("img").attr("src");
  // Replacing value
  $(`#${btn}`).children("span").text($(this).text());
  $(`#${btn}`).children("img").attr("src", imgSrc);
});

// End of Custom Dropdown

// Landing Page Carousel

$(function () {
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    stagePadding: 0,
    loop: false,
    margin: 10,
    items: 1,
    lazyLoad: false,
    nav: true,
    onInitialized: counter, //When the plugin has initialized.
    onTranslated: counter, //When the translation of the stage has finished.
    navText: [
      "<i class='fas fa-arrow-left'></i>",
      "<i class='fas fa-arrow-right'></i>",
    ],
    responsive: {
      0: {},
      600: {
        items: 1,
        stagePadding: 0,
      },
      1000: {},
      1200: {},
      1400: {},
      1600: {},
      1800: {},
    },
  });

  var owl = $(".general-meeting-sliders");
  owl.owlCarousel({
    loop: false,
    margin: 0,
    items: 1,
    lazyLoad: false,
    nav: true,    
    navText: [
      '<img src="../../images/it-event-slider-arrow-left.png">',
      '<img src="../../images/it-event-slider-arrow-right.png">',
    ],
    responsive: {
      0: {},
      600: {
        items: 1,
      },
      1000: {},
      1200: {},
      1400: {},
      1600: {},
      1800: {},
    },
  });

  var newsowl = $("#owl-newsSlider");
  newsowl.owlCarousel({
    nav: false, // Show next and prev buttons
    // slideSpeed: 200,
    // lazyLoad: true,
    margin: -10,
    items: 2,
    // paginationSpeed: 400,
    responsive: {
      0: {},
      600: {
        items: 2,
        stagePadding: 0,
      },
      1000: {},
      1200: {},
      1400: {},
      1600: {},
      1800: {},
    },

    // "singleItem:true" is a shortcut for:
    // items : 1, 
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false

});
if ($('#owl-newsSlider.owl-carousel').length === 1) {
  //There is one image
  $('#owl-newsSlider .owl-nav').hide();
}
$(document).ready(function(){
});
const eventsele = document.getElementById('events-overflow');
  eventsele.style.cursor = 'grab';

let pos = { top: 0, left: 0, x: 0, y: 0 };

const mouseDownHandler = function(e) {
    eventsele.style.cursor = 'grabbing';
    eventsele.style.userSelect = 'none';

    pos = {
        left: eventsele.scrollLeft,
        top: eventsele.scrollTop,
        // Get the current mouse position
        x: e.clientX,
        y: e.clientY,
    };

    document.addEventListener('mousemove', mouseMoveHandler);
    document.addEventListener('mouseup', mouseUpHandler);
};

const mouseMoveHandler = function(e) {
    // How far the mouse has been moved
    const dx = e.clientX - pos.x;
    const dy = e.clientY - pos.y;

    // Scroll the element
    eventsele.scrollTop = pos.top - dy;
    eventsele.scrollLeft = pos.left - dx;
};

const mouseUpHandler = function() {
    eventsele.style.cursor = 'grab';
    eventsele.style.removeProperty('user-select');

    document.removeEventListener('mousemove', mouseMoveHandler);
    document.removeEventListener('mouseup', mouseUpHandler);
};

// Attach the handler
eventsele.addEventListener('mousedown', mouseDownHandler);

// Custom Navigation Events
$(document).on('click','.custom-indicators .next',function() {
  console.log(newsowl)
  newsowl.trigger('prev.owl.carousel');
  $(this).toggleClass('active');
  $('.custom-indicators .prev').toggleClass('active');
  })
  $(".custom-indicators .prev").click(function() {
    newsowl.trigger('next.owl.carousel');
    $(this).toggleClass('active');
    $('.custom-indicators .next').toggleClass('active');
  })
  // Slider Counter Function

  function counter(event) {
    var element = event.target; // DOM element, in this example .owl-carousel
    var items = event.item.count; // Number of items
    var item = event.item.index + 1; // Position of the current item

    // it loop is true then reset counter from 1
    if (item > items) {
      item = item - items;
    }
    $("#slide-counter").html(item + " / " + items);
  }
});

$(document).ready(function () {
  var videoCount = $("#slider video");
  for (i = 0; i < videoCount.length; i++) {
    videoCount[i].pause();
  }
  videoCount[0].play();
});

$("#slider").on("slide.bs.carousel", function (e) {
  var videoId = e.relatedTarget.children[0].children[0].id;
  var vid = document.getElementById(videoId);

  vid.play();
});
// Slider Counter Function

// Carousel

// carousel

// AWARDS AND MILESTONE

$(document).ready(function () {
  $("button.class-milestone").click(function () {
    $(".mix-list .icon-left").addClass("hidden");
  });

  $("button.class-award").click(function () {
    $(".mix-list .icon-left").addClass("hidden");
  });

  $("button.class-iso").click(function () {
    $(".mix-list .icon-left").addClass("hidden");
  });

  $("button.class-all").click(function () {
    $(".mix-list .icon-left").removeClass("hidden");
  });

  $(".small-device-nav a.nav-button,.nav-button.ml-2").click(function () {
    $("html").toggleClass("overlay-overflow_smallDevice");
  });
});

// Side Menu Active
$(document).ready(function () {
  $(document).on("scroll", onScroll);
});

function onScroll(event) {
  var scrollPosNoHead = $(document).scrollTop();
  var scrollPos = scrollPosNoHead + 500;

  $("#side-menu a").each(function () {
    var currLink = $(this);
    var refElement = $(currLink.attr("href"));

    if (refElement.length) {
      var contentNav = refElement.position().top;

      if (contentNav <= scrollPos) {
        currLink.addClass("active");
      } else {
        currLink.removeClass("active");
      }
    }
  });
}

// Side Menu Active

function toggleIcon(val) {
  $(val).children("i").toggleClass("fa-plus fa-minus");
}

$(document).ready(function () {
  // Add minus icon for collapse element which is open by default
  // $(".collapse.show").each(function(){
  //   $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
  // });
  // $('.accordion .btn').click(function(){
  //   $( this )
  //   .children( "i" )
  //   .toggleClass( "fa-plus fa-minus" );
  // });
  // Toggle plus minus icon on show hide of collapse element
  // $(".collapse").on('show.bs.collapse', function(){
  //   $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
  // }).on('hide.bs.collapse', function(){
  //   $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
  // });

  $(".collapsable-parent1").click(function () {
    $(this).addClass("bg-blue");
    // $(this).css({"background": "#162E77","color": "#FFFF"})
    $(".collapsable-child1").addClass("d-block show");
    $(".collapsable-child2,.collapsable-child3").removeClass("d-block");
    $(".collapsable-parent2,.collapsable-parent3").removeClass("bg-blue");
  });
  $(".collapsable-parent2").click(function () {
    $(this).addClass("bg-blue");
    $(".collapsable-child2").addClass("d-block show");
    $(".collapsable-child1,.collapsable-child3").removeClass("d-block");
    $(".collapsable-parent1,.collapsable-parent3").removeClass("bg-blue");
    $(".collapsable-child1").addClass("d-none");
  });
  $(".collapsable-parent3").click(function () {
    $(this).addClass("bg-blue");
    $(".collapsable-child3").addClass("d-block show");
    $(".collapsable-child1,.collapsable-child2").removeClass("d-block");
    $(".collapsable-parent1,.collapsable-parent2").removeClass("bg-blue");
    $(".collapsable-child1").addClass("d-none");
  });

  $(".facility-collapse_parent1").click(function () {
    $(".facility-collapse_child1").removeClass("d-none");
    $(".facility-collapse_parent1").children("p").addClass("tggg-blue_heading");
    $(".facility-collapse_parent2")
      .children("p")
      .removeClass("tggg-white_heading");
    $(".facility-collapse_child2").removeClass("d-block");
    $("#other-facilities")
      .addClass("facilities-bg")
      .removeClass("facilities-bg2");

    $("#other-facilities>h2").css("color", "#162E77");
  });

  $(".facility-collapse_parent2").click(function () {
    $(".facility-collapse_child2").addClass("d-block");
    $(".facility-collapse_parent2")
      .children("p")
      .addClass("tggg-white_heading");
    $(".facility-collapse_child1").addClass("d-none");
    $(".facility-collapse_parent1")
      .children("p")
      .removeClass("tggg-blue_heading");
    $("#other-facilities")
      .removeClass("facilities-bg")
      .addClass("facilities-bg2");
    $("#other-facilities>h2").css("color", "#FFFF");
  });
});
// Menu Dropdown
function openNav(ele) {
  var id = ele.children[1].id;
  document.getElementById(id).style.maxHeight = "1000px";
  document.getElementById(id).style.opacity = 1;
}

function closeNav(ele) {
  var id = ele.children[1].id;
  document.getElementById(id).style.maxHeight = "0";
  document.getElementById(id).style.opacity = 0;
}

// Menu Dropdown

$(document).ready(function () {
  var loadedCounter;

  function handler(entries, observer) {
    for (entry of entries) {
      if (entry.isIntersecting) {
        function animateValue(obj, start, end, duration) {
          let startTimestamp = null;
          const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min(
              (timestamp - startTimestamp) / duration,
              1
            );
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
              window.requestAnimationFrame(step);
            }
          };
          window.requestAnimationFrame(step);
        }

        const obj = document.getElementsByClassName("count-blue");
        // const value = obj.innerText.replace(',','');

        if (!loadedCounter) {
          loadedCounter = true;
          for (var i = 0; i < obj.length; i++) {
            // do the stuff
            animateValue(obj[i], 0, obj[i].innerHTML, 3000);
            // animateValue(obj[i], 0, obj[i].getAttribute("value"), 3000);
          }
        }
      }
    }
  }

  /* By default, invokes the handler whenever:
    1. Any part of the target enters the viewport
    2. The last part of the target leaves the viewport */

  let observer = new IntersectionObserver(handler);
  observer.observe(document.getElementsByClassName("count-blue")[0]);
});

// custom scroller code here //

var $container = $(".desktop-drag1");
var $scroller = $(".service-overflow.scroller");

bindDragScroll($container, $scroller);

var $container = $(".desktop-drag2");
var $scroller = $(".gym-images_wrapper");

bindDragScroll($container, $scroller);

var $container1 = $(".zumba-icon");
var $scroller1 = $(".gym-facilities_icons");

bindDragScroll($container1, $scroller1);

// career opportunity
var closeBtn = document.getElementsByClassName("closebtn");

function secondFunc(over) {
  over.parentElement.classList.remove("active");
  over.parentElement.classList.remove("show");
  let ids = over.parentElement.getAttribute("aria-labelledby");
  let removeOver = document.getElementById(ids);
  removeOver.classList.remove("active");
}

function myFunction(imgs) {
  let tabTermContent = document.getElementsByClassName("tab-term-content");

  for (var i = 0; i < tabTermContent.length; i++) {
    let toShow2 = imgs.getAttribute("href");
    let toShowContent1 = document.querySelector(toShow2);
    let toShowContentParent = toShowContent1.parentElement;
    tabTermContent[i].classList.add("tab-hide");
    toShowContentParent.classList.remove("tab-hide");
  }
  let navLinks = document.getElementsByClassName("nav-link-job");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].classList.remove("active");
  }
  let tabJobPane = document.getElementsByClassName("tab-job-pane");
  for (var i = 0; i < tabJobPane.length; i++) {
    tabJobPane[i].classList.remove("active");
    tabJobPane[i].classList.remove("show");
  }
}

// Iframe

function resizeIframe(obj) {
  obj.style.height =
    obj.contentWindow.document.documentElement.scrollHeight + "px";
}

// iframe
