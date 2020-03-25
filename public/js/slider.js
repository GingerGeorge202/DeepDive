// let slides = document.getElementsByClassName("slide");
// let slideIndex = 0;
//
// function next() {
//     showSlides(slideIndex += 1);
// }
// function prev() {
//     showSlides(slideIndex -= 1);
// }
// showSlides(slideIndex);
//
//
//
// function showSlides(n) {
//
//     // if(n == 0){
//     //     document.getElementById("left-button").disabled = true;
//     // }
//     if (n > slides.length) {
//         slideIndex = slides.length - 3;
//     }
//     if (n < 0) {
//         slideIndex = slides.length - 1;
//     }
//     for (let i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//
//     for(let j = n;  j < n + 3; j++){
//
//         // if(j > slides.length - 1) {
//         //     j = slides.length - j;
//         //
//         //     // slides[j].style.display = "inline";
//         //     //
//         //     // if(n < j && j < n + 2)  {
//         //     //     slides[j].classList.add("active");
//         //     // }else{
//         //     //     slides[j].classList.remove("active");
//         //     // }
//         // }
//
//         console.log(`n = ${n}`);
//         console.log(`j = ${j}`);
//
//         slides[j].style.display = "inline";
//
//         if(n < j && j < n + 2)  {
//             slides[j].classList.add("active");
//         }else{
//             slides[j].classList.remove("active");
//         }
//     }
//
//     // slides[slideIndex].style.display = "inline-block";
//     // slides[slideIndex + 1].style.display = "inline-block";
//     // slides[slideIndex + 1].classList.add("active");
//     // slides[slideIndex + 2].style.display = "inline-block";
//     console.log(slideIndex);
// }
//
// setInterval(3000, next);
//
//
//
//     // for(let j = n;  j < n + 3; j++){
//     //
//     //
//     //     slides[j].style.display = "inline";
//     //
//     //     if(n < j && j < n + 2)  {
//     //         slides[j].classList.add("active");
//     //     }else{
//     //         slides[j].classList.remove("active");
//     //     }
//     // }
//
//
//
// // document.getElementById("left-button").onclick = function(){
// //     showSlides(slideIndex -= 1);
// // };
// //
// // document.getElementById("right-button").onclick = function(){
// //     showSlides(slideIndex += 1);
// // };
// //
// // render(INDEX);
// //
// //
// // /* Индекс слайда по умолчанию */
// // let slideIndex = 1;
// // showSlides(slideIndex);
// //
// // /* Функция увеличивает индекс на 1, показывает следующй слайд*/
// // function plusSlide() {
// //     showSlides(slideIndex += 1);
// // }
// //
// // /* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
// // function minusSlide() {
// //     showSlides(slideIndex -= 1);
// // }
// //
// // /* Устанавливает текущий слайд */
// // function currentSlide(n) {
// //     showSlides(slideIndex = n);
// // }
// //
// // /* Основная функция слайдера */
// // function showSlides(n) {
// //     let i;
// //     let slides = document.getElementsByClassName("slide");
// //     if (n > slides.length) {
// //         slideIndex = 1
// //     }
// //     if (n < 1) {
// //         slideIndex = slides.length
// //     }
// //     for (i = 0; i < slides.length; i++) {
// //         slides[i].style.display = "none";
// //     }
// //     for (i = 0; i < dots.length; i++) {
// //         dots[i].className = dots[i].className.replace(" active", "");
// //     }
// //     slides[slideIndex - 1].style.display = "block";
// //     dots[slideIndex - 1].className += " active";
// // }

let slides = document.getElementsByClassName("slide");
let INDEX = 0;

function render(n = 0) {

    for(let i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }

    if(n == 0){
        document.getElementById("left-button").disabled = true;
    }

    if(n > slides.length){
        n = slides.length - 3;
    }




    for(let j = n;  j < n + 3; j++){


        slides[j].style.display = "inline";

        if(n < j && j < n + 2)  {
            slides[j].classList.add("active");
        }else{
            slides[j].classList.remove("active");
        }
    }
}


document.getElementById("left-button").onclick = function(){
    --INDEX;
    if(INDEX < 0){
        INDEX = slides.length - 3;
        console.log(INDEX);
    }

    render(INDEX);
};

document.getElementById("right-button").onclick = function(){
    ++INDEX;
    if(INDEX > slides.length - 3){
        INDEX = 0

    }
    render(INDEX);
};

render(INDEX);

