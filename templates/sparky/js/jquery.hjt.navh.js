// ﻿/*
// * Hot Joomla Templates - jQuery Accordation menu 1.0.0
// *
// * Copyright 2010,(http://www.hotjoomlatemplates.com)
// *
// *
// * Depends:
// *   jquery.ui.core.js
// *   jquery.ui.widget.js
// */


// (function(jQuery, undefined) {
	

//     jQuery.widget("hjt.navh", {
//         options: {
//             subpanelspeed:400
//         },
		
//         _create: function() {
//             var self = this,
//                 options = self.options;
//             var el = jQuery(this.element);
// 			var currW =0;
		
//  		    el.find('> LI').each(function(ind){
// 			  var Item =jQuery(this).find('> UL');
// 			  if(Item[0]){
// 			   Item.css('width',String(Item.innerWidth() - currW) + "px");
// 			  }
// 			  currW += jQuery(this).innerWidth();
// 			});
			
// 			el.find('> LI > UL > LI').mouseenter(function(){
// 			  jQuery(this).find('> ul:::not(visible)').slideDown(options.subpanelspeed);
// 			});
			
// 			el.find('> LI > UL > LI').mouseleave(function(){
// 			  jQuery(this).find('> ul:visible').slideUp(options.subpanelspeed / 2);
// 			});
			
// 			el.find('> LI > UL > LI > UL LI').each(function(ind){
// 			  if(jQuery(this).find('> ul')[0])
// 			   jQuery(this).find('> ul').insertBefore(jQuery(this).find('> a'));
// 			});
			
// 			el.find('> LI > UL > LI > UL LI').mouseenter(function(){
// 			  jQuery(this).find('> ul:::not(visible) > LI').innerWidth(jQuery(this).innerWidth());
			  
// 			  jQuery(this).find('> ul:::not(visible)').css(
// 			  {
// 			    'marginLeft': String(jQuery(this).innerWidth()) + 'px'//,
// 				//'width': String(jQuery(this).innerWidth()) + 'px'  
// 			  });
// 			  jQuery(this).find('> ul:::not(visible)').animate({width:'toggle'},options.subpanelspeed);
// 			});
			
// 			el.find('> LI > UL > LI > UL LI').mouseleave(function(){
// 			  jQuery(this).find('> ul:visible').animate({width:'toggle'},options.subpanelspeed / 2);
// 			});
			
			
// 			el.find('> LI').mouseleave(function(){
// 			  jQuery(this).find('> UL > LI > UL[style*="block"]').css('display','none');
// 			});
			

//         },

//         _setOption: function(key, value) {
//             this.options[key] = value;
//         },

//         destroy: function() {
//             jQuery(this.element).html(this._baseHTML);
//             jQuery.Widget.prototype.destroy.call(this);
//         }
//     }); // widget


	
// })(jQuery);
