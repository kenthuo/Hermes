/**
 * Define constants to be used in the whole application. They may share the same
 * values in the server side to be consistent. 
 */
var gConstant = {
		AJAX_RESPONSE_STATUS                                  : 'status',
		AJAX_RESPONSE_REDIRECT_URL                            : 'redirectUrl',
		AJAX_RESPONSE_RELOAD_PAGE                             : 'reloadPage',
		AJAX_RESPONSE_REDRAW_PANEL                            : 'redrawPanel',
		AJAX_RESPONSE_REDRAW_PANEL_ID                         : 'panelId',	
		AJAX_RESPONSE_STATUS_SUCCESS                          : 'success',
		AJAX_RESPONSE_STATUS_ERROR                            : 'error',
		AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_ADD_FORM    : 'invalidEntityAddFormError',   
		AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_UPDATE_FORM : 'invalidEntityUpdateFormError',
		AJAX_RESPONSE_STATUS_ERROR_SIMPLE_MESSAGE             : 'simpleMessage',
		AJAX_RESPONSE_STATUS_ERROR_COMPLETE_MESSAGE           : 'completeMessage',
		
		ADD_POPUP_DOM_ID                                      : 'unique-add-popup-id',
		UPDATE_POPUP_DOM_ID                                   : 'unique-update-popup-id'
	};

/**
 * Add a parser for tablesorter plugin to be able to to sort the 
 * contents with hyperlinks. The sorting process will ignore the hyperlink tags.
 */
if (typeof $.tablesorter != 'undefined') {
	$.tablesorter.addParser({
		// set a unique id 
		id: 'links',
		is: function(s)
		{
			// return false so this parser is not auto detected 
			return false;
		},
		format: function(s)
		{
			// format your data for normalization 
			return s.replace(new RegExp(/<.*?>/),"");
		},
		// set type, either numeric or text
		type: 'text'
	});
}

/**
 * A toolbar class to be used by all of listing page in the GAM. 
 * 
 * @param listTableElemId the DOM id of the table element which holds all of 
 * entries to be control by the toolbar. 
 * @param sorterOptions see http://tablesorter.com/docs/
 * @param filterColumns array of columns can be searched by the filter.
 * @returns {Toolbar}
 */
function Toolbar(listTableElemId, sorterOptions, filterColumns) {
	this.listTableElemId = listTableElemId;
	this.sorterOptions = sorterOptions;
	this.filterColumns = filterColumns;
	
    this.init = function() {
    	//all hover and click logic for buttons
    	$(".fg-button:not(.ui-state-disabled)")
    	.hover(
    		function(){ 
    			$(this).addClass("ui-state-hover"); 
    		},
    		function(){ 
    			$(this).removeClass("ui-state-hover"); 
    		}
    	)
    	.mousedown(function(){
    		$(this).parents('.fg-buttonset-single:first').find(".fg-button.ui-state-active").removeClass("ui-state-active");
    		if( $(this).is('.ui-state-active.fg-button-toggleable, .fg-buttonset-multi .ui-state-active') ){ $(this).removeClass("ui-state-active"); }
    		else { $(this).addClass("ui-state-active"); }	
    	})
    	.mouseup(function(){
    		if(! $(this).is('.fg-button-toggleable, .fg-buttonset-single .fg-button,  .fg-buttonset-multi .fg-button') ){
    			$(this).removeClass("ui-state-active");
    		}
    	});
    	
        // call the tablesorter plugin, and apply zebra widget 
        $('#' + this.listTableElemId)
        .tablesorter(this.sorterOptions)
        .tablesorterPager({ container: $("#pager"), size: 25, positionFixed: false })
        .tablesorterFilter({ filterContainer: $("#filter-box"), filterClearContainer: $("#filter-clear"), filterColumns: this.filterColumns, filterCaseSensitive: false})	    
        ;

        $('#check-all').click(function () {
        	// listTableElemId is the DOM id of the table, no 'this' needed in this case  
        	$('#' + listTableElemId + ' tbody').find(':checkbox').attr('checked', this.checked);
        });
        
        // init dropdown of page size 
        $('select#pagesize').selectmenu({
            style:'dropdown',
            maxHeight: 160
        });        
    };	
}

/**
 * A class to provide some generic handlers for ajax form submission by using 
 * jqForm plugin.
 * 
 * @returns {GenericJqFormHandler}
 */
function GenericJqFormHandler() {
}

/**
 * Handler when form submission error happens.
 * 
 * @param xhr
 * @param textStatus
 * @param errorThrown
 */
GenericJqFormHandler.prototype.error = function(xhr, textStatus, errorThrown) {
	if (xhr.status == 0) {
		alert('You are offline!!\n Please Check Your Network.');
	} else if (xhr.status == 403) {
		alert('Requested is forbidden.');
	} else if (xhr.status == 404) {
		alert('Requested URL not found.');
	} else if (xhr.status == 500) {
		alert('Internel Server Error.');
	} else if (textStatus == 'parsererror') {
		alert('Error.\nParsing JSON Request failed.');
	} else if (textStatus == 'timeout') {
		alert('Request Time out.');
	} else if (textStatus == 'abort') {
		alert('Request Aborted.');		
	} else {
		alert('Unknow Error.\n' + xhr.responseText);
	}
};

/**
 * Handler before form submission.
 * 
 * @param formData
 * @param jqForm
 * @param options
 * @returns {Boolean}
 */
