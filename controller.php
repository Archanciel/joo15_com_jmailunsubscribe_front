<?php 

/**
 * Joomla! 1.5 component JMailUnsubscribe
 * Code generated by : Joomla! 1.5 MVC Component Code Generator
 * http://www.hopper-intermedia.de
 * date generated: 2014-12-152014-12-15
 * @author Jean-Pierre Schnyder
 * @package com_jmailunsubscribe
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 **/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.controller' );
 /**
  * JMailUnsubscribe Component Controller
  *
  * @package JMailUnsubscribe
  */

class JMailUnsubscribeController extends JController {
	/**
	 * Method to show a JMailUnsubscribe view
	 */
	function display() {
		// Set a default view if none exists
		if ( ! JRequest::getCmd( 'view' ) ) {
			JRequest::setVar('view', 'categories' );
		}
		//update the hit count for the item
  	if(JRequest::getCmd('view') == 'item') {
			$model =& $this->getModel('item');
			$model->hit();
		}
		parent::display();
	}
}