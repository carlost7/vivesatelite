	   $(document).ready(
				function(){
					
/*					$('div#portfolio').innerfade({
						speed: 500,
						timeout: 1000,					
						type: 'random',
						containerheight: 'auto'
					});	*/	
					
					$('div#portfolio').cycle({     
						/*fx:      'fade',*/
						fx:      'scrollLeft',																					
						speed:    1000,
						timeout:  5000,
						pause:  1 ,
						next:   '#next2',
						prev:   '#prev2' 						
					});										
			});