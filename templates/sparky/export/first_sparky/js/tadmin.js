var TabsInit = false;
var HORTabsInit = false;
var surogatID = 0; 

function getSurogateID(){
  surogatID++;
  return String(surogatID);
}

function doExport(base,handlerurl,withName){

    if(!withName || withName == '' || withName == undefined){
	   alert('Please enter a valid name for template!');
	   return;
	}

	jQuery.ajax({
	  url: base + handlerurl,
	  type: 'POST',
	  data: jQuery('#style-form').serialize(),
	  cache: false
	}).done(function( html ) {
	   var vals = html.split("|");
	   if(vals[0] == "OK"){
	        window.location = base + "templates/first_first_first_first_first_first_sparky/export/" + vals[1]; 
	   }else{
	   	alert(html);
	   }
	   
	});
	return false;
}

jQuery(document).ready(function(){

    if(jQuery("nav.navbar")[0]){
	   //joomla 3
	    var optContainer = jQuery('DIV.tab-pane#options'); 
	    var menu = jQuery("<ul id='tadmin_menu'></ul>").prependTo(optContainer);
		
		var fieldpanels = optContainer.find('.accordion-group');
		fieldpanels.each(function(ind){
			menu.append(jQuery('<li><a href="#tadmin_tab' + String(1 + ind) + '" >' + jQuery(jQuery(this).find('.accordion-heading a')[0]).text() + '</a></li>'));			 
		    var ffc = jQuery("<div class='tadmin_tab' id='tadmin_tab" + String(1 + ind) + "'></div>");
			ffc.appendTo(optContainer);
			var tcont = jQuery(this).find('.accordion-body');
			tcont.removeClass('collapse');
			tcont.appendTo(ffc);
			ffc.find('.accordion-inner').append(jQuery('#help_tab' + String(2 + ind)));
			jQuery('#help_tab' + String(2 + ind)).show();
			ffc.find('.accordion-inner').append(jQuery('<div style="clear:both;" ></div>'));
			
		});
		
		optContainer.find('> .accordion').remove();
		
		
		optContainer.tabs({ 
		   fx: { opacity: 'toggle' },
		   show: function (event, ui) {
					if (TabsInit) {
						jQuery.cookie('tadmin_tab_cookie', optContainer.tabs("option", "selected"), { expires: 7, path: '/' });
					} else TabsInit = true;
				},
		   selected: (jQuery.cookie('tadmin_tab_cookie') != null)? 	parseInt(jQuery.cookie('tadmin_tab_cookie')) : 0	
		});
		
		
		
		jQuery('DIV.tab-pane#options div.tadmin_tab').each(function(ind){
		  var ul = jQuery(this).find('.accordion-body .accordion-inner::has(.subtabstart)').first();
		  if(ul[0]){
			if(ul.find('.subtabstart')[0]){
			 var htabs = jQuery('<div class="hortabscontainer"></div>');
			 ul.prepend(htabs);
			 var htabs_menu = jQuery('<div class="hortabs"></div>');
			 var htabs_tabs = jQuery('<div class="curvedContainer"></div>');
			 htabs.append(htabs_menu);
			 htabs.append(htabs_tabs);
			 
			 
			 var Title = TADMSCRIPTTRANS.general; 
			 if(  ul.find('.subtabstart').first()[0]){
				Title = ul.find('.subtabstart').first().text();
				ul.find('.subtabstart').first().closest('.control-group').remove();
			 }
			 
			 var menu_item = jQuery('<div class="tab selected first" ><div class="hortabslink">' + Title + '</div><div class="hortabsarrow"></div></div>');
			 var tab_item  = jQuery('<div class="tabcontent" style="display:block"><div class="adminformlist" ></div></div>');
			 menu_item.appendTo(htabs_menu);
			 tab_item.appendTo(htabs_tabs);
			 
			 
			 ul.find('> .control-group').each(function(index){
				if(jQuery(this).find('.subtabstart')[0]){
				   Title = jQuery(this).find('.subtabstart').text();
				   menu_item = jQuery('<div class="tab" ><div class="hortabslink">' + Title + '</div><div class="hortabsarrow"></div></div>');
				   tab_item  = jQuery('<div class="tabcontent"  style="display:block"><div class="adminformlist" ></div></div>');
				   menu_item.appendTo(htabs_menu);
				   tab_item.appendTo(htabs_tabs);
				   jQuery(this).remove();
				}else{
				   jQuery(this).appendTo(tab_item.find('.adminformlist'));
				}
			 });
			 menu_item.addClass('last');
			 
			}
		  }
		});
		
		
		jQuery('.control-group').each(function(indx){
		  // jQuery(this).innerHeight(30);
		});
		
		jQuery('.tadmin_tab .control-group').append(jQuery('<div style="clear:both;" ></div>'));
/////////////////////////////////////////////////////////////////////////////////	
	}else{
/////////////////////////////////////////////////////////////////////////////////
	jQuery("<ul id='tadmin_menu'><li><a href='#tadmin_tab1' ><span>" + TADMSCRIPTTRANS.general + "</span></a></li></ul>").appendTo(jQuery('FORM#style-form'));
	
	var fieldpanels = jQuery('.pane-sliders > .panel');
	fieldpanels.each(function(ind){
	   jQuery("#tadmin_menu").append(jQuery('<li><a href="#tadmin_tab' + String(2 + ind) + '" >' + jQuery(jQuery(this).find('.title a')[0]).html() + '</a></li>'));			 
	});

	var jpan = jQuery("FORM#style-form > DIV[class != 'clr']");
	var dcont = jQuery('<div class="tadmin_tab" id="tadmin_tab1" ></div>');
	dcont.appendTo(jQuery('FORM#style-form'));
	dcont.append(jQuery(jpan[0]).children());
	dcont.append(jQuery(jpan[2]).children());
    dcont.children('fieldset').first().css('float','left');
	
	dcont.append(jQuery('#help_tab1'));
	jQuery('#help_tab1').css({
	 'position': 'absolute',
     'top': '260px'
	}).show();
	
	
	jQuery(jQuery(jpan[1]).children()[0]).children('.panel').each(function(ind){
	    var ffc = jQuery("<div class='tadmin_tab' id='tadmin_tab" + String(2 + ind) + "'></div>");
	    ffc.appendTo(jQuery('FORM#style-form'));
	    var fset = jQuery(this).find('.pane-slider .panelform');
		fset.appendTo(ffc);
		fset.append( jQuery('#help_tab' + String(2 + ind)));
		jQuery('#help_tab' + String(2 + ind)).show();
	});
	
	jQuery(jpan[0]).remove();
	jQuery(jpan[1]).remove();
	jQuery(jpan[2]).remove();
	jQuery('FORM#style-form >.clr').remove();

	/* Moving Assignments Tab to the end - START */
	jQuery('#tadmin_menu li a').first().attr("href","#tadmin_tab8");
	jQuery('#tadmin_menu li').first().clone(true).appendTo('#tadmin_menu');
	jQuery("#tadmin_menu li").first().remove();
	jQuery('div#tadmin_tab1').attr("id","tadmin_tab8");
	/* Moving Assignments Tab to the end - END */
	
    jQuery('FORM#style-form').tabs({ 
	   fx: { opacity: 'toggle' },
	   show: function (event, ui) {
				if (TabsInit) {
					jQuery.cookie('tadmin_tab_cookie', jQuery('FORM#style-form').tabs("option", "selected"), { expires: 7, path: '/' });
				} else TabsInit = true;
			},
	   selected: (jQuery.cookie('tadmin_tab_cookie') != null)? 	parseInt(jQuery.cookie('tadmin_tab_cookie')) : 0	
    });
	
	
	jQuery('FORM#style-form > div[id != "tadmin_tab1"]').each(function(ind){
	  var ul = jQuery(this).find('fieldset > ul').first();
	  if(ul[0]){
	    if(ul.find('.subtabstart')[0]){
		 var htabs = jQuery('<div class="hortabscontainer"></div>');
		 ul.parent().prepend(htabs);
		 var htabs_menu = jQuery('<div class="hortabs"></div>');
		 var htabs_tabs = jQuery('<div class="curvedContainer"></div>');
		 htabs.append(htabs_menu);
		 htabs.append(htabs_tabs);
		 
		 var Title = TADMSCRIPTTRANS.general; 
	     if(  ul.children('LI').first().find('.subtabstart')[0]){
		    Title = ul.find('LI').first().find('.subtabstart').text();
			ul.children('LI').first().remove();
		 }
		 
		 var menu_item = jQuery('<div class="tab selected first" ><div class="hortabslink">' + Title + '</div><div class="hortabsarrow"></div></div>');
		 var tab_item  = jQuery('<div class="tabcontent"  style="display:block"><ul class="adminformlist" ></ul></div>');
		 menu_item.appendTo(htabs_menu);
		 tab_item.appendTo(htabs_tabs);
		 
         ul.children('LI').each(function(index){
		    if(jQuery(this).find('.subtabstart')[0]){
			   Title = jQuery(this).find('.subtabstart').text();
			   menu_item = jQuery('<div class="tab" ><div class="hortabslink">' + Title + '</div><div class="hortabsarrow"></div></div>');
		       tab_item  = jQuery('<div class="tabcontent"  style="display:block"><ul class="adminformlist" ></ul><div style="clear:both;"></div></div>');
			   menu_item.appendTo(htabs_menu);
		       tab_item.appendTo(htabs_tabs);
			   jQuery(this).remove();
			}else{
			   jQuery(this).appendTo(tab_item.find('.adminformlist'));
			}
		 });
		 menu_item.addClass('last');
		 
		}
	  }
	});
/////////////////////////////////////////////////////////////////////////////////	
	}
	
});

