<div class="content clearfix auto ">
    <div class="banner">
        <div class="floatL">
            <div class="obras">
                <p>
                <h2>Proyectos en <span><?php echo $provincia_nombre; ?></span></h2>
                <p><?php echo $datos_provincia; ?></p>
            </div>
            
            
<!--            <img src="<?php echo $this->config->item('path') ?>img/la_invernada_top.jpg" class="imagen_top" />-->
            
            
            
            <!--<video width="340"  height="260" src="video/MOV05674.AVI"  controls autobuffer>
        <p> Try this page in Safari  4! Or you can <a  href="http://www.youtube.com/demo/google_main.mp4">download the  video</a> instead.</p>
        </video>-->

        </div>   


    </div>
    <div role="main" class="primary radius floatL">

        <h4 class="border_bot"><?php echo $titulo; ?></h4>

        <?php echo $descripcion; ?>
    </div>

    <div role="complementary" class="secondary floatR">
        <?php echo $SLIDER ?>
        <h4 class="border_bot">UBICACIÓN</h4>
        <div class="maps">
            <?php echo $MAPA; ?>
        </div>

        <h4 class="border_bot">TODAS LAS OBRAS</h4>
        <ul>

            <?php foreach ($proyectos_provincias as $p): ?>

                    <li class="li_obras">
                        <?php
                        $property = array(
                            'src' => $this->config->item('path') . 'img/thumb/' . url_title($p['provincia_nombre']) . '.jpg',
                            'border' => '0',
                            'class' => 'li_image');
                        echo anchor('proyecto/' . $p['id_proyectos'], img($property));
                        ?>        

                        <dl>
                            <dt><?php echo $p['provincia_nombre']; ?></dt>

                            <?php foreach ($proyectos_localidades as $l): ?>
                                <?php if ($l['id_l'] == $p['id_p']) : ?>
                                    <dd><?php echo $l['localidad_nombre']; ?></dd>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </dl>
                    </li>
                <?php endforeach; ?>

        </ul>   
    </div>
</div>    

