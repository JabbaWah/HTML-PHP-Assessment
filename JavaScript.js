var togglebtn = true;
function openNav() 
{
    if (togglebtn == true){
	    document.getElementById("mySidenav").style.width = "240px";
	    document.getElementById("main").style.marginLeft = "240px";
    	document.getElementById("overlay").style.opacity = "0.4";
    	document.getElementById("titlebar").style.width = "87.8%";
	    togglebtn = false;
	}
	else if (togglebtn == false){
		document.getElementById("mySidenav").style.width = "0";
	    document.getElementById("main").style.marginLeft = "0";
    	document.getElementById("overlay").style.opacity = "0";
    	document.getElementById("titlebar").style.width = "100.8%";
	    togglebtn = true;
	}
}


function funcload() {
    var slides = document.getElementsByClassName("mySlides");
    slides[0].style.display = "block"; 
}
function myFunction(x) {
	x.classList.toggle("change");
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
}