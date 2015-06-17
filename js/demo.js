$(document).ready(function(){
    $("#register-form").validate({
        // Specify the validation rules
        rules: {
            firstname: "required",
            lastname: "required",
	    Middle:"required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
	    },
	    password_confirm : {
                required: true,
                minlength : 5,
                equalTo : "#password"
            },
            agree: "required"
        },
        
        // Specify the validation error messages
        messages: {
            firstname: " * Please enter your first name",
            lastname: " * Please enter your last name",
            Middle: " * Please enter your Middle name",

            password: {
                required: " * Please provide a password",
                minlength: " * Your password must be at least 5 characters long"
            },

	    password_confirm: {
		required: " * You must confirm your password",
		minlength: " * Your password must contain more than 5 characters",
		equalTo: " * Please enter the same password as above" // custom message for mismatched passwords
	    },
	    
            email: " * Please enter a valid email address",
            agree: " * Please accept our policy"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });
	
$("#divto").on("keypress", "#txtto", function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	var i=1;
	if(keycode == '13'){
		$("#divto").append("<br> TO: <input type='text' name='txtto' id='txtto' />");
		$( "#divto" ).focus();
	}
});

$('#chkmarkall').click(function(event) { 
    if(this.checked) {
	$("input:checkbox").prop('checked', true);
	 $("#tblviewdata tr").css("background-color","#B8B8B8"); 
	} else {
			$("input:checkbox").prop('checked', false);
        	 $("#tblviewdata tr").css("background-color","white"); 

	  }
    });
   
//~ $("#tblviewdata tr a").click(function() {
	//~ $("#tblviewdata tr").css("background-color", "white"); 
//~ });
	
});
