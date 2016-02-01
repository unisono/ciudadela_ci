<div class="content clearfix auto ">
    <div class="banner">
        <div class="floatL">

            <div class="obras">
                <h1 class="layer">En el Proyecto de Dios</h1>



            </div>
    <!--        <img src="<?php echo $this->config->item('path') ?>img/la_invernada_top.jpg" class="imagen_zonificacion" />-->
            <!--<video width="340"  height="260" src="video/MOV05674.AVI"  controls autobuffer>
        <p> Try this page in Safari  4! Or you can <a  href="http://www.youtube.com/demo/google_main.mp4">download the  video</a> instead.</p>
        </video>-->

        </div>   


    </div>
    <div role="main" class="primary radius floatL">




<?php 

$this->load->view($page);
?>
      




    </div>

    <div role="complementary" class="secondary floatR">
        <h3 class="border_bot">Zonificación de los proyectos</h3>
        <ul>

            <?php foreach ($proyectos_provincias as $p): ?>

                    <li class="li_obras">
                        <?php
                        $property = array(
                            'src' => $this->config->item('path') . 'img/thumb/' . url_title($p['provincia_nombre']) . '.jpg',
                            'border' => '0',
                            'class' => 'li_image');

                        echo anchor('welcome/proyectos/' . $p['id_proyectos'], img($property));
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