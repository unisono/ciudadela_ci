<!doctype html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	
	<title>White Label - a full featured Admin Skin</title>
	
	<meta name="description" content="">
	<meta name="author" content="revaxarts.com">
	
	
	<!-- Google Font and style definitions -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold">
	<link rel="stylesheet" href=" <?php echo base_url()?>assets/css/style.css">
	
	<!-- include the skins (change to dark if you like) -->
	<link rel="stylesheet" href=" <?php echo base_url()?>assets/css/light/theme.css" id="themestyle">
	<!-- <link rel="stylesheet" href="css/dark/theme.css" id="themestyle"> -->
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	
	<!-- Apple iOS and Android stuff -->
	<meta name="apple-mobile-web-app-capable" content="no">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
	
	<!-- Apple iOS and Android stuff - don't remove! -->
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1">
	
	<!-- Use Google CDN for jQuery and jQuery UI -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
	
	<!-- Loading JS Files this way is not recommended! Merge them but keep their order -->
	
	<!-- some basic functions -->
       
	<script src="<?php echo base_url()?>assets/js/functions.js"></script>
        <script src="<?php echo base_url()?>assets/js/plugins.js"></script>
		
	<!-- all Third Party Plugins and Whitelabel Plugins -->
       
	<script src="<?php echo base_url()?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url()?>assets/js/editor.js"></script>
	<script src="<?php echo base_url()?>assets/js/calendar.js"></script>
	<script src="<?php echo base_url()?>assets/js/flot.js"></script>
	<script src="<?php echo base_url()?>assets/js/elfinder.js"></script>
	<script src="<?php echo base_url()?>assets/js/datatables.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Alert.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Autocomplete.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Breadcrumb.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Calendar.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Chart.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Color.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Date.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Editor.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_File.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Dialog.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Fileexplorer.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Form.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Gallery.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Multiselect.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Number.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Password.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Slider.js"></script>
	<script src="<?php echo base_url()?>assets/s/wl_Store.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Time.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Valid.js"></script>
	<script src="<?php echo base_url()?>assets/js/wl_Widget.js"></script>
	
	<!-- configuration to overwrite settings -->
	<script src="<?php echo base_url()?>assets/js/config.js"></script>
		
	<!-- the script which handles all the access to plugins etc... -->
	<script src="<?php echo base_url()?>assets/js/script.js"></script>
	
	
</head> 
<body>
   <h1>Administrador centrocrtistianociudadela.com</h1>
  
   <section id="content">
       
       <div class="g12">
           <h1>Forms <span><a href="doc-form.html" class="small">Documentation</a></span></h1>
           <a class="btn small fr" id="formsubmitswitcher">send form natively</a>
           <a class="btn small fr" id="formfiller" href="form.html?text_field=A+Text+Field&amp;text_tooltip=This+field+has+a+tooltip&amp;text_placeholder=placeholder+for+something&amp;textarea=This+is+just+a+simple+texarea&amp;textarea_auto=This+is+a+textarea+which%0A.%0A.%0A.%0A.%0A.%0A.%0A.%0Agrows!&amp;textarea_wysiwyg=%3Ch1%3EA+WYSIWYG+Editor%3C%2Fh1%3E%3Cbr%3E%3Cimg+src%3D%22http%3A%2F%2Frandom.revaxarts.com%2F400x200.jpg%22+title%3D%22%22+alt%3D%22%22%3E%3Cbr%3E%3Cbr%3EAnd+a+%3Ca+href%3D%22http%3A%2F%2Fgoogle.com%22%3Elink%3C%2Fa%3E&amp;integer=10&amp;decimal=6.50&amp;integer_minmax=20&amp;decimal_minmax=-12.50&amp;integer_steps=100&amp;decimal_steps=0.6400&amp;integer_start_from=1903&amp;integer_start_to=2003&amp;regex_letter=abc&amp;regex_number=123&amp;email=some%40example.com&amp;url=http%3A%2F%2Frevaxarts.com&amp;password=password&amp;color=%23bada55&amp;autocomplete=ActionScript&amp;autocomplete_inline=abc&amp;autocomplete_function=Lorem&amp;date=2011%2F02%2F05&amp;datetime=2011%2F02%2F05+20:15&amp;predefined_time=2011%2F02%2F05+16:12&amp;time_only_12=23:34&amp;time_only_24=20:34&amp;inline_date=2011%2F02%2F05&amp;slider=50&amp;slider_v_1=0&amp;slider_v_2=25&amp;slider_v_3=50&amp;slider_v_4=75&amp;slider_v_5=100&amp;slider_connect=99&amp;slider_range=[100,200]&amp;slider_range_from=250&amp;slider_range_to=700&amp;slider_callback=0&amp;apples_check=false&amp;bananas_check=true&amp;oranges_check=true&amp;radio=bananas_radio&amp;dropdown=Broccoli&amp;multiselect[]=beans&amp;multiselect[]=corn&amp;required_field=This+field+is+required&amp;required_field_msg=This+field+is+required+and+has+a+custom+error+message&amp;required_valid_field=OK&amp;agreed=true">Fill this form with some data</a>
           <p>Full featured forms handle all of your data<br>
               Looks good with tableless, schematic markup.</p>
                   
                   
           <form id="form" action="submit.php" method="post" autocomplete="off">
<!--               <fieldset>-->
                   
                  
<!--               </fieldset>-->
               <fieldset>
                   
                   <label>Subir imagenes <span>debe seleccionar una categoria</span></label>
                       
                   <section><label for="file_upload_multiple">Multi File Upload</label>
                       <div><input type="file" id="file_upload_multiple" name="file_upload_multiple" multiple>
                       </div>
                   </section>
                       
               </fieldset>
               
           </form>
       </div>
       
       
       
      <?php  echo $LISTADO_IMAGENES ?>
       
       
       
       
       
       
       <?php //========================================================================= ?>
       
       
       
       
       
        <div class="g12">
			<h1>Fileexplorer <span><a href="doc-fileexplorer.html" class="small">Documentation</a></span></h1>
			<p>A Finder for you online stuff</p>
			<div class="fileexplorer"></div>
			
			</div> 
       
       
   </section>         
  
</body>
</html>