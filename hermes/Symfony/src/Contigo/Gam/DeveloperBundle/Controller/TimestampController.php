<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Contigo\Gam\DeveloperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Contigo\Gam\Constant;

class TimestampController extends Controller
{
    public function indexAction()
    {    	
    	$epoch = time();
    	$localDateTime = date("D, M j Y G:i:s \G\M\TO T", $epoch);
    	$gmtDateTime = gmdate("D, M j Y G:i:s T", $epoch);
    	$now = $this->gmtgetdate($epoch);
    	$mm = $now['mon'];
    	$dd = $now['mday'];
    	$yyyy = $now['year'];
    	$hh = $now['hours'];
    	$ii = $now['minutes'];
    	$ss = $now['seconds'];
        return $this->render('ContigoGamDeveloperBundle:Timestamp:index.html.twig', 
        	array(
        		'epoch'         => $epoch,  
        		'localDateTime' => $localDateTime,
        		'gmtDateTime'   => $gmtDateTime,
        		'mm'            => $mm,
        		'dd'            => $dd,
        		'yyyy'          => $yyyy,
        		'hh'            => $hh,
        		'ii'            => $ii,
        		'ss'            => $ss,
        	));       
    }
    
    public function epochToDateTimeAction()
    {   
    	$request = $this->getRequest();
    	$epoch = $request->request->get('epoch');
    	$panelId = $request->request->get('panel_id'); // the DOM id of the container will be refreshed
    	$epoch = is_null($epoch) ? time() : $epoch;
    	$localDateTime = date("D, M j Y G:i:s \G\M\TO T", $epoch);
    	$gmtDateTime = gmdate("D, M j Y G:i:s T", $epoch);
    	
        $panel = $this->renderView('ContigoGamDeveloperBundle:Timestamp:epoch_to_datetime.html.twig', 
        	array(
        		'epoch'         => $epoch,  
        		'localDateTime' => $localDateTime,
        		'gmtDateTime'   => $gmtDateTime,
        	));  
		return new Response(json_encode(array(
				Constant::AJAX_RESPONSE_REDRAW_PANEL_ID => $panelId,
				Constant::AJAX_RESPONSE_REDRAW_PANEL    => $panel,
				Constant::AJAX_RESPONSE_STATUS          => Constant::AJAX_RESPONSE_STATUS_SUCCESS,
			)));        	     
    } 

    public function dateTimeToEpochAction()
    {    	
    	$request = $this->getRequest();
    	$mm = $request->request->get('mm') ? $request->request->get('mm') : 1;
    	$dd = $request->request->get('dd') ? $request->request->get('dd') : 1;
    	$yyyy = $request->request->get('yyyy') ? $request->request->get('yyyy') : 1970;
    	$hh = $request->request->get('hh') ? $request->request->get('hh') : 0;
    	$ii = $request->request->get('ii') ? $request->request->get('ii') : 0;
    	$ss = $request->request->get('ss') ? $request->request->get('ss') : 0;
    	$panelId = $request->request->get('panel_id'); // the DOM id of the container will be refreshed
    	
    	$epoch = mktime($hh, $ii, $ss, $mm, $dd, $yyyy);
    	
        $panel = $this->renderView('ContigoGamDeveloperBundle:Timestamp:datetime_to_epoch.html.twig', 
        	array(
        		'epoch'         => $epoch,
        		'mm'            => $mm,
        		'dd'            => $dd,
        		'yyyy'          => $yyyy,
        		'hh'            => $hh,
        		'ii'            => $ii,
        		'ss'            => $ss,
        	));    
		return new Response(json_encode(array(
				Constant::AJAX_RESPONSE_REDRAW_PANEL_ID => $panelId,
				Constant::AJAX_RESPONSE_REDRAW_PANEL    => $panel,
				Constant::AJAX_RESPONSE_STATUS          => Constant::AJAX_RESPONSE_STATUS_SUCCESS,
			)));         	   
    }     
    
    /**
     * 
     * Get the date information in GMT. Similar to PHP's getdate() function which uses 
     * local time.
     * 
     * @param integer $ts epoch time stamp.
     */
	private function gmtgetdate($ts = null) { 
		$k = array(
				'seconds',
				'minutes',
				'hours',
				'mday',
				'wday',
				'mon',
				'year',
				'yday',
				'weekday',
				'month',
				0); 
		return(array_combine($k, explode(":", 
                gmdate('s:i:G:j:w:n:Y:z:l:F:U', is_null($ts) ? time() : $ts)))); 
        }
	}
