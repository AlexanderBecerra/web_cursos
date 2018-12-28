$(function(){
    "use strict";

    //para tener seguimiento activo en la pagina




    //menu de hamburguesa responsiva
    $('.navegacion-movil').on('click',function(){
        $('.navegacion-barra').slideToggle();
    });

    //aqui muestro una sola cosa
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    //que atrape
    $('.menu-programa a').on('click',function(){

        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');

        $(enlace).fadeIn(1000);
        return false;
    });

    //plugin de ANIMACION NUMEROS

    $('.resumen-evento li:nth-child(1) p').animateNumber({number:6},1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number:15},1000);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number:3},1500);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number:9},1200);

    //PLUGIN DE CONTEO
    $('.cuenta-regresiva').countdown('2018/09/19 22:00:00',function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));

    })  ;
    $();
//PLUGIN DE LETRAS EN HEADER
$('.nombre-sitio').lettering();




//PLUGIN DE COLOR BOX (HTML EN POOP UP)
$('.invitado-info').colorbox({inline:true, width:"50%"});
$('.boton_newsletter').colorbox({inline:true,width:"50%"});
$('body.calendario .navegacion-barra a:contains("Calendario")').addClass('activo');
$('body.invitados .navegacion-barra a:contains("Invitados")').addClass('activo');
$('body.conferencia .navegacion-barra a:contains("Conferencias")').addClass('activo');

});
