$(document).ready(function() {
    // initialize toolbar, sort the third column in ascending by default
	var listTableElemId = 'manufacturer-list-table'; 
	var defaultSortColumns = [[2, 0]];
	var filterColumns = [1, 2];
	// name column can contain hyperlinks, so need to specify 'links' to filter out the hyperlink tags
	// the 'links' is an addon parser for tablesorter plugin, implemented in common.js 
	var sorterOptions = { debug: false, headers: { 0: { sorter: false}, 2: {sorter: 'links'} }, sortList: defaultSortColumns, widgets: ['zebra'] };
	var toolbar = new Toolbar(listTableElemId, sorterOptions, filterColumns);
	//toolbar.init();
	// create 2 dialog instances, one for add form, and the other for update form
	// because both add and update dialogs can co-exist at the same time,
	// they can not share the same dialog
	
	// initialize the add dialog
	var addDialog = new SimpleFormDialogFactory(gConstant.ADD_POPUP_DOM_ID, 'Add Manufacturer', "Save", "entity-add-form", 600, 300);
	
	// initialize the update dialog
	var updateDialog = new SimpleFormDialogFactory(gConstant.UPDATE_POPUP_DOM_ID, 'Update Manufacturer', "Save", "entity-update-form", 600, 300);
	
	// bind add button for add action
	$('#entity-add').click(function(e) {
		e.preventDefault();
	    var url = $(this).attr('href');		
        $.get(url, function(data) {
        	addDialog.html(data).dialog('open');
        });
		return false;
	});
	
	// bind hyperlinks of names for update action
	$("a[id^=entity-of-]").each(function() {
		$(this).click(function(e) {
			e.preventDefault();
		    var url = $(this).attr('href');		
	        $.get(url, function(data) {
	        	updateDialog.html(data).dialog('open');
	        });
			return false;
		});
	});
	
	// bind delete button for delete action
	$('#entity-delete').click(function(e) {
		e.preventDefault();
	    var url = $(this).attr('href');		
		var options = {  
				dataType:       'json',
		        type:           'post',
		        url:            url,
		        beforeSubmit:   gGenericJqFormHandler.beforeSubmit, 
		        success:        gGenericJqFormHandler.success,
		        timeout:        10000,
		        error:          gGenericJqFormHandler.error
		    };
		$("#entity-list-form").ajaxSubmit(options); 	    
		return false;
	});	
	oTable = $('#manufacturer-list-table').dataTable({
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"aoColumns": [ { "bSortable": false }, null, null ],
	    "aaSorting": [ [ 2, "asc" ]]
	});	
});