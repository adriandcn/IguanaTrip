
{!! HTML::style('css/checkBoxCss/stylesheet-pure-css.css') !!} 


                        <h2 class='titletable'>
                            Estado físico
                        </h2>


@if(isset($elegido))

    
<?php $check=$elegido?>


<div class="example">
    
    @foreach($diffic as $dificult)
    
    <div>
        @if($dificult->id==$elegido)
        <input id="radio{!!$dificult->id!!}" type="radio" name="id_dificultad" value="{!!$dificult->id!!}" checked="checked"><label for="radio{!!$dificult->id!!}"><span><span></span></span>{!!$dificult->nombre_dificultad!!}</label>
        @else
        <input id="radio{!!$dificult->id!!}" type="radio" name="id_dificultad" value="{!!$dificult->id!!}" ><label for="radio{!!$dificult->id!!}"><span><span></span></span>{!!$dificult->nombre_dificultad!!}</label>
        @endif
    </div>
    @endforeach

</div>

@else


<div class="example">
    <?php
    $i = 0;
    ?>
    @foreach($diffic as $dificult)
    <?php
    $i = $i + 1;
    ?>
    <div>
        @if($i==1)
        <input id="radio{!!$dificult->id!!}" type="radio" name="id_dificultad" value="{!!$dificult->id!!}" checked="checked"><label for="radio{!!$dificult->id!!}"><span><span></span></span>{!!$dificult->nombre_dificultad!!}</label>
        @else
        <input id="radio{!!$dificult->id!!}" type="radio" name="id_dificultad" value="{!!$dificult->id!!}" ><label for="radio{!!$dificult->id!!}"><span><span></span></span>{!!$dificult->nombre_dificultad!!}</label>
        @endif
    </div>
    @endforeach

</div>

@endif


