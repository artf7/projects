let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  //let i;
  let slides = $(".mySlides");
  let dots = $(".dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  slides.hide();
  dots.removeClass("active");
  slides.eq(slideIndex-1).slideDown(500);
  dots.eq(slideIndex-1).addClass("active");
}