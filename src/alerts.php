<?php

namespace Bootstrap;

/**
 * 
 */


class Alerts extends Bootstrap 
{
	private $type;
	private $text;
	private $route;

	/**
	 * @return alerts
	 * @param type primary
	 * @param type secondary 
	 * @param type success
	 * @param type danger
	 * @param type warning
	 * @param type info
	 * @param type light
	 * @param type dark
	 */

	Public function setAlerts($type, $text)
	{
		$alerts = '<div class="alert alert-'.$type.'" role="alert">
		'.$text.'</div>';
		
		return $alerts;
	}

	/**
	 * @param route link
	 * @param text text
	 * @return link 
	 */

	public function setAlertsLink($route, $text)
	{
		$link = '<a href="'.$route.'" class="alert-link">'.$text.'</a>';
		return $link;
	}

	/**
	 * @param route link
	 * @param text text
	 * @param type primary
	 * @param type secondary 
	 * @param type success
	 * @param type danger
	 * @param type warning
	 * @param type info
	 * @param type light
	 * @param type dark
	 * @return alerts & link 
	 */
	Public function getAlertsLink($type, $text, $route = null)
	{
		$alerts = '<div class="alert alert-'.$type.'" role="alert">
		'.$text. $route.'</div>';
		
		return $alerts;
	}

	/**
	 * Alerts on Dismissing
	 * @param route link
	 * @param text text
	 * @param type primary
	 * @param type secondary 
	 * @param type success
	 * @param type danger
	 * @param type warning
	 * @param type info
	 * @param type light
	 * @param type dark
	 * @return alerts & link 
	 */
	public function setAlertsDimissing($type, $text, $route = null)
	{
		$dimmis = '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
		'.$text. $route.'
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
		  </div>';
		  
		  return $dimmis;
	}
}