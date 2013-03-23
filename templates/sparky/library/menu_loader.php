<?php 
if($LoadMENU_Acc){ ?>
<link rel="stylesheet" href="<?php echo $template_path ?>/css/menu_accordion.css" type="text/css" />
<script type="text/javascript" src="<?php echo $template_path ?>/js/jquery.hjt.accmenu.js"></script>
<script type="text/javascript">
<?php
foreach($mnucfg as $menu_name => $menu){
  if($menu['type'] == "acc"){ ?>
     jQuery(document).ready(function(){
	  jQuery('.mnu_<?php echo $menu_name;?>').accmenu({
				collapsible: <?php echo $menu['collapsible'] == "1"? "true" : "false"; ?>,
				equalheight: <?php echo $menu['equalheight'] == "1"? "true" : "false"; ?>,
				event:'<?php echo $menu['trigger']; ?>',
				animation:'<?php echo $menu['animation']; ?>',
				subpanelslide:'<?php echo $menu['subpanelslide']; ?>',
				subpanelspeed: <?php echo $menu['animation_speed']; ?>
	  });
	 });
  <?php
  }
}
?>
</script>
<?php
}

if($LoadMENU_Navh){?>
<link rel="stylesheet" href="<?php echo $template_path ?>/css/menu_horizontal.css" type="text/css" />
<script type="text/javascript" src="<?php echo $template_path ?>/js/jquery.hjt.navh.js"></script>
<script type="text/javascript">
<?php
foreach($mnucfg as $menu_name => $menu){
  if($menu['type'] == "navh"){ ?>
  jQuery(document).ready(function(){

    var thirdLvl = 'div.navh_submenu > ul li.parent';

    jQuery('.navh li.parent ul').hide();
    jQuery('<div class="navh_submenu"></div><div class="clr></div>').insertAfter('ul.navh');
    jQuery('.navh > li.active > ul').clone().appendTo('div.navh_submenu').show();
    jQuery('.navh > li.active').addClass('active_tab');

    jQuery('.navh > li.parent')
      .hover(function(){
        jQuery('div.navh_submenu > ul').remove();
        jQuery('.navh > li').removeClass('active_tab');
        jQuery(this).children('ul').clone().appendTo('div.navh_submenu').show();
        jQuery(this).addClass('active_tab');

        jQuery(thirdLvl)
          .hover(function(){
            jQuery(this).children('ul').slideToggle();
          }, function(){
            jQuery(this).children('ul').slideToggle();
          });

      });

    jQuery(thirdLvl)
      .hover(function(){
        jQuery(this).children('ul').slideToggle();
      }, function(){
        jQuery(this).children('ul').slideToggle();
      });
    <?php if (!$menu['margin_size']) { ?>
    jQuery('.navh > li.active').prev().css('border-right', '0');
    <?php } ?>

  });
  <?php	 
  }
}
?>
</script>
<?php
}

if($LoadMENU_Nav){?>
<link rel="stylesheet" href="<?php echo $template_path ?>/css/menu_drop_down.css" type="text/css" />
<script type="text/javascript" src="<?php echo $template_path ?>/js/jquery.hjt.nav.js"></script>
<script type="text/javascript">
<?php
foreach($mnucfg as $menu_name => $menu) {
	if($menu['type'] == "nav"){ ?>
	jQuery(document).ready(function(){
			jQuery('.mnu_<?php echo $menu_name;?>').dropDownMenu({
					speed: <?php echo $menu['animation_speed']; ?>,
					effect: '<?php echo $menu['animation_effect']; ?>'
      });
      var navHeight = jQuery('ul.nav > li').outerHeight()
      jQuery('ul.nav').parent('div').css('height', navHeight)
	});
<?php	 
	}
}
?>
</script>  
<?php } ?>