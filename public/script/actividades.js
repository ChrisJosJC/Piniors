
let conte 
=document.querySelectorAll(".conte");
function mostrarScroll(){
    let scrollTop=
    document.documentElement.scrollTop;
    for(var i=0; i<conte.length; i++){
        let alturaConte = conte[i].offsetTop
if(alturaConte -400 <scrollTop){
    conte[i].style.opacity=1;

    conte[i].classList.add("mostrar");
}
}
}

window.addEventListener('scroll', mostrarScroll);

