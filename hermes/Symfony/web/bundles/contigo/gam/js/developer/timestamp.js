$(document).ready(function() {
	$('#epoch-to-datetime-btn').click(function(e) {
		e.preventDefault();
		var options = {  
				dataType:       'json',
		        type:           'post',
		        beforeSubmit:   gGenericJqFormHandler.beforeSubmit, 
		        success:        gGenericJqFormHandler.success,
		        timeout:        10000,
		        error:          gGenericJqFormHandler.error
		    };
		$("#epoch-to-datetime-form").ajaxSubmit(options);
	});
	$('#datetime-to-epoch-btn').click(function(e) {
		e.preventDefault();
		var options = {  
				dataType:       'json',
		        type:           'post',
		        beforeSubmit:   gGenericJqFormHandler.beforeSubmit, 
		        success:        gGenericJqFormHandler.success,
		        timeout:        10000,
		        error:          gGenericJqFormHandler.error
		    };
		$("#datetime-to-epoch-form").ajaxSubmit(options);
	});
});
