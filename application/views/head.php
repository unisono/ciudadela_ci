<html lang="en-us">
<head>
	<meta charset="utf-8">
	
	<title>Nada Irreal 2013</title>
	
	<meta name="description" content="">
	<meta name="author" content="revaxarts.com">
	
	
	<!-- Apple iOS and Android stuff -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon-precomposed" href="img/icon.png">
	<link rel="apple-touch-startup-image" href="img/startup.png">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,maximum-scale=1">
	
	<!-- Google Font and style definitions -->	
        <link rel="stylesheet" href="<?php echo base_url() ?>NI/css/style.css">	
	<!-- include the skins (change to dark if you like) -->
	<link rel="stylesheet" href="<?php echo base_url() ?>NI/css/light/theme.css" id="themestyle">
	<!-- <link rel="stylesheet" href="css/dark/theme.css" id="themestyle"> -->
        
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>NI/css/ie.css">
	<![endif]-->
        
	
	<!-- Use Google CDN for jQuery and jQuery UI -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
	
	<!-- Loading JS Files this way is not recommended! Merge them but keep their order -->
	
	<!-- some basic functions -->	
		
	<!-- all Third Party Plugins -->
        <?php if ($this->uri->segment(1) =='nadairreal' and $this->uri->segment(2) == false  ){?>
        <script src="<?php echo base_url() ?>NI/js/functions.js"></script>
	<script src="<?php echo base_url() ?>NI/js/plugins.js"></script>
		
<!--	 Whitelabel Plugins -->
	<script src="<?php echo base_url() ?>NI/js/wl_Alert.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Dialog.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Form.js"></script>
		
<!--	 configuration to overwrite settings -->
	<script src="<?php echo base_url() ?>NI/js/config.js"></script>
		
<!--	 the script which handles all the access to plugins etc... -->
	<script src="<?php echo base_url() ?>NI/js/login.js"></script>
        
        
		
<!--	 all Third Party Plugins and Whitelabel Plugins -->
        <?php } else{?>
	<script src="<?php echo base_url() ?>NI/js/functions.js"></script>		
	<!-- all Third Party Plugins and Whitelabel Plugins -->
	<script src="<?php echo base_url() ?>NI/js/plugins.js"></script>
	<script src="<?php echo base_url() ?>NI/js/editor.js"></script>
        <script src="<?php echo base_url() ?>NI/js/jscripts/tiny_mce/jquery.tinymce.js"></script>
        
	<script src="<?php echo base_url() ?>NI/js/calendar.js"></script>
	<script src="<?php echo base_url() ?>NI/js/flot.js"></script>
	<script src="<?php echo base_url() ?>NI/js/elfinder.js"></script>
	<script src="<?php echo base_url() ?>NI/js/datatables.js"></script>
        
	<script src="<?php echo base_url() ?>NI/js/wl_Alert.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Autocomplete.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Breadcrumb.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Calendar.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Chart.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Color.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Date.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Editor.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_File.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Dialog.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Fileexplorer.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Form.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Gallery.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Multiselect.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Number.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Password.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Slider.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Store.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Time.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Valid.js"></script>
	<script src="<?php echo base_url() ?>NI/js/wl_Widget.js"></script>
	
	<!-- configuration to overwrite settings -->
	<script src="<?php echo base_url() ?>NI/js/config.js"></script>
		
	<!-- the script which handles all the access to plugins etc... -->
	<script src="<?php echo base_url() ?>NI/js/script.js"></script> 
        <?php }?>
</head>
