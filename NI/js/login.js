$(document).ready(function() {
						   
						   
	var $body = $('body'),
		$content = $('#content'),
		$form = $content.find('#loginform');
	
		
		//IE doen't like that fadein
		//if(!$.browser.msie) $body.fadeTo(0,0.0).delay(500).fadeTo(1000, 1);
		
		
		$("input").uniform();
		

		$form.wl_Form({
			//status:true,
			onBeforeSubmit: function(data){
                               
				$form.wl_Form('set','sent',true);
				if(data.username && data.password){
                         
                        // alert(data);
                                     //  return false;
				}else{
					$.wl_Alert('Quien es usted?','info','#content');
                                        return false;
				}
				//return false;

			}, onSuccess: function(data){
                           // alert(data);
                           
                           // $('#content').html(data);
                           //  alert(data);
                         // alert(data);
                           if(data =='true'){
                               //alert(data);
                               location.href="nadairreal/dashboard/3/1";   
                           }else if(data =='grupoa'){
                               
                                location.href="/ciudadela/nadairreal/grupoa";   
                           }else{
                                $.msg("Usted no es un usuario registrado!");
                           }
                            // 
                        }

						  
		});
		
		
});