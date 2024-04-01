$(document).ready(function(){
    $('.slider').slick({
      slidesToShow: 3, // Show three slides per row
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: '<button type="button" class="slick-prev">Previous</button>',
      nextArrow: '<button type="button" class="slick-next">Next</button>',
      responsive: [
        {
          breakpoint: 992, // Change settings when screen width is less than 992px
          settings: {
            slidesToShow: 1 // Show one slide per row on smaller screens
          }
        }
      ]
    });
  });
    // JavaScript code to handle navbar scroll behavior
  // JavaScript code to handle navbar scroll behavior
