<style>
#form { margin:40px 0 0 110px;}
#form label{ display: inline-block; width: 100px;  } 
#form li{ margin-bottom: 12px;}
#form p{ line-height: 1em; margin: 0px; background: red; width: 300px; color: #fff; margin-bottom: 2px;}
.w-c{ margin-left: 100px; width: 650px;}
</style>
<div class="w-c">
<form id="form" name="form" class="" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
              action="contacto">


    
            <h2>Formulario de contacto</h2>
<?php echo validation_errors(); ?>
            <ul style="position:relative;">
                
                <li>
                    <label>Nombre *</label>
                    <input style="width:400px; height: 20px; border:1px solid #d4d4d4;" name="nombre" type="text"/>    </li>
                <li>
                    <label>Apellido *</label>
                    <input style="width:400px; height: 20px; border:1px solid #d4d4d4;" name="apellido" type="text"/>    </li>
                <li>
                  <li>
                    <label>Email *</label>
                    <input style="width:400px; height: 20px; border:1px solid #d4d4d4;" name="mail" type="text"/>    </li>
                <li>   
                    <label>Comentario</label>
                    <textarea id="Field4" 
                              name="comentario" 
                              style="width:400px; min-height: 200px;  border:1px solid #d4d4d4;">

                    </textarea>
                </li>

            
<li style="text-align: right;">
            <input style="margin-right: 28px; height: 40px; width: 150px; border: 1px solid #00620C; background: #5bc822; color: #fff; " id="saveForm" name="saveForm" class="btTxt submit" 
                   type="submit" value="Enviar"/>
</li>
</ul>
        </form> 
</div>