
let care 
=document.querySelectorAll(".care");
function mostrarScroll(){
    let scrollTop=
    document.documentElement.scrollTop;
    for(var i=0; i<care.length; i++){
        let alturaCare = care[i].offsetTop
if(alturaCare -350 <scrollTop){
    care[i].style.opacity=1;

   care[i].classList.add("mostrar1");
}
}
}

window.addEventListener('scroll', mostrarScroll);

