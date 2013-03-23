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
class JFormFieldHotexport extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var		string
	 * @since	1.6
	 */
	protected $type = 'hotexport';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since	1.6
	 */
	protected function getInput()
	{
	    $OUT= '';
	    ob_start();
		
		$jbase = str_ireplace("/administrator", "", JURI::base());
		
		?>
			
			<table style="width:300px;height:30px;clear:both;">
			<tr>
			<td >
			<label for="<?php echo $this->id; ?>"><?php echo jText::sprintf("TPL_FIRST_FIRST_FIRST_SPARKY_EXPORT_NAME") ?></label>
			</td>
			
			<td  >
			<input style="width:180px;" onkeyup="document.getElementById(this.id + '_alias').innerHTML = this.value.toLowerCase().replace(/ /g,'_');return false;" type="text" name="FIRST_FIRST_FIRST_SPARKY_EXPORT_NAME" id="<?php echo $this->id; ?>"  value="" />
		    
			
			
			</td>
			
			
			<td>
			<button onclick="doExport('<?php echo $jbase; ?>','templates/first_first_first_first_first_first_sparky/elements/doexport.php',jQuery('#<?php echo $this->id; ?>').val());return false;" >Export</button>
			
			</td>
			<td>
			<span style="width:120px;color:#777777;font-size:9px;" id="<?php echo $this->id; ?>_alias"></span>
			</td>
			</tr>
			
			</table>
			
		<?php
		$OUT = ob_get_contents();
        ob_end_clean();		
        return $OUT;
		
		
		
		
		
	
	}
}
