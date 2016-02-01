/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.

http://jquery.malsup.com/block/#demos
 */


/*==================================================================================<NOVEDADES>*/

$(document).ready(function() { 
   
  
    $('body').fadeIn(1200);
 

    
            
    $('#fin').click(function(){
        $.unblockUI();
    });
    
    $('#rta').css('display', 'none')
    $('.colaborar').click(function() { 
     
     
      /* $('#hola').hide('fast',loadContent);
		$('#load').remove();
		$('#page').append('<span id="load">...LOADING...</span>');
		$('#load').fadeIn('fast');
		$('#hola').css({display:"none"});	  

	function loadContent() { 
	   
	        $('.listar').load("includes/ajax_listar.php" ,hideLoader)
		}
		
		function hideLoader() {
			$('#load').fadeOut('fast');
			
		}
        */
       
     /* $.ajax({
      type: "POST",	
      url: 'includes/ajax_form_modificar.php',
      //data: "datos=John",
      data: ({datos : this.getAttribute('id')}),
      success: function(data) {
	       $.blockUI({
			message: $('#div_oculto').html(data)
        */    
       
       
       
       
       $.blockUI({
            message: $('#rta'),
            
            
            
             css: { 
                width: '550px', 
               // top: '10px', 
                //left: '', 
                //right: '10px', 
                border: 'none', 
                padding: '12px', 
                //backgroundColor: '#000', 
                '-webkit-border-radius': '10px', 
                '-moz-border-radius': '10px', 
                //opacity: .8, 
                //color: '#fff' 
            } 
        }); 
 
    // setTimeout($.unblockUI, 2000); 
    }); 
}); 