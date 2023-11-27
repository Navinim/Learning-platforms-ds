(function() {
	"use strict";


    // Navbar JS
    try {
        const nav = document.querySelector('.navbar');
        let navTop = nav.offsetTop;
        
        function fixedNav() {
        if (window.scrollY >= navTop) {
            nav.classList.add('sticky');
        } else {
            nav.classList.remove('sticky');
        }
        }
        window.addEventListener('scroll', fixedNav);
    } catch (err) {}

    // Header Sticky
    window.addEventListener('scroll', event => {
        const height = 150;
        const { scrollTop } = event.target.scrollingElement;
        document.querySelector('#navbar').classList.toggle('sticky', scrollTop >= height);
    });

    window.onload = function(){
        // Preloader
        const getPreloaderId = document.getElementById('preloader');
        if (getPreloaderId) {
            getPreloaderId.style.display = 'none';
        }
    };

    scrollCue.init();

    // Select the button element
    var scrollTopBtn = document.getElementById("scrollTopBtn");

    // Show the button when the user scrolls down
    window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }
    };
    
    // Add a click event listener to the button
    scrollTopBtn.addEventListener("click", function() {
        // Scroll to the top of the document
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        });
    });

 
   

    // var swiper = new Swiper(".consultant-slider", {
    //     effect: "coverflow",
    //     grabCursor: true,
    //     loop: true,
    //     centeredSlides: true,
    //     slidesPerView: "auto",
    //     coverflowEffect: {
    //       rotate: 20,
    //       stretch: -10,
    //       depth: -0,
    //       modifier: 1.5,
    //       slideShadows: false,
    //     },
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    //     scrollbar: {
    //         el: '.swiper-scrollbar',
    //     },
    //      breakpoints: {
    //         0: {
    //             slidesPerView: 1
    //         },
    //         576: {
    //             slidesPerView: 3
    //         },
    //         768: {
    //             slidesPerView: 3
    //         },
    //         992: {
    //             slidesPerView: 3
    //         },
    //         1200: {
    //             slidesPerView: 5
    //         }
    //     }
    // });

    var swiper = new Swiper(".partner-slider", {
        slidesPerView: 7,
        spaceBetween: 30,
        autoplay: true,
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            576: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 4
            },
            992: {
                slidesPerView: 5
            },
            1200: {
                slidesPerView: 7
            }
        }
    });

    var swiper = new Swiper(".together-slider", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        
    });


    var swiper = new Swiper(".team-slider", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            }
        }
    });

    var swiper = new Swiper(".recent-slider", {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 5
            }
        }
    });

    var swiper = new Swiper(".country-slider", {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: true,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 2,
                centeredSlides: false,
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 3
            }
        }
    });


    var swiper = new Swiper(".consultant-slider", {
        effect: "coverflow",
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 18,
          stretch: -10,
          depth: -1.5,
          modifier: 1.5,
          slideShadows: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
         breakpoints: {
            0: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 3
            }
        }
    });

    
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        // autoplay:true,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
    
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
      });
    
     // Show Modal
const openModalButton = document.getElementById("open-modal");
const modalWindowOverlay = document.getElementById("modal-overlay");
const modalWindow = document.getElementById("modal");
const modalWindowBody = document.getElementById("blur");

const showModalWindow = () => {
  modalWindowOverlay.style.display = 'flex';
  modalWindow.style.display = 'block'
  modalWindowBody.classList= "active";
}
openModalButton.addEventListener("click", showModalWindow);

// Hide Modal
const closeModalButton = document.getElementById("close-modal");

const hideModalWindow = () => {
    modalWindowOverlay.style.display = 'none';
    modalWindow.style.display = 'none'
    modalWindowBody.classList.remove= "active";
}

closeModalButton.addEventListener("click", hideModalWindow);


// Hide On Blur

const hideModalWindowOnBlur = (e) => {

    if(e.target === e.currentTarget) {
      console.log(e.target === e.currentTarget)
        hideModalWindow();
    }
}

modalWindowOverlay.addEventListener("click", hideModalWindowOnBlur)


})()

