// nav bar scroll
$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop()>650);
});

var login = document.getElementById("upperLogin");

function openLogin(){
    login.style.display="block";
}
function closeLogin(){
    login.style.display="none";
}


window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
}

$(document).ready(function(){


    // top sale owl carousel
    $(".Food-Carousel .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });
});
