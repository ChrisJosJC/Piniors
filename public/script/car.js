
let car 
=document.querySelectorAll(".car");
function mostrarScroll(){
    let scrollTop=
    document.documentElement.scrollTop;
    for(var i=0; i<car.length; i++){
        let alturaCar = car[i].offsetTop
if(alturaCar -450 <scrollTop){
    car[i].style.opacity=1;

    car[i].classList.add("mostrar");
}
}
}

window.addEventListener('scroll', mostrarScroll);