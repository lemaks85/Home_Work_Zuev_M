let slideIndex = 1;
showSlides(slideIndex);

function nextSlide() {
    showSlides(slideIndex += 1);
}

function previousSlide() {
    showSlides(slideIndex -= 1);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("item");

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    for (let slide of slides) {
        slide.style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

function action1() {
    var img1 = document.getElementById('img1');
    showSlides(slideIndex = 1);
}

function action2() {
    var img2 = document.getElementById('img2');
    showSlides(slideIndex = 2);
}

function action3() {
    var img3 = document.getElementById('img3');
    showSlides(slideIndex = 3);}