jQuery(document).ready(function() {
    
    if(!HORTabsInit){	
	   
	    window.hortabswap = function(tab){
		    var curMenu= tab;
			curMenu.parent().find('.tab').removeClass("selected");
			curMenu.addClass("selected");

			var index = curMenu.index();
			
			curMenu.parent().parent().find(".curvedContainer .tabcontent").css("display","none");
			jQuery(curMenu.parent().parent().find(".curvedContainer .tabcontent")[index]).css("display","block");
			
			var designation = curMenu.closest('.tadmin_tab').attr('id');
			jQuery.cookie(designation, curMenu.index(), { expires: 7, path: '/' });
		}; 
	
		jQuery(".hortabs .tab").click(function() {
			window.hortabswap(jQuery(this));
		});
		
		
		
		jQuery('FORM#style-form > div[id != "tadmin_tab1"]').each(function(i){
		  if(jQuery.cookie(jQuery(this).attr('id'))){
		    window.hortabswap(jQuery(jQuery(this).find('.hortabs .tab')[ parseInt(jQuery.cookie(jQuery(this).attr('id')))]));
		  }
		});
		
		jQuery('DIV.tab-pane#options .tadmin_tab').each(function(i){
		  if(jQuery.cookie(jQuery(this).attr('id'))){
		    window.hortabswap(jQuery(jQuery(this).find('.hortabs .tab')[ parseInt(jQuery.cookie(jQuery(this).attr('id')))]));
		  }
		});
		
		
		jQuery('UL.nav.nav-tabs a').click(function(){
		  jQuery.cookie("j3menu_pos", jQuery(this).parent().index(), { expires: 7, path: '/' });
		});
		
		if(jQuery.cookie("j3menu_pos")){
		  
		  jQuery('fieldset .tab-content .tab-pane.active').removeClass('active');
		  jQuery('UL.nav.nav-tabs li.active').removeClass('active');
		  
		  jQuery(jQuery('fieldset .tab-content .tab-pane')[jQuery.cookie("j3menu_pos")]).addClass('active');
		  jQuery(jQuery('UL.nav.nav-tabs li')[jQuery.cookie("j3menu_pos")]).addClass('active');
		}
		
		HORTabsInit = true;



	}
});



