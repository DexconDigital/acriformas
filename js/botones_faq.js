boton1 = document.getElementById('boton1');
boton2 = document.getElementById('boton2');
boton3 = document.getElementById('boton3');

icono1 = document.getElementById('icono1');
icono2 = document.getElementById('icono2');
icono3 = document.getElementById('icono3');

p1 = document.getElementById('p1');
p2 = document.getElementById('p2');
p3 = document.getElementById('p3');



boton1.addEventListener('click', function (){
    if(!p1.classList.contains('show')) {
        boton1.classList.add('activo');
        $('#icono1').toggleClass('fa-minus');
    } else {
        boton1.classList.remove('activo');
        $('#icono1').toggleClass('fa-plus');
    }
});

boton2.addEventListener('click', function (){
    if(!p2.classList.contains('show')) {
        boton2.classList.add('activo');
        $('#icono2').toggleClass('fa-minus');
    } else {
        boton2.classList.remove('activo');
        $('#icono2').toggleClass('fa-plus');
    }
});

boton3.addEventListener('click', function (){
    if(!p3.classList.contains('show')) {
        boton3.classList.add('activo');
        $('#icono3').toggleClass('fa-minus');
    } else {
        boton3.classList.remove('activo');
        $('#icono3').toggleClass('fa-plus');
    }
});