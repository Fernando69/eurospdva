function effect(){

// configura el carousel de imagenes
    $('.carousel').carousel({
        pause: none
    });        

// configura la barra de busqueda

    $("#btn-toggle").click(function () {
        $('#form-toggle').toggle("fast");    
        $('#form-toggle').addClass('down');
    });

// configura el slideshow de la section 1
    var imagenes = [
        "{{asset('img/fondo1.jpg')}}", 
        "{{asset('img/fondo2.jpg')}}",
        "{{asset('img/fondo3.jpg')}}",
    ];
    $(imagenes).each(function(){
        $("<img/>")[0].src = this; 
    });
    var index = 0;
    $.backstretch(imagenes[index], {speed: 800});
    setInterval(function() {
        index = (index >= imagenes.length - 1) ? 0 : index + 1;
        $.backstretch(imagenes[index]);
    }, 5000);

// configura los botones de scroll
    var ventana_alto = $(window).height();
    $('#IrArriba').hide();
    $(function(){
        $(window).scroll(function(){
            if($(this).scrollTop() > 200){
                $('#IrArriba').show(300);
                $('#IrAbajo').hide(300);
            }else{
                $('#IrAbajo').show(300);
                $('#IrArriba').hide(300);
            }
        })
        $('#IrArriba span').click(function(){
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        })

        $('#IrAbajo span').click(function(){
            $('body,html').animate({
                scrollTop: ventana_alto
            }, 1000);
            return false;
        })
    });
}