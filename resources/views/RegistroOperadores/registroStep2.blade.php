@extends('front.masterPageServicios')

@section('step1')

<div style='display:none'>
    <img src="{!! asset('img/x.png')!!}" alt='' />
</div>
<style>
    #simplemodal-container a.modalCloseImg {
        background:url("{!! asset('img/x.png')!!}") no-repeat;
        width:25px; height:29px; display:inline; z-index:1200; position:absolute; top:-15px; right:-16px; cursor:pointer;}
</style>
<div id="basic-modal-content" class="cls loadModal"></div>

<?php
$id_usuario_op = NULL;
$nombre_empresa_operador = NULL;
$direccion_empresa_operador = NULL;
$nombre_contacto_operador_1 = NULL;
$telf_contacto_operador_1 = NULL;
$email_contacto_operador = NULL;
?>
@foreach ($operador as $operadorData)
<?php
$id_usuario_op = $operadorData->id_usuario_op;
$nombre_empresa_operador = $operadorData->nombre_empresa_operador;
$direccion_empresa_operador = $operadorData->direccion_empresa_operador;
$nombre_contacto_operador_1 = $operadorData->nombre_contacto_operador_1;
$telf_contacto_operador_1 = $operadorData->telf_contacto_operador_1;
$email_contacto_operador = $operadorData->email_contacto_operador;
?>
@endforeach     


<div class="rowerror">
</div>

<div class="row-step4">
    <div id="title-box-header">
        <div id="title-box-type" style="cursor:pointer;"onclick="window.location.href = '{!!asset('/servicios')!!}'">
            
          <?php switch (session('tip_oper')) {
    case 1:
        $prefix="I'm an ";
        $operadorName="Agency";
        break;
    case 2:
        $prefix="I'm an ";
        $operadorName="Enterprise";
        break;
    case 3:
        $prefix="I'm just";
        $operadorName="Me";
        break;
    
}
?>

           
            <h2 class="head-title">
    {!!$prefix!!}             <strong>{!!$operadorName!!}</strong>
            </h2>
        </div>
        <div id="description-box-type">
            El Paso 2 es la información matriz del establecimeinto y su respectivo administrador o contacto. Por ejemplo existen empresas con varias sucursales, en este formulario se detalla el contacto de quien es responsable del establecimiento matriz y quien será encargado del contenido de la página
        </div>
    </div>
    <div id="space"></div>
     <div id="title-box-header-navigation">
        
           <h2 class="head-title-navigation">
   <a class="button-step4" onclick="window.location.href = '{!!asset('/servicios')!!}'"> 
       <strong><img src="{!! asset('img/flecha-1.png')!!}" height="15px" width="15px" /> Paso 1 </strong></a>
               
            </h2>
    </div>
    
    
    
    <div id="space"></div>
    {!! Form::open(['url' => route('upload-postoperador'),  'id'=>'registro_step1']) !!}

    <div class="wrapper uwa-font-aa">
        <div class="form-group-step2">
            <input type="hidden" value="{!!$data['tipoOperador']!!}" name="id_tipo_operador" id="id_tipo_operador">
            <input type="hidden" value="{!!Session::get('user_id')!!}" name="id_usuario" id="id_usuario">
            <input type="hidden" value="{!!$id_usuario_op!!}" name="id_usuario_op" id="id_usuario_op">
            {!!Form::label('company', 'Nombre del establecimiento o servicio', array('id'=>'iconFormulario-step2'))!!}
            {!!Form::text('nombre_empresa_operador', $nombre_empresa_operador, array("title"=>"Es el nombre de la matriz del establecimeinto o servicio por ejemplo Grupo Hotelero tiene varios locales y varios establecimientos asociados a nivel nacional.",'class'=>'inputtext-step2','placeholder'=>'Ingrese Nombre Compania'))!!}
        </div>
        <div class="form-group-step2">
            {!!Form::label('direccion_1', 'Direccion', array('id'=>'iconFormulario-step2'))!!}
            {!!Form::text('direccion_empresa_operador', $direccion_empresa_operador, array("title"=>"Es la dirección de la matriz del establecimiento.",'class'=>'inputtext-step2','placeholder'=>'Ingrese direccion compania'))!!}
        </div>
        <div class="form-group-step2">
            {!!Form::label('nombre_1', 'Nombre contacto', array('id'=>'iconFormulario-step2'))!!}
            {!!Form::text('nombre_contacto_operador_1', $nombre_contacto_operador_1, array("title"=>"Es el nombre del administrador del servicio o de quien se haga cargo de la información que ésta página despliegue.",'class'=>'inputtext-step2','placeholder'=>'Ingrese Nombre contacto'))!!}
        </div>
        <div class="form-group-step2">
            {!!Form::label('telefono_1', 'Teléfono contacto', array('id'=>'iconFormulario-step2'))!!}
            {!!Form::text('telf_contacto_operador_1', $telf_contacto_operador_1, array("title"=>"Es el telefono del contacto del servicio, se puede tener varios servicios pero un solo representante al cual le haremos llegar noticias, mercadería, premios, etc.",'class'=>'inputtext-step2','placeholder'=>'Ingrese telefono contacto'))!!}
        </div>
        <div class="form-group-step2">
            {!!Form::label('email_1', 'Email Contacto', array('id'=>'iconFormulario-step2'))!!}
            {!!Form::text('email_contacto_operador', $email_contacto_operador, array("title"=>"Es el email del contacto del servicio, se puede tener varios servicios pero un solo representante al cual le haremos llegar noticias, mercadería, premios, etc.",'class'=>'inputtext-step2','placeholder'=>'Ingrese email contacto'))!!}
        </div>
        <div class="form-group-step2">
            <div class="box-content-button-step2">
                <a class="button" onclick="AjaxContainerRegistro('registro_step1')" href="#">Siguiente</a>
            </div>
        </div>    

    </div>
    {!! Form::close() !!}

    <div class="iconoInvitacion">    
                 <a onclick="RenderPartialGeneric('reusable.invitar_amigo')" href="#"><img src="{{ asset('img/amigo-1.png')}}"></a> 
    </div>         
                
</div>

@section('scripts')


{!! HTML::script('/js/jsModal/jquery.simplemodal.js') !!}
{!! HTML::script('/js/jsModal/basic.js') !!}


    

@stop

  <script>
  $(function() {
    var tooltips = $( "[title]" ).tooltip({
      position: {
        my: "left top",
        at: "right+5 top-5"
      }
    });
   
  });
  </script>

@stop