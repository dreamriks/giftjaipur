<?php
/**
 * @version		$Id: text.php 15576 2010-03-25 12:43:26Z louis $
 * @package		Joomla.Framework
 * @subpackage	Form
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

/**
 * Form Field class for the Joomla Framework.
 *
 * @package		Joomla.Framework
 * @subpackage	Form
 * @since		1.6
 */
class JFormFieldWidth extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	1.6
	 */
	protected $type = 'width';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
	    global $TEMPLATE_FOLDER;
        $document = JFactory::getDocument();
		$btnimgurl = JURI::root(1) . '/templates/'.$TEMPLATE_FOLDER.'/images/ipbutton.png';		
		
		$this->value = htmlspecialchars(html_entity_decode($this->value, ENT_QUOTES), ENT_QUOTES);
	    $OUT= 
		'<div class="width_value" >
		<input type="hidden" name="'.$this->name.'" id="'.$this->id.'" value="'.$this->value.'" />
        
		<table>
		<tr>
		<td>
		<span id="disp'.$this->id.'" style="float:left;width:40px;">'.$this->value.'px</span>
		</td>
		<td>
		<div class="width" id="width'.$this->id.'"  > 
		
		</div>
		</td>
		</tr>
		</table>
		</div>';
		return $OUT;
	}
}

?>