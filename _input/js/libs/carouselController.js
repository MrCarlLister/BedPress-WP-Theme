new Glider(document.querySelector('.carousel'), {
 
    slidesToShow: 1.5,
    slidesToScroll: 1,
    dots: '.dots',
    arrows: {
        prev: '.carousel-prev',
        // may also pass element directly
        next: '.carousel-next'
      },

    // Glider.js breakpoints are mobile-first
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 2.5,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1.5,
          slidesToScroll: 1
        }
      }
    ]
  });