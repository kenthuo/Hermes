<?php
namespace Contigo\Gam;

class Constant
{
    const AJAX_RESPONSE_STATUS = 'status';
    const AJAX_RESPONSE_REDIRECT_URL = 'redirectUrl';
    const AJAX_RESPONSE_RELOAD_PAGE = 'reloadPage';
    const AJAX_RESPONSE_REDRAW_PANEL = 'redrawPanel';
    const AJAX_RESPONSE_REDRAW_PANEL_ID = "panelId";
    const AJAX_RESPONSE_STATUS_SUCCESS = "success";
    const AJAX_RESPONSE_STATUS_ERROR = "error";
    const AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_ADD_FORM = "invalidEntityAddFormError";   
    const AJAX_RESPONSE_STATUS_ERROR_INVALID_ENTITY_UPDATE_FORM = "invalidEntityUpdateFormError";
    const AJAX_RESPONSE_STATUS_ERROR_SIMPLE_MESSAGE = "simpleMessage";
    const AJAX_RESPONSE_STATUS_ERROR_COMPLETE_MESSAGE = "completeMessage";
   
    private static $beaconmodelType = array(
			"asset"   => 'Asset', 
			"phone"   => 'Phone', 
			"vehicle" => 'Vehicle'
    	);
    private static $beaconmodelManager = array(
			'AIRCEPT'         => 'AIRCEPT', 
			'ANYDATA'         => 'ANYDATA', 
			'BLACKBERRY'      => 'BLACKBERRY',	
			'DEWALT'          => 'DEWALT',   
			'ENFORALJMT'      => 'ENFORALJMT',  
			'ENFORAMT'        => 'ENFORAMT', 
			'ENFORAMTGL'      => 'ENFORAMTGL', 
			'ENFORAMTGU'      => 'ENFORAMTGU',   
			'EVOLUTION'       => 'EVOLUTION',     
			'FOLLOWIT'        => 'FOLLOWIT', 
			'GENERIC_HANDSET' => 'GENERIC_HANDSET',   
			'GLOBALTRACK'     => 'GLOBALTRACK', 
			'IDEN_TCP'        => 'IDEN_TCP', 
			'IVR'             => 'IVR',    
			'MICROTRACKER'    => 'MICROTRACKER', 
			'PARROT'          => 'PARROT', 
			'PORTMAN_GT'      => 'PORTMAN_GT', 
			'PORTMAN_PTU'     => 'PORTMAN_PTU',    
			'SENDUM'          => 'SENDUM', 
			'SIM'             => 'SIM', 
			'SIMULATOR'       => 'SIMULATOR', 
			'SKYPATROL'       => 'SKYPATROL',
			'SPOT'            => 'SPOT', 
			'STEPP1'          => 'STEPP1', 
			'STEPP2'          => 'STEPP2', 
			'TRIMTRAC'        => 'TRIMTRAC',
			'TRIMTRAC15'      => 'TRIMTRAC15', 
		);
		
	private static $beaconmodelColor = array(
			"black" => "Black", 
	 		"brown" => "Brown", 
	 		"grey"  => "Grey", 
	 		"white" => "White",
	 	);	

	private static $currency = array(
			"CDN$" => "CDN$", 
			"USD$" => "USD$",
		);
		
	public static function getBeaconmodelManager() {
        return self::$beaconmodelManager;
    }	

	public static function getBeaconmodelType() {
        return self::$beaconmodelType;
    } 

	public static function getBeaconmodelColor() {
        return self::$beaconmodelColor;
    }

	public static function getCurrency() {
        return self::$currency;
    }    
}
?>