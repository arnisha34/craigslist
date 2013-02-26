$(function(){
	var baseUrl = $('base').attr('href');
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
		$.ajax({
			  url: baseUrl+"index.php/post/editPost",
			  type: "POST",
			  dataType: "json",
			  data: {"postId":$(this).attr('value')},
			  success: function(response){
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
			  	//var json = $.parseJSON(response[0]);
			  	$('#edit_dialog').show();
			  	
				$('#edit_dialog #p_title').val(response.title);
				$('#edit_dialog #p_email').val(response.email);
				$('#edit_dialog #p_location').val(response.location);
				$('#edit_dialog #p_price').val(response.price);
				$('#edit_dialog #p_id').val(response.postId);
				$('#edit_dialog #p_desc').val(response.description);
			  	console.log(response);
			  }

		});
		
	});
	$('.notification').toggle();	
	
	$('#save_changes').on('click', function(e){
		e.preventDefault();
		var edit_data = {
			'title' : $('#p_title').val(),
			'description' : $('#p_desc').val(),
			'email': $('#p_email').val(),
			'postId': $('#p_id').val(),
			'location': $('#p_location').val(),
			'price': $('#p_price').val()
		}
		$.ajax({
			  url: baseUrl+"index.php/post/savePost",
			  type: "POST",
			  dataType: "json",
			  data: edit_data,
			  success: function(response){
			  	console.log(response);
			  	if(response){
			  		$('.notification').css("visibility","visible");
			  	}
			  }
		});
		$( "#edit_dialog" ).on( "dialogclose", function( event, ui ) {
			 location.reload();
			 $('.notification').toggle();	
		});
	
	})
	$('.delete_link').on('click', function(e){
		e.preventDefault();
		
		$.ajax({
			  url: baseUrl+"index.php/post/deletePost",
			  type: "POST",
			  dataType: "json",
			  data: {"postId":$(this).attr('value')},
			  success: function(response){
			  	console.log(response);
			  	
			  }
		});
	})


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