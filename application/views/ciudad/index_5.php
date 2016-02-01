<!doctype html>
<html class="novedades">
<!-- 
320 and Up boilerplate extension
Andy Clarke http://about.me/malarkey
Keith Clark http://twitter.com/keithclarkcouk
Version: 2
URL: http://stuffandnonsense.co.uk/projects/320andup/
License: http://creativecommons.org/licenses/MIT
-->

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title>320 and Up</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0">

<!-- For all browsers -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" media="print" href="css/print.css">
<!-- For progressively larger displays -->
<link rel="stylesheet" media="only screen and (max-width: 480px)" href="css/480.css">
<link rel="stylesheet" media="only screen and (max-width: 600px)" href="css/600.css">
<link rel="stylesheet" media="only screen and (max-width: 768px)" href="css/768.css">
<link rel="stylesheet" media="only screen and (max-width: 992px)" href="css/992.css">
<!-- For Retina displays -->
<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="css/2x.css">

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/libs/selectivizr-min.js"></script>
<![endif]-->

<!-- JavaScript -->
<script src="js/libs/modernizr-2.0.6.min.js"></script>
<script src="js/libs/jquery-1.6.2.min.js"></script>
<script src="js/libs/jquery.peity.min.js"></script>

<!-- For iPhone 4 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png">
<!-- For Nokia -->
<link rel="shortcut icon" href="img/l/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="/favicon.ico">

<!--iOS. Delete if not required -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="apple-touch-startup-image" href="img/splash.png">

<!--Microsoft. Delete if not required -->
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--[if lt IE 7 ]><script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script><script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script><![endif]-->

<!-- http://t.co/y1jPVnT -->
<link rel="canonical" href="/">


<script>

$(function() {
  // Just the defaults.
  $("span.pie").peity("pie")
  $(".line").peity("line")
  $(".bar").peity("bar")

  // Set a custom colour and/or diameter.
  $(".diameter span").peity("pie", {
    colours: function() {
      return ["#dddddd", this.getAttribute("data-colour")]
    },
    diameter: function() {
      return this.getAttribute("data-diameter")
    }
  })

  // Simple evented example.
  $("select").change(function(){
    $(this)
      .siblings("span.graph")
      .text($(this).val() + "/" + 5).change()
  }).change()

  var chartUpdate = function(event, value) {
    $("#notice").text(
      "Chart updated: " + value
    )
  }

  $("span.graph").peity("pie").bind("chart:changed", chartUpdate)
})


    </script>
    
</head>

<body class="clearfix" id="novedades">

    <header role="banner" class="auto">
        <div>Av. Rivadavia 12.330/40 (1702) Ciudadela, Buenos Aires, Argentina  </div>
<div class="aux_top"><span>Español | English</span></div>

<h1 class="floatL">Centro Cristiano de Ciudadela</h1>

<nav class="floatR">
<ul>
<li>
<a href="#">Inicio</a>
</li>
<li>
<a href="#">Nosotros</a>
</li>
<li>
<a href="#">Historias</a>
</li><li>
<a href="#">Desafíos</a>
</li>
<li>
<a href="#">Como ayudar?</a>
</li>
<li>
<a href="#">Contacto</a>
</li>

</ul>
</nav>

</header>
    
<div class="content clearfix auto ">
<div class="banner">
    <div class="floatL">
    <h2>HISTORIAS</h2>
    <img src="img/mundo.png" class="mundo" />
    </div>   
    
   
    </div>
    <div role="main" class="primary radius floatL">
  
        <h2 class="border_bot">Novedades & nuevos desafíos<span class="desafio"> 2</span><span class="como"> Como colaborar?</span></h2>
      
    <p>El ritmo nunca se detiene en la tarea de acercar ayuda a quienes más lo necesitan cada día, 
       los involucrados en esta obra, estan descubrimientos maneras originales y practicas. 
       Agua, luz, vivienda, ropa son algunas de las necesidades con las que se enfrentan, 
       desde esta sección vamos a brindar información
       detallada de las tareas alctuales y las necesidas que de allí se desprenden.
       Podemos comunicarnos y colaborar a todas horas.</p>
    
    
    <div class="col_2">
        <h4 class="border_bot">Últimas noticias</h4>
        <ul>
            <li>
                <dl>
                        <dt><a href="#" target="_blank">
        
                        <a href="#" target="_blank" class="title">
                            La Invernada: Jornada de tratamiento odontologico</a>
                        </dt>
                        <dd><i>13 fe febrero</i> - Asistencia odontologica gratuita a las casi 30 familias, pudimos colaborar y devolverle la 
                            sonrisa a muchas personas. 
                            <a href="#" target="_blank">
                                Leer más &raquo;</a>
                        </dd>
                </dl>
            </li>
             <li>
                <dl>
                        <dt><a href="#" target="_blank">
        
                        <a href="#" target="_blank" class="title">
                            La Invernada: Jornada de tratamiento odontologico</a>
                        </dt>
                        <dd><i>04 fe febrero</i> - Asistencia odontologica gratuita a las casi 30 familias, pudimos colaborar y devolverle la 
                            sonrisa a muchas personas. 
                            <a href="#" target="_blank">
                                Leer más &raquo;</a>
                        </dd>
                </dl>
            </li>
            <li>
                <dl>
                        <dt><a href="#" target="_blank">
        
                        <a href="#" target="_blank" class="title">
                            La Invernada: Jornada de tratamiento odontologico</a>
                        </dt>
                        <dd><i>04 fe febrero</i> - Asistencia odontologica gratuita a las casi 30 familias, pudimos colaborar y devolverle la 
                            sonrisa a muchas personas. 
                            <a href="#" target="_blank">
                                Leer más &raquo;</a>
                        </dd>
                </dl>
            </li>
        </ul>
    </div>
     <div class="col_2">
        <h4 class="border_bot">Últimas necesidades A cubrir </h4>
        <ul>
            <li>
                <dl>
                        <dt><a href="#" target="_blank">
        
                        <a href="#" target="_blank" class="title">
                            La Invernada: grupo electrogeno</a>
                        </dt>
                        <dd><i>13 fe febrero</i> - es necesario llevar un grupo electrogeno ya que el que tenian se rompio. 
                           
                             <span class="por">A cubrir</span>
                             <span class="colaborar">Colaborar</span>
                             
                        </dd>
                       
                </dl>
            </li>
             
            <li>
                <dl>
                        <dt><a href="#">
        
                        <a href="#"  class="title">
                            Formosa: Una abertura para puerta</a>
                        </dt>
                        <dd><i>04 fe febrero</i> - Se necesita una abertura para puerta 1,80m x 0,56m. 
                            <a href="#" >
                                Leer más &raquo; </a><span class="ya">Ya cubierto, Gracias!</span>
                           
                        </dd>
                </dl>
            </li>
            <li>
                <dl>
                        <dt><a href="#" target="_blank">
        
                        <a href="#" class="title">
                            Chaco: Utiles escolares</a>
                        </dt>
                        <dd><i>04 fe febrero</i> - Con el comienzo de las clases lo chicos necestan utiles escolares. 
                            
                             <span class="por">A cubrir</span>
                              <span class="colaborar">Colaborar</span>
                              <p class="diameter">
   
    <span data-colour="indigo" data-diameter="36">13-01-2012/22-02-2012</span>
    <?php 
       $fecha="2012-09-25 00:00:00";
$segundos=strtotime($fecha) - strtotime('now');
$diferencia_dias=intval($segundos/60/60/24);
echo "Faltan <b>".$diferencia_dias." dias</b>";
?>
    
  </p>
                            
                        </dd>
                </dl>
            </li>
        </ul>
    </div>
</div>

<div role="complementary" class="secondary floatR">

    <ul>

    
 
<li>
    <h4 class="border_bot">HISTORIAS</h4>
   
<dl>
<dt><a href="#" target="_blank">
    <img src="img/home_3.jpg" alt="Asistencia odontologica" width="225" height="68" /></a> 
<a href="#" target="_blank" class="title">
    Conocé la historia de José Banquerí: Comunidad Wichí</a>
</dt>
<dd>Este es la descripción corta de la historia de jose, debe estar contada de manera breve e introductoria, capaz captar el interes.    
    <a href="#" target="_blank">
        Leer más &raquo;</a>
</dd>
</dl>
</li>
    
 

  </ul>
    
</div>
 </div> 

<footer role="contentinfo" class="clearfix">
    Footer footer
</footer>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<!-- Scripts -->

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/mylibs/helper.js"></script>

<!--[if (lt IE 9) & (!IEMobile)]>
<script src="js/libs/imgsizer.js"></script>
<![endif]-->

<script>
// iOS scale bug fix
MBP.scaleFix();

// Respond.js
yepnope({
	test : Modernizr.mq('(only all)'),
	nope : ['js/libs/respond.min.js']
});
</script>

<!-- http://mths.be/aab -->
<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'));
</script>


</body>
</html>