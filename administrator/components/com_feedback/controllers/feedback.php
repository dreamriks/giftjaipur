<?php
/**
 * @version		1.2 feedback $
 * @package		feedback
 * @copyright	Copyright © 2010 Mertonium. All rights reserved.
 * @license		GNU/GPL
 * @author		Mertonium
 * @author mail	john@mertonium.com
 * @website		http://mertonium.com
 *
 *
 * @MVC architecture generated by MVC generator tool at http://www.alphaplug.com
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class feedbackControllerFeedback extends feedbackController
{
	function __construct() {
		parent::__construct();
		// Register Extra tasks
		$this->registerTask( 'add','edit');
	}
 
	function display() {
		$model = $this->getModel('feedback');		
		JRequest::setVar('view','feedback');
		JRequest::setVar('model',$model);
		parent::display();
	}
 
	function edit() {
		$model = $this->getModel('feedback');
 
		JRequest::setVar('model',$model);
		JRequest::setVar('view','feedbackentry');
		JRequest::setVar('layout','default_form');
		JRequest::setVar('hidemainmenu', 1);	 
		parent::display();
	}
 
	function save() {
		$model = $this->getModel('feedback');
		$msg = ($model->store()) ? JText::_( 'Saved successfully' ) : JText::_( 'Error Saving' );	
		$link = 'index.php?option=com_feedback';
		$this->setRedirect($link, $msg);
	}
 
	function remove() {
		$model = $this->getModel('feedback');		
		$msg = (!$model->delete()) ? JText::_( 'Error One or more record could not be deleted' ) : JText::_( 'Records deleted' );
 
		$this->setRedirect( 'index.php?option=com_feedback', $msg );
	}
 
	function cancel() {
		$msg = JText::_( 'Operation Cancelled' );
		$this->setRedirect( 'index.php?option=com_feedback', $msg );
	}

}
?>