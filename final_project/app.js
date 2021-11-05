// nav bar scroll
$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop()>650);
});

function openLogin(){
    document.getElementById("upperLogin").style.display="block";
}
function closeLogin(){
    document.getElementById("upperLogin").style.display="none";
}
var login = document.getElementById("upperLogin");

window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
}