jQuery.cookie = function (key, value, options) {

        // key and at least value given, set cookie...
        if (arguments.length > 1 && String(value) !== "[object Object]") {
            options = jQuery.extend({}, options);

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
            encodeURIComponent(key), '=',
            options.raw ? value : encodeURIComponent(value),
            options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
            options.path ? '; path=' + options.path : '',
            options.domain ? '; domain=' + options.domain : '',
            options.secure ? '; secure' : ''
        ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {};
        var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
        return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};

jQuery(document).ready(function(){

	if(!window.checkColor){
	  window.checkColor = function(jEL){
	   try{
	   var rgbArr = jEL.css('backgroundColor').toLowerCase().replace('rgb(','').replace(')','').split(',');
	   rgbArr[0] = parseInt(rgbArr[0]);
	   rgbArr[1] = parseInt(rgbArr[1]);
	   rgbArr[2] = parseInt(rgbArr[2]);
		if( rgbArr[0] + rgbArr[1] + rgbArr[2] <  380){
			jEL.css('color','white');
		  }else{
			jEL.css('color','black');
		  }
		}catch(e){}
	  };
	  
	  window.createpckcolor = function(obj){
	     var self = jQuery(obj);
		 if(!self.attr('id')){
		   self.attr('id','cpick_' + getSurogateID());
		 }
				 
		 self.ColorPicker({
		        onSubmit: function(hsb, hex, rgb, el) {
					jQuery(el).ColorPickerHide();
				},
				onBeforeShow: function () {
					jQuery(obj).ColorPickerSetColor(((jQuery(obj).val().indexOf('#') < 0 && jQuery(obj).val().toLowerCase() != "transparent")?  "#" : "") + jQuery(obj).val());
				},
				onChange: function (hsb, hex, rgb) {
					jQuery(obj).val("#" + hex);
					jQuery(obj).css({'backgroundColor': '#' + hex});
					window.checkColor(jQuery(obj));
	            }
			})
			.keyup(function(){
						    var newVal = ((jQuery(obj).val().indexOf('#') < 0 && jQuery(obj).val().toLowerCase().indexOf("transparent") < 0) ?  "#" : "") + jQuery(obj).val();
                            if(newVal != jQuery(obj).val()){ 							
								jQuery(obj).ColorPickerSetColor(((jQuery(obj).val().indexOf('#') < 0 && jQuery(obj).val().toLowerCase() != "transparent")?  "#" : "") + jQuery(obj).val());
								jQuery(obj).val(newVal);
							}
							if(jQuery(obj).val().toLowerCase().indexOf("transparent") >= 0) jQuery(obj).val(jQuery(obj).val().replace('#',''));
					 });
	     jQuery("#" + jQuery(obj).data('colorpickerId')).mouseleave(function(){jQuery(obj).focus();});
	     jQuery(obj).css('backgroundColor',(((jQuery(obj).val().indexOf('#') < 0 && jQuery(obj).val().toLowerCase() != "transparent")?  "#" : "") + jQuery(obj).val()));
         window.checkColor(jQuery(obj));
	  };
	  
	  jQuery('.pckcolor').each(function(ind){
	     window.createpckcolor(jQuery(this));
	  });
	}
});

var flipcounter = 0;
jQuery(document).ready(function(){

 if(!window.createFlipYesNo){
   window.createFlipYesNo = function(obj){
       flipcounter++;
	   obj = jQuery(obj);
	   if(String(obj.attr('flipcreated')) == "1") return;
	   obj.attr('flipcreated','1');
	   
	   var sHtml = '<ul id="flip' + String(flipcounter) + '" class="flipyesno" style="list-style:none;background: url(' + TADMIN_JOOMLABASE + '/templates/' + TADMIN_TEMPLATE_FOLDER + '/images/ipbutton.png' + ') no-repeat 0 0;width:66px;height:19px;margin:2px 0;padding:0;float:left;overflow:hidden;">' +
		              '<li style="position:relative;left:' + (obj.val() == "1" ? "0px" : "-38px" ) + ';background: url(' + TADMIN_JOOMLABASE + '/templates/' + TADMIN_TEMPLATE_FOLDER + '/images/ipbutton.png' + ') no-repeat 0 -19px;width: 103px;height:19px;margin:0;padding:0;"><span></span></li>' +
		           '</ul>';
	   var flip_obj = jQuery(sHtml);
       flip_obj.insertAfter(obj);	   
       flip_obj.disableSelection();
 	   
	   flip_obj.find('LI').click(function(){
			if( parseInt(jQuery(this).css('left')) == 0){
			  jQuery(this).animate({left:'-38px'},300);
			  obj.val(0);
			}else{
			  jQuery(this).animate({left:'0px'},300);
			  obj.val(1);
			}
	   }).disableSelection(); 
	  
       	  
   };
   
   jQuery('.flipyesno').each(function(ind){
     if(!jQuery(this).closest('.menu_parms_panel')[0])
		window.createFlipYesNo(jQuery(this));
   });
   
 }
});


jQuery(document).ready(function(){

jQuery('.width_value INPUT').each(function(ind){
    var WIDTH_ID = jQuery(this).attr('id');
	jQuery("#width" + WIDTH_ID).slider({
		value:jQuery(this).val(),
		min: 312,
		max: 1872,
		step: 12,
		slide: function( event, ui ) {
			jQuery("#" + WIDTH_ID).val(  ui.value );
			jQuery("#disp" + WIDTH_ID).html( ui.value + "px");
		},
		orientation: "horizontal"
	});
});

});

jQuery(document).ready(function(){
	
	// making tabs in Menus Settings

	jQuery('div.menusSettingsContainer').hide();
	jQuery('h4.menusSettingsTab').click(function() {
		jQuery(this).next().slideToggle(300);
	});

});

			
				
			

		   
		   