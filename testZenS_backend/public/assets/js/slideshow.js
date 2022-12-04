// const next1 = document.querySelector(".next1");
// const next = document.querySelector(".next");
// const carousel = document.querySelector(".carousel-container");
// const track = document.querySelector(".track");

// let width = carousel.offsetWidth;
// let index = 0;

// window.addEventListener("resize", function () {
//     width = carousel.offsetWidth;
// });

// next.addEventListener("click", function (e) {
//     e.preventDefault();
//     index = index + 1;
//     next.classList.add("show");
//     track.style.transform = "translateX(" + index * - width + "px)";
//     if (track.offsetWidth - index * width < index * width) {
//         next.classList.add("hide");
//     }
// });

// next1.addEventListener("click", function () {
//     index = index + 1;
//     next1.classList.add("show");
//     track.style.transform = "translateX(" + index * - width + "px)";
//     if (track.offsetWidth - index * width < index * width) {
//         next.classList.add("hide");
//     }
// });

var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
    showSlides((slideIndex += n));
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    //console.log(slides.length); //5 && n=1
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n > slides.length-1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
    
}
