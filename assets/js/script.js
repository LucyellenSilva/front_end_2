var slideItem = 0;
window.onload = function() {
    setInterval(passarSlide, 7000);

    var slideWidth =  document.getElementById("slide-show").offsetWidth;
    var objs = document.getElementsByClassName('slides');
    
    for(i=0; i < objs.length; i++){
        objs[i].style.width = slideWidth + "px";;
    }
}

function passarSlide() 
{
    var slideWidth =  document.getElementById("slide-show").offsetWidth;

    if( slideItem >= 3) {
        slideItem = 0;
    } else {
        slideItem++;
    }

    document.getElementsByClassName("slide-show-area")[0].style.marginLeft = "-" + (slideWidth * slideItem) + "px";
}

function mudarSlide(position) 
{
    var slideWidth =  document.getElementById("slide-show").offsetWidth;
    slideItem = position;

    document.getElementsByClassName("slide-show-area")[0].style.marginLeft = "-" + (slideWidth * slideItem) + "px";
}

function toogleMenu()
{
    var menu = document.getElementById('menu');

    if( menu.style.display == "none" || menu.style.display == "") {
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
}