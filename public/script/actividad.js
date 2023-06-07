
let contenedor 
=document.querySelectorAll(".contenedor");
function mostrarScroll(){
    let scrollTop=
    document.documentElement.scrollTop;
    for(var i=0; i<contenedor.length; i++){
        let alturaContenedor = contenedor[i].offsetTop
if(alturaContenedor -200 <scrollTop){
    contenedor[i].style.opacity=1;

    contenedor[i].classList.add("mostrar1");
}
}
}

window.addEventListener('scroll', mostrarScroll);