GenericJqFormHandler.prototype.beforeSubmit = function(formData, jqForm, options) {
    // formData is an array; here we use $.param to convert it to a string to display it 
    // but the form plugin does this for you automatically when it submits the data 
    var queryString = $.param(formData); 
 
    // jqForm is a jQuery object encapsulating the form element.  To access the 
    // DOM element for the form do this: 
    // var formElement = jqForm[0]; 
 
    //alert('About to submit: \n\n' + queryString); 
 
    // here we could return false to prevent the form from being submitted; 
    // returning anything other than false will allow the form submit to continue 
    return true; 
};

/**
 * Handler when the form submission returns successfully.
 * 
 * @param responseText
 * @param statusText
 * @param xhr
 * @param form
 */
GenericJqFormHandler.prototype.success = function(responseText, statusText, xhr, form) {
    // for normal html responses, the first argument to the success callback 
    // is the XMLHttpRequest object's responseText property 
 
    // if the ajaxForm method was passed an Options Object with the dataType 
    // property set to 'xml' then the first argument to the success callback 
    // is the XMLHttpRequest object's responseXML property 
 
    // if the ajaxForm method was passed an Options Object with the dataType 
    // property set to 'json' then the first argument to the success callback 
    // is the json data object returned by the server 
 
    //alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
    //    '\n\nThe output div should have already been updated with the responseText.'); 
	if (responseText.status == gConstant.AJAX_RESPONSE_STATUS_SUCCESS) {
		if (responseText[gConstant.AJAX_RESPONSE_REDRAW_PANEL_ID]) {
			// redraw a panel on the page
			$('#' + responseText[gConstant.AJAX_RESPONSE_REDRAW_PANEL_ID]).html(responseText[gConstant.AJAX_RESPONSE_REDRAW_PANEL]);	
		} else {
			var url = responseText.redirectUrl;
			document.location.href = url;
		}		
	} else if (responseText.status == gConstant.AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_ADD_FORM) {
		
		$('#' + gConstant.ADD_POPUP_DOM_ID).html(responseText[gConstant.AJAX_RESPONSE_RELOAD_PAGE]);
		
	} else if (responseText.status == gConstant.AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_UPDATE_FORM) {
		
		$('#' + gConstant.UPDATE_POPUP_DOM_ID).html(responseText[gConstant.AJAX_RESPONSE_RELOAD_PAGE]);
		
	} else if (responseText.status == gConstant.AJAX_RESPONSE_STATUS_ERROR) {
		deleteDialog = $('<div></div>')
			.html(responseText.simpleMessage)
			.dialog({
				modal: true,
				buttons: {
					Ok: function() {
						$( this ).dialog( "close" );
					}
				}
			});		
	}
};

var gGenericJqFormHandler = new GenericJqFormHandler();

/**
 * A class to provide some generic handlers for ajax submission by using jquery.
 * 
 * @returns {GenericAjaxHandler}
 */
function GenericAjaxHandler() {
}

/**
 * Handler when ajax submission error happens.
 * 
 * @param xhr
 * @param textStatus
 * @param errorThrown
 */
GenericAjaxHandler.prototype.error = function(xhr, textStatus, errorThrown) {
	if (xhr.status == 0) {
		alert('You are offline!!\n Please Check Your Network.');
	} else if (xhr.status == 403) {
		alert('Requested is forbidden.');
	} else if (xhr.status == 404) {
		alert('Requested URL not found.');
	} else if (xhr.status == 500) {
		alert('Internel Server Error.');
	} else if (textStatus == 'parsererror') {
		alert('Error.\nParsing JSON Request failed.');
	} else if (textStatus == 'timeout') {
		alert('Request Time out.');
	} else if (textStatus == 'abort') {
		alert('Request Aborted.');		
	} else {
		alert('Unknow Error.\n' + xhr.responseText);
	}
};

/**
 * Handler before ajax submission.
 * 
 * @param formData
 * @param jqForm
 * @param options
 * @returns {Boolean}
 */
GenericAjaxHandler.prototype.beforeSend = function(xhr, settings) {

};

/**
 * Handler when the ajax submission returns successfully.
 * 
 * @param responseText
 * @param statusText
 * @param xhr
 * @param form
 */
GenericAjaxHandler.prototype.success = function(data, textStatus, jqXHR) {

};

/**
 * A class to create a generic modal dialog to add or update entity form.
 *  
 * @param dialogElmId the DOM id of the dialog
 * @param dialogTitle the title of the dialog
 * @param buttonLabel the lable of the button.
 * @param submitFormElmId the DOM id of the form embedded in the dialog
 * @param width the width of the dialog.
 * @param height the height of the dialog. 
 * @returns {SimpleFormDialogFactory}
 */
function SimpleFormDialogFactory(dialogElmId, dialogTitle, buttonLabel, submitFormElmId, width, height) {
	var buttons = {}; // key of object can not take variable (literal only), so use array notation
	buttons[buttonLabel] = function() {
		var options = {  
			dataType:       'json',
	        type:           'post',
	        beforeSubmit:   gGenericJqFormHandler.beforeSubmit,  // pre-submit callback 
	        success:        gGenericJqFormHandler.success,  // post-submit callback                         
	        // validate:    validate
	        // $.ajax options can be used here too, for example: 
	        timeout:        10000,
	        error:          gGenericJqFormHandler.error
	    };
		$("#" + submitFormElmId).ajaxSubmit(options);
	};
	
	buttons['Cancel'] = function() { $( this ).dialog( "close" ); };
	
	return $("<div id='" + dialogElmId + "'></div>")
	.dialog({
		autoOpen: false,
		title: dialogTitle,
		height: height,
		width: width,
		modal: true,
		buttons: buttons,
		close: function() {
		}			
	});
}
