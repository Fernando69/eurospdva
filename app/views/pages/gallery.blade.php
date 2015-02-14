@extends('layaout.mastarlayaout')

@section('title')
Galería | 
@stop

@section('addcss')
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="{{asset('css/bootstrap-image-gallery.min.css')}}">
@stop

@section('content')

<h1>Galería</h1>



<div>
    <br>
    <div id="links">
	
	<h2>La estructura</h2>
	
	<a href="{{asset('img/galeria/estructura/1.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/estructura/miniaturas/1.jpg')}}"></a>
	<a href="{{asset('img/galeria/estructura/2.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/estructura/miniaturas/2.jpg')}}"></a>
	<a href="{{asset('img/galeria/estructura/3.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/estructura/miniaturas/3.jpg')}}"></a>

	<h2>Santuario</h2>

	<a href="{{asset('img/galeria/santuario/1.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/1.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/2.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/2.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/3.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/3.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/4.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/4.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/5.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/5.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/6.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/6.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/7.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/7.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/8.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/8.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/9.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/9.jpg')}}"></a>
	<a href="{{asset('img/galeria/santuario/10.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/santuario/miniaturas/10.jpg')}}"></a>

	<h2>Salones</h2>
	
	<a href="{{asset('img/galeria/salones/1.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/salones/miniaturas/1.jpg')}}"></a>
	<a href="{{asset('img/galeria/salones/2.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/salones/miniaturas/2.jpg')}}"></a>
	<a href="{{asset('img/galeria/salones/3.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/salones/miniaturas/3.jpg')}}"></a>
	<a href="{{asset('img/galeria/salones/4.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/salones/miniaturas/4.jpg')}}"></a>
	<a href="{{asset('img/galeria/salones/5.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/salones/miniaturas/5.jpg')}}"></a>
	<a href="{{asset('img/galeria/salones/6.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/salones/miniaturas/6.jpg')}}"></a>
	<a href="{{asset('img/galeria/salones/7.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/salones/miniaturas/7.jpg')}}"></a>

	<h2>Laboratorios y talleres</h2>

	<a href="{{asset('img/galeria/laboratorios/1.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/1.jpg')}}"></a>
	<a href="{{asset('img/galeria/laboratorios/2.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/2.jpg')}}"></a>
	<a href="{{asset('img/galeria/laboratorios/3.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/3.jpg')}}"></a>
	<a href="{{asset('img/galeria/laboratorios/4.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/4.jpg')}}"></a>
	<a href="{{asset('img/galeria/laboratorios/5.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/5.jpg')}}"></a>
	<a href="{{asset('img/galeria/laboratorios/6.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/6.jpg')}}"></a>
	<a href="{{asset('img/galeria/laboratorios/7.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/7.jpg')}}"></a>
	<a href="{{asset('img/galeria/laboratorios/8.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/8.jpg')}}"></a>
	<a href="{{asset('img/galeria/laboratorios/9.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/laboratorios/miniaturas/9.jpg')}}"></a>


	<h2>Personal</h2>

	<a href="{{asset('img/galeria/personal/1.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/personal/miniaturas/1.jpg')}}"></a>
	<a href="{{asset('img/galeria/personal/2.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/personal/miniaturas/2.jpg')}}"></a>
	<a href="{{asset('img/galeria/personal/3.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/personal/miniaturas/3.jpg')}}"></a>
	<a href="{{asset('img/galeria/personal/4.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/personal/miniaturas/4.jpg')}}"></a>			

	<h2>Variadas</h2>

	<a href="{{asset('img/galeria/variadas/1.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/variadas/miniaturas/1.jpg')}}"></a>
	<a href="{{asset('img/galeria/variadas/2.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/variadas/miniaturas/2.jpg')}}"></a>
	<a href="{{asset('img/galeria/variadas/3.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/variadas/miniaturas/3.jpg')}}"></a>
	<a href="{{asset('img/galeria/variadas/4.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/variadas/miniaturas/4.jpg')}}"></a>
	<a href="{{asset('img/galeria/variadas/5.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/variadas/miniaturas/5.jpg')}}"></a>
	<a href="{{asset('img/galeria/variadas/6.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/variadas/miniaturas/6.jpg')}}"></a>
	<a href="{{asset('img/galeria/variadas/7.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/variadas/miniaturas/7.jpg')}}"></a>
	<a href="{{asset('img/galeria/variadas/8.jpg')}}" title="" data-gallery=""><img src="{{asset('img/galeria/variadas/miniaturas/8.jpg')}}"></a>							

    </div>
    <br>
</div>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Atrás
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Siguiente
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('addjs')
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="{{asset('js/bootstrap-image-gallery.min.js')}}"></script>

@stop

@section('content')