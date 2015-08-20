$(document).ready(function() {

	//form submission:
	$("#submit").click(function(){
		return false;
	});
	
	$("#submit").click(function(){					   				   
		$(".error").hide();
		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		var fnameVal = $("#firstname").val();
		var lnameVal = $("#lastname").val();
		var emailVal = $("#email").val();
		var phoneVal = $("#phone").val();
		var officeVal = $("#office").val();
		var dietVal = $("#diet").val();
		var roommateVal = $("#roommate").val();
//		var flightsVal = $("#flights").val();
//		var flightsVal = $('input[name=flights]:checked', '#regform').val()		
		var busVal = $('#bus').val();
		//var activityVal = $("#activity").val();		
		var activityVal = $('input[name=activity]:checked', '#regform').val()
		var shirtVal = $("#shirtsize").val();
		var jacketVal = $("#jacketsize").val();
		var shoesVal = $("#shoesize").val();


		//validation
		if(fnameVal == '') {
			$("#label-first").css('color', '#c00');
			hasError = true;
			$(window).scrollTop(0);
		}

		if(lnameVal == '') {
			$("#label-last").css('color', '#c00');
			hasError = true;
			$(window).scrollTop(0);
		}

		if(emailVal == '') {
			$("#label-email").css('color', '#c00')
			hasError = true;
		} else if(!emailReg.test(emailVal)) {	
			$("#label-email").css('color', '#c00')
			hasError = true;
		}	

		if(phoneVal == '') {
			$("#label-phone").css('color', '#c00')
			hasError = true;
			$(window).scrollTop(0);
		}	

		if(officeVal == '') {
			$("#label-office").css('color', '#c00')
			hasError = true;
			$(window).scrollTop(0);
		}		
		
		if(busVal == '') {
			$("#label-bus").css('color', '#c00')
			hasError = true;
			$(window).scrollTop(0);
		}			

		if(activityVal == null) {
			$("#activity-header").after('<p class="error">Please choose an activity.</p>');
			hasError = true;
			$(window).scrollTop(0);
		}	
		
		if(activityVal == 'Opt2') {
			
			
			var cnt = $("input[name='opt2-activity']:checked").length;
			//alert(cnt);
			var maxAllowed = 2;
			
			if (cnt != maxAllowed){
					$("#activity-header").after('<p class="error">Please choose 2 activities.</p>');
					hasError = true;
					$(window).scrollTop(0);
			} else{
			
				var values = $("input[name='opt2-activity']:checked").map(function(){
					return $(this).val();
				}).get();


				var activity_1Val = values[0];
				var activity_2Val = values[1];
				
			//	alert(activity_1 + ", " + activity_2);
			}
		}
		
		if(activityVal == 'Opt1'){
			
			var activity_1Val = 'Cross-Country Skiing';
			var activity_2Val = '';
		}

		if(shirtVal == '') {
			$("#label-shirt-size").css('color', '#c00');
			hasError = true;
			$(window).scrollTop(0);
		}				

		if(jacketVal == '') {
			$("#label-jacket-size").css('color', '#c00');
			hasError = true;
			$(window).scrollTop(0);
		}	

		if(shoesVal == '') {
			//$("#shoesize").after('<span class="error">Please choose a size.</span>');
			$("#label-shoe-size").css('color', '#c00');
			
			hasError = true;
			$(window).scrollTop(0);
		}	

					
		if(hasError == false) {
			//$(this).hide();
			//$("#sendEmail li.buttons").append('<img src="img/loading.gif" alt="Loading" id="loading" />');
			$(this).hide();
			$("#sendemail").append('<img style="height: 15px; width: 128px;" src="/images/ajax-loader.gif" alt="Sending" id="sending" />');

			$.post("sendEmail.php",
   				{ fname: fnameVal,
   				  lname: lnameVal, 
   				  email: emailVal,
   				  phone: phoneVal,
   				  office: officeVal,
   				  diet: dietVal,
   				  roommate: roommateVal,
   				  bus: busVal,
   				  activity: activityVal,
   				  activity_1: activity_1Val,   				  
   				  activity_2: activity_2Val,   				  
   				  shirt: shirtVal,
   				  jacket: jacketVal,
   				  shoes: shoesVal
   				},
   					function(data){
						$("#regform").slideUp("normal", function() {				  						
																					
							$("#regform").before("<h2>Thank You</h2><br /><p>Your submission has been received. You will receive an email from us containing all of your registration info.</p><br />");											
						});
   					}
				 );
		}			
		
		return false;
	});

});	