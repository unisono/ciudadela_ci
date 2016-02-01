<script src="<?php echo base_url() ?>NI/js/script.js"></script> 
<?php if (!$chat or !$topico) die('<h2 style="text-align:center; margin-top:70px; min-height:180px">No hay ningún topico</h2>') ?>


<?php foreach ($topico as $t) { ?>

        <a name=""></a>
        
        <div class="descricion-topico" >

            <h1><span class="titulo" id="<?php echo $t['nombre'] ?>">#Topico <?php echo $t['id_topico'] ?></span><?php echo $t['nombre'] ?>

            </h1>
            <p> <?php echo $t['descripcion'] ?></p>
            <input name="categoria" title="A Tooltip"  type="hidden" id="text_tooltip" value="<?php echo $chat[0]['id_categoria']; ?>" >
            <input name="id_posteo" title="A Tooltip"  type="hidden" id="id_posteo" value="<?php echo $t['id_topico']; ?>" >
            <input class="categoria-nombre" title="A Tooltip"  type="hidden" id="id_posteo" value="<?php echo $chat[0]['titulo']; ?>" >
            <input class="token" title="A Tooltip"  type="hidden" id="id_posteo" value="<?php echo $chat[0]['token']; ?>" >
            <input class="id_categoria" title="A Tooltip"  type="hidden" id="id_posteo" value="<?php echo $t['id_categoria']; ?>" >       


            <div class="firma-topico" id="<?php echo $chat[0]['nombre']; ?>">Creado por: <?php echo usuario($t['id_usuario']); ?> / <?php echo tiempo_transcurrido($t['fecha_topico']) ?></div>
            <div class="option"> <a  id="<?php echo $t['id_topico']; ?>"  class="aa btn i_bended_arrow_right small nt" title="Responder a este topico" ></a></div>
            <div class="b-<?php echo $t['id_topico'] ?>" style="display:none; box-shadow: 10px 14px 100px 10px #999; position:fixed; top:-112%; z-index: 99999; right: 20%">           
            </div>
        </div>

        <?php if ($chat) {
            ?>
            <?php foreach ($chat as $r) { ?>
                <?php if ($r['id_topico'] == $t['id_topico']) { ?>
                    <?php $nombre_topico = $r['id_topico']; ?>

                    <div class="<?php echo $r['style'] ?>" style="<?php echo ($r['tipo'] == 0) ? 'clear:both' : 'float: right;'; ?>"><span class="fecha"><?php echo tiempo_transcurrido($r['fecha']) ?></span><br/>
                        <?php $r['tipo'] ?>
                        <p><?php echo $r['texto'] ?></p>
                        <span class="firma" style=<?php echo ($r['tipo'] == 0) ? 'left:-10px;' : 'left:-10px;'; ?>>
                            <?php echo ($r['tipo'] == 0) ? 'Comentario' : 'Respuesta'; ?>: <b><?php echo ' ' . $r['nombre_user'] ?></b>
                        </span>
                    </div>

                <?php } ?>
            <?php } ?>
        <?php } ?>

    <?php } ?>
                       

