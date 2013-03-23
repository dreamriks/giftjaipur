/*------------------------------------------------------------------------
# "second_second_second_second_second_second_sparky" - Joomla Template Framework
# Copyright (C) 2012 ArhiNet d.o.o. All Rights Reserved.
# License: http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
# Author: HotJoomlaTemplates.com
# Website: http://www.hotjoomlatemplates.com
-------------------------------------------------------------------------*/

(function(jQuery){  
 jQuery.fn.dropDownMenu = function(options) {  
  
  var defaults = {  
   speed: 300,  
   effect: 'fadeToggle'
  };  
  var options = jQuery.extend(defaults, options);  
      
  return this.each(function() { 

    jQuery('.nav ul').hide();
    jQuery('.nav li ul li').filter(':last-child').css('border-bottom', 'none');
    jQuery('.nav li').hover(function(){
      jQuery(this).find('ul:first').stop(true,true)[options.effect](options.speed);
      },function(){
        jQuery(this).css('position', 'relative')
                    .find('ul:first').stop(true,true)[options.effect](options.speed);
    });

  });  
 };  
})(jQuery);  