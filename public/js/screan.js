const barge = document.getElementById('barge');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');


var MainImg = document.getElementById("Tshirt");
var MainImgg = document.getElementById("Tshirtt");
var smallimg = document.getElementsByClassName("small-img");
var smallimg = document.getElementsByClassName("small-img");



if(barge) {
    barge.addEventListener('click' , () =>{
        nav.classList.add('active');
    })
}


if(close) {
    close.addEventListener('click' , () =>{
        nav.classList.remove('active');
    })
}




smallimg[0].onclick = function(){
    MainImg.src = smallimg[0].src;
}
smallimg[1].onclick = function(){
    MainImg.src = smallimg[1].src;
}
smallimg[2].onclick = function(){
    MainImg.src = smallimg[2].src;
}
smallimg[3].onclick = function(){
    MainImg.src = smallimg[3].src;
}
