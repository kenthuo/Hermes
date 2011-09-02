$(document).ready(function() {
    // initialize toolbar, sort the third column in ascending by default
	var listTableElemId = 'beaconmodel-list-table'; 
	var defaultSortColumns = [[1, 0]];
	var filterColumns = [1, 2, 3];
	// name column can contain hyperlinks, so need to specify 'links' to filter out the hyperlink tags
	// the 'links' is an addon parser for tablesorter plugin, implemented in common.js 
	var sorterOptions = { debug: false, headers: { 0: { sorter: false}, 1: {sorter: 'links'}, 4: { sorter: false} }, sortList: defaultSortColumns, widgets: ['zebra'] };
	var toolbar = new Toolbar(listTableElemId, sorterOptions, filterColumns);
	toolbar.init();
	
	// create 2 dialog instances, one for add form, and the other for update form
	// because both add and update dialogs can co-exist at the same time,
	// they can not share the same dialog
	
	// initialize the add dialog
	var addDialog = new SimpleFormDialogFactory(gConstant.ADD_POPUP_DOM_ID, 'Add New Beacon Model', "Save", "entity-add-form", 800, 500);
	
	// initialize the update dialog
	var updateDialog = new SimpleFormDialogFactory(gConstant.UPDATE_POPUP_DOM_ID, 'Update Beacon Model', "Save", "entity-update-form", 800, 500);
		
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
		        // validate:    validate
		        // $.ajax options can be used here too, for example: 
		        timeout:        10000,
		        error:          gGenericJqFormHandler.error
		    };
		$("#entity-list-form").ajaxSubmit(options); 	    
		return false;
	});
	
	$("a[rel^='prettyPhoto']").prettyPhoto();
});
