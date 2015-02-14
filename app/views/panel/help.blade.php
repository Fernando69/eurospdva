@extends('layaout.panel')

@section('title')
Ayuda |
@stop

@section('content')

<div class="userbox"><span class="glyphicon glyphicon-user"></span></div>

<h2>Sección de Ayuda</h2>

<p>Acá encontrarás toda la información que necesitas para sacarle el mayor provecho a esta plataforma. 
Con la barra de menús que tienes a tú izquierda y en la parte superior podrás movilizarte a través de toda la página. Puedes encontrar desde tus propios datos, los datos de los creadores o hasta la información del colegio.<p>
<p>¿Tienes dudas específicas? Mira nuestros vídeos tutoriales.</p>

<div class="boxvideo">
<h4>¿Cómo realizar el proceso de inscripción?</h4>
<div class="videohelp"><a href="{{URL::to('/')}}"><b class="glyphicon glyphicon-triangle-right"></b></a></div>
</div>

<div class="boxvideo">
<h4>¿Cómo solicitar mi constancia de estudio?</h4> 
<div class="videohelp"><a href="{{URL::to('/')}}"><b class="glyphicon glyphicon-triangle-right"></b></a></div>
</div>

<div class="boxvideo">
<h4>¿Cómo solicitar mi constancia de trabajo?</h4>  
<div class="videohelp"><a href="{{URL::to('/')}}"><b class="glyphicon glyphicon-triangle-right"></b></a></div>
</div>

@stop