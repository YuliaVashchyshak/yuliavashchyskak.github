const burgerBtn = document.querySelector('.header__burger-btn');
const header = document.querySelector('header');
burgerBtn.addEventListener('click', () => {
    header.classList.toggle('open')
})


$('.slider__wrapper').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 500,
            settings: {
                arrows: false,
            }
        }]
});
$('.team__slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    arrows: false,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                centerMode: false,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                centerPadding: '0px',

            }
        },
        {
            breakpoint: 580,
            settings: {
                slidesToShow: 1,
                centerPadding: '0px',

            }
        },
        {
            breakpoint: 400,
            settings: {
                slidesToShow: 1,
                centerPadding: '0px',
            }
        },
    ]
});
$(".brands__slider").slick({
    dots: false,
    infinite: true,
    slidesToShow: 8,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 2000,
    cssEase: "linear",
    arrows: false,
    responsive: [
        {
            breakpoint: 1320,
            settings: {
                slidesToShow: 7,
            }
        },
        {
            breakpoint: 1150,
            settings: {
                slidesToShow: 6,
            }
        },
        {
            breakpoint: 1030,
            settings: {
                slidesToShow: 5,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 4,
            }
        },

        {
            breakpoint: 730,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 420,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});



AOS.init();