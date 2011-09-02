$(document).ready(function() {
	$('select[name$="[customer]"]').change(function(e) {
		e.preventDefault();
		var selectedCustomerId = $(this).val();
		var url = $('#entity-form').attr('action') + 'change_customer/' + selectedCustomerId;
		var options = {  
				dataType:       'json',
		        type:           'post',
				url:            url,
				beforeSend:     gGenericJqFormHandler.beforeSubmit,
				success:        gGenericJqFormHandler.success,
				timeout:        10000,
				error:          gGenericJqFormHandler.error
		    };
		$.ajax(options); // no need to use jquery form		
	});
	$('#manage-account-btn').click(function(e) {
		e.preventDefault();
		var options = {  
				dataType:       'json',
		        type:           'post',
		        beforeSubmit:   gGenericJqFormHandler.beforeSubmit, 
		        success:        gGenericJqFormHandler.success,
		        timeout:        10000,
		        error:          gGenericJqFormHandler.error
		    };
		$("#entity-form").ajaxSubmit(options);
	});
});
