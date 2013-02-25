$(function(){

 /*-------------Member & Guest Modal-------------*/

	$('#guest_dialog p').hide();	
	$('#guest_dialog a').hide();
	$('#combobox').hide();
	$('#guest_dialog select').hide();
	$('#post_info').hide();
	
	
	$('#member_dialog p').hide();	
	$('#member_dialog a').hide();
	$('#combobox').hide();
	$('#member_dialog select').hide();
	$('#post_info').hide();
	$('#post_type').hide();
	$('#job1_category').hide();
	
	
	$('#edit_dialog').hide();

	$('.modal').on('click', function(e) {
		
		e.preventDefault();
		
		$('#guest_dialog p').show();
		$('#guest_dialog a').show();
		$('#guest_dialog select').show();
		
		$('#member_dialog p').show();
		$('#member_dialog a').show();
		$('#member_dialog select').show();
		$('#post_type').show();
		$('#job1_category').show();
		
		$('#combobox').show();
		$('#post_info').show();
		 
		var modal = $('#member_dialog').dialog({
			
			height: 500,
			width: 575,
			
			show:{
				effect: 'slideDown',
				duration: 800
			},
			
			hide:{
				effect: 'slideUp',
				duration: 400
			},
			
			modal: true,

			resizable: false,	      
		})
		
	})
	
	
	$('.modal').on('click', function(e) {
		
		e.preventDefault();
		
		$('#guest_dialog p').show();
		$('#guest_dialog a').show();
		$('#guest_dialog select').show();

		$('#combobox').show();
		$('#post_info').show();
		 
		var modal = $('#guest_dialog').dialog({
			
			height: 300,
			width: 650,
			
			show:{
				effect: 'slideDown',
				duration: 800
			},
			
			hide:{
				effect: 'slideUp',
				duration: 400
			},
			
			modal: true,

			resizable: false,	      
		})
		
	});
	
	
	$('.edit_modal').on('click', function(e){
		e.preventDefault();
		$('#edit_dialog').show();
		
		var edit_modal = $('#edit_dialog').dialog({
				
				height: 500,
				width: 600,
				
				show:{
					effect: 'slideDown',
					duration: 800
				},
				
				hide:{
					effect: 'slideUp',
					duration: 400
				},
				
				modal: true,
	
				resizable: false,	      
			})
	});
	
	
	 /*-------------Profile dropdown-------------*/
	 
	 $(".btmiddle").click(function(e) {
	 	
	 	e.preventDefault();
	 	
        if ($(".btmiddle").hasClass("bt")) {
            $(".btmiddle").removeClass("bt");
            $(".btmiddle").addClass("clicked");
            $("#menu").slideDown();
        } else {
            $(".btmiddle").removeClass("clicked");
            $(".btmiddle").addClass("bt");
            $("#menu").slideUp();
        }
        
       /*-------------Drag n Drop-------------*/
        
        $("#dragndrop").dropzone({url: "localhost:8888/craigslist/index.php/profile.php" });
		// Dropzone class:
		var myDropzone = new Dropzone($(".dropzone"), { url: "localhost:8888/craigslist/index.php/profile.php"})
               
    });
    
     /*-------------Accordion-------------*/
   
});