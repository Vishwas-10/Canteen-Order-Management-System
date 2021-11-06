
// nav bar scroll
$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop()>650);
});



// Login pop up 
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

const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});



// top sale owl carousel
$(document).ready(function(){

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
