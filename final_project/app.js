// nav bar scroll
$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop()>650);
});

function openLogin(){
    document.getElementById("LoginForm").style.display="block";
}
function closeLogin(){
    document.getElementById("LoginForm").style.display="none";
}