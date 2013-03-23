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
class JFormFieldHotcolor extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	1.6
	 */
	protected $type = 'hotcolor';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
	    $this->value = htmlspecialchars(html_entity_decode($this->value, ENT_QUOTES), ENT_QUOTES);
	    $OUT= '';
	    ob_start();
		
		if(stripos($this->value,'#') < 0 && stripos($this->value,'transparent') < 0){
		  $this->value = "#".$this->value;
		}
		
		?>
			<input type="text" name="<?php echo $this->name; ?>" id="<?php echo $this->id; ?>" style="background-color:<?php echo $this->value ?>;" class="pckcolor" value="<?php echo $this->value; ?>" />
		<?php
		$OUT = ob_get_contents();
        ob_end_clean();		
        return $OUT;
		
		
		
		
		
	
	}
}
