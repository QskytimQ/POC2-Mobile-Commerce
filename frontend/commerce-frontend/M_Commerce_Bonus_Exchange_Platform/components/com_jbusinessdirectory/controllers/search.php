<?php

/*------------------------------------------------------------------------
# JBusinessDirectory
# author CMSJunkie
# copyright Copyright (C) 2012 cmsjunkie.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.cmsjunkie.com
# Technical Support:  Forum - http://www.cmsjunkie.com/forum/j-businessdirectory/?p=1
-------------------------------------------------------------------------*/

defined( '_JEXEC' ) or die( 'Restricted access' );

class JBusinessDirectoryControllerSearch extends JControllerLegacy
{
	/**
	 * constructor (registers additional tasks to methods)
	 * @return void
	 */
	 
	function __construct()
	{
		JRequest::setVar("requestType","name");
		parent::__construct();
	}

	function showCompaniesFromCategory(){
		parent::display();
	}
	
	function searchCompaniesByName(){		
		parent::display();
	}
	
	function searchCompaniesByPhone(){
		JRequest::setVar("requestType","phone");
		parent::display();
	}

	function getRegionsByCountryAjax() {
		$countryId = JRequest::getVar('countryId');
		$model = $this->getModel('Search');
		$result = $model->getRegionsByCountryAjax($countryId);

		/* Send as JSON */
		header("Content-Type: application/json", true);
		echo json_encode($result);
		exit;
	}

	function getCitiesByRegionAjax() {
		$region = JRequest::getVar('region');
		$model = $this->getModel('Search');
		$result = $model->getCitiesByRegionAjax($region);

		/* Send as JSON */
		header("Content-Type: application/json", true);
		echo json_encode($result);
		exit;
	}

	function getCitiesByCountryAjax() {
		$countryId = JRequest::getVar('countryId');
		$model = $this->getModel('Search');
		$result = $model->getCitiesByCountryAjax($countryId);

		/* Send as JSON */
		header("Content-Type: application/json", true);
		echo json_encode($result);
		exit;
	}
}