<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <title>Registro</title>
        <meta charset='utf-8' />
        <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta name="description" content="Comunity Turism, Travel Guide Ecuador">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="IguanaTrip group">

        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="apple-touch-icon" href="{{ asset('images/favicon.png')}}" />        

        <!--        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
        {!! HTML::style('css/demo.css') !!} 
        {!! HTML::style('css/masterPagesRegistro.css') !!}
        {!! HTML::style('css/base/layoutBase.css') !!} 
        {!! HTML::style('css/popupModal/basic.css') !!} 
        {!!HTML::script('js/sliderTop/jquery-1.9.1.min.js') !!}
            {!!HTML::script('js/sliderTop/jssor.slider.mini.js') !!}
            

        
    
    </head>
    <div id='loadingScreen'>
        <body>
            <header role="banner">
                <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1360px; height: 235px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <!-- Loading Screen 
            <div style="position:absolute;display:block;background:url("{!!asset('img/internas/loading.gif')!!}") no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            -->
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1360px; height: 235px; overflow: hidden;">
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-1.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-11.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-3.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-4.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-5.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-6.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-7.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-8.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-9.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-13.png')}}" />
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="{{ asset('img/internas/banner-15.png')}}" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        
    </div>
                <div id="menu">
                    <div id="menu-ul">
                        <ul id="seleccionitem">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Contact</a></li>
                            <li>{!! link_to('auth/logout', trans('front/site.logout')) !!}</li>
                            <li>
 <!--                               <a href="{!! url('language') !!}"><img width="32" height="32" alt="en" src="{!! asset('img/' . (session('locale') == 'es' ? 'english' : 'español') . '-flag.png') !!}"></a>-->
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="container" id="target">
                <div class="content show" id="registro-step1">
                    @yield('step1')
                </div>	

            </div>

            <div id="footers">
                <div id="menu-ul">
                    <ul id="seleccionitem">
                        <li><a href=”#”>Home</a></li>
                        <li><a href=”#”>Gallery</a></li>
                        <li><a href=”#”>Contact</a></li>
                        <li>{!! link_to('auth/logout', trans('front/site.logout')) !!}</li>
                    </ul>
                </div>	
            </div>


            {!! HTML::script('js/jquery.js') !!}
            {!! HTML::script('js/bootstrap.min.js') !!}
            {!!HTML::script('js/loadingScreen/loadingoverlay.js') !!}
            
            {!!HTML::script('js/Compartido.js') !!}
            {!! HTML::script('js/calendar/calendar.js') !!}
            {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
            
            {!!HTML::script('js/loadingScreen/loadingoverlay.min.js') !!}
            
            
            
            <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1800,$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1360);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    
    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background:url ("{!!asset("img/internas/b05.png")!!}") no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background:url("{!!asset("img/internas/a12.png")!!}") no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>

            @yield('scripts')


        </body>
    </div>
</html>