var slideIndex = 1;
showImage(slideIndex);
function plusIndex(n) {
    showImage(slideIndex += n);
}
function showImage(n) {
    var slide = document.getElementsByClassName("slides");
    if (n > slide.length) { slideIndex = 1 };
    if (n < 1) { slideIndex = slide.length };
    for (var i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
    };
    slide[slideIndex - 1].style.display = "block";


}