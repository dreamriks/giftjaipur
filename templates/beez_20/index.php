<?php
/**
 * @package                Joomla.Site
 * @subpackage  Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.filesystem.file');

// check modules
$showRightColumn  = ($this->countModules('position-3') or $this->countModules('position-6') or $this->countModules('position-8'));
$showbottom      = ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft      = ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn==0 and $showleft==0) {
  $showno = 0;
}

JHtml::_('behavior.framework', true);

// get params
$color        = $this->params->get('templatecolor');
$logo        = $this->params->get('logo');
$navposition    = $this->params->get('navposition');
$app        = JFactory::getApplication();
$doc        = JFactory::getDocument();
$templateparams    = $app->getTemplate(true)->params;

$doc->addStyleSheet($this->baseurl.'/templates/system/css/system.css');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/position.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/layout.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/print.css', $type = 'text/css', $media = 'print');

$files = JHtml::_('stylesheet', 'templates/'.$this->template.'/css/general.css', null, false, true);
if ($files):
  if (!is_array($files)):
    $files = array($files);
  endif;
  foreach($files as $file):
    $doc->addStyleSheet($file);
  endforeach;
endif;

$doc->addStyleSheet('templates/'.$this->template.'/css/'.htmlspecialchars($color).'.css');
if ($this->direction == 'rtl') {
  $doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/template_rtl.css');
  if (file_exists(JPATH_SITE . '/templates/' . $this->template . '/css/' . $color . '_rtl.css')) {
    $doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/'.htmlspecialchars($color).'_rtl.css');
  }
}

$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/md_stylechanger.js', 'text/javascript');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/hide.js', 'text/javascript');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18137357-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<jdoc:include type="head" />
<?php include("canonical_tag.php") ?>
<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<?php if ($color=="personal") : ?>
<style type="text/css">
#line {
  width:98% ;
}
.logoheader {
  height:200px;
}
#header ul.menu {
  display:block !important;
  width:98.2% ;
}
</style>
<?php endif; ?>
<![endif]-->

<!--[if IE 7]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript">
  var big ='<?php echo (int)$this->params->get('wrapperLarge');?>%';
  var small='<?php echo (int)$this->params->get('wrapperSmall'); ?>%';
  var altopen='<?php echo JText::_('TPL_BEEZ2_ALTOPEN', true); ?>';
  var altclose='<?php echo JText::_('TPL_BEEZ2_ALTCLOSE', true); ?>';
  var bildauf='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/plus.png';
  var bildzu='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/minus.png';
  var rightopen='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTOPEN', true); ?>';
  var rightclose='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTCLOSE', true); ?>';
  var fontSizeTitle='<?php echo JText::_('TPL_BEEZ2_FONTSIZE', true); ?>';
  var bigger='<?php echo JText::_('TPL_BEEZ2_BIGGER', true); ?>';
  var reset='<?php echo JText::_('TPL_BEEZ2_RESET', true); ?>';
  var smaller='<?php echo JText::_('TPL_BEEZ2_SMALLER', true); ?>';
  var biggerTitle='<?php echo JText::_('TPL_BEEZ2_INCREASE_SIZE', true); ?>';
  var resetTitle='<?php echo JText::_('TPL_BEEZ2_REVERT_STYLES_TO_DEFAULT', true); ?>';
  var smallerTitle='<?php echo JText::_('TPL_BEEZ2_DECREASE_SIZE', true); ?>';
</script>

</head>

<body>

<div id="all">
        <div id="back">
          <div id="custom_top_bar" style="height:32px;width:100%;background-color:rgb(45, 89, 184);color:white">
           &nbsp&nbsp <a href="http://www.facebook.com/giftjaipur"><img src="images/topbar/facebook.png" style="float:left;;padding-left:4px;padding-top:2px;"></a> &nbsp&nbsp
            <a href="https://twitter.com/Gift_Jaipur
"><img src="images/topbar/twitter.png" style="float:left;padding-left:8px;padding-top:2px;"></a>
            <a href="http://namangarg88.blogspot.in/"><img src="images/topbar/blogger.png" style="float:left;padding-left:8px;padding-top:2px;"></a>
           
            <img src="images/topbar/free-delivery.png" style="float:left;margin-left:360px;"> 
            <img src="images/topbar/credit-debit-card.png" style="float:left;">
            <img src="images/topbar/contact.png" style="float:left;"><span style="float:left;margin-top:5px;">+91 9654 66 3355</span>
          </div>
                <div id="header">
               
                                <div class="logoheader">
                                        <h1 id="logo">
                                        

                                        <?php if ($logo): ?>
                                        <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" />
                                        <?php endif;?>
                                        <?php if (!$logo ): ?>
                                        <?php echo htmlspecialchars($templateparams->get('sitetitle'));?>
                                        <?php endif; ?>
                                        <span class="header1">
                                        <?php echo htmlspecialchars($templateparams->get('sitedescription'));?>
                                        </span></h1>
                                  <jdoc:include type="modules" name="headerimage" />
                                </div><!-- end logoheader -->
                                        <ul class="skiplinks">
                                                <li><a href="#main" class="u2"><?php echo JText::_('TPL_BEEZ2_SKIP_TO_CONTENT'); ?></a></li>
                                                <li><a href="#nav" class="u2"><?php echo JText::_('TPL_BEEZ2_JUMP_TO_NAV'); ?></a></li>
                                            <?php if($showRightColumn ):?>
                                            <li><a href="#additional" class="u2"><?php echo JText::_('TPL_BEEZ2_JUMP_TO_INFO'); ?></a></li>
                                           <?php endif; ?>
                                        </ul>
                                        <h2 class="unseen"><?php echo JText::_('TPL_BEEZ2_NAV_VIEW_SEARCH'); ?></h2>
                                        <h3 class="unseen"><?php echo JText::_('TPL_BEEZ2_NAVIGATION'); ?></h3>
                                          
                                        <jdoc:include type="modules" name="position-1" />
                                        
                                        
                                        
                                        
                                         <!-- end line -->





                        </div><!-- end header -->
                        <div id="<?php echo $showRightColumn ? 'contentarea2' : 'contentarea'; ?>">
                                        <div id="breadcrumbs">

                                                        <jdoc:include type="modules" name="position-2" />

                                        </div>

                                        <?php if ($navposition=='left' and $showleft) : ?>


                                                        <div class="left1 <?php if ($showRightColumn==NULL){ echo 'leftbigger';} ?>" id="nav">
                                                   <jdoc:include type="modules" name="position-7" style="beezDivision" headerLevel="3" />
                                                                <jdoc:include type="modules" name="position-4" style="beezHide" headerLevel="3" state="0 " />
                                                  <?php 
													$my_parameter=JRequest::getVar('view');
													if ($my_parameter=="cart"){?>
                                                    <img src=/images/cart/ebs1.png><br />
<img src=/images/cart/read_customer_reviews.png><br>
<img src=/images/cart/callusnow.png>
																                                                  <?php }?>
                                                                <jdoc:include type="modules" name="position-5" style="beezTabs" headerLevel="2"  id="3" />


                                                        </div><!-- end navi -->
               <?php endif; ?>

                                        <div id="<?php echo $showRightColumn ? 'wrapper' : 'wrapper2'; ?>" <?php if (isset($showno)){echo 'class="shownocolumns"';}?>>

                                                <div id="main">

                                                <?php if ($this->countModules('position-12')): ?>
                                                        <div id="top"><jdoc:include type="modules" name="position-12"   />
                                                        </div>
                                                <?php endif; ?>

                                                       <jdoc:include type="message" />
                                                       <jdoc:include type="component" />

                                        <div class="box10 box11"> <jdoc:include type="modules" name="position-21"/></div>
                                        <div class="box10 box21"> <jdoc:include type="modules" name="position-22"/></div>
                                                <!-- end main -->

                                        </div><!-- end wrapper -->

                                <?php if ($showRightColumn) : ?>
                                        <h2 class="unseen">
                                                <?php echo JText::_('TPL_BEEZ2_ADDITIONAL_INFORMATION'); ?>
                                        </h2>
                                        <div id="close">
                                                <a href="#" onclick="auf('right')">
                                                        <span id="bild">
                                                                <?php echo JText::_('TPL_BEEZ2_TEXTRIGHTCLOSE'); ?></span></a>
                                        </div>


                                        <div id="right">
                                                <a id="additional"></a>
                                                <jdoc:include type="modules" name="position-6" style="beezDivision" headerLevel="3"/>
                                                <jdoc:include type="modules" name="position-8" style="beezDivision" headerLevel="3"  />
                                                <jdoc:include type="modules" name="position-3" style="beezDivision" headerLevel="3"  />
                                        </div><!-- end right -->
                                        <?php endif; ?>

                        <?php if ($navposition=='center' and $showleft) : ?>

                                        <div class="left <?php if ($showRightColumn==NULL){ echo 'leftbigger';} ?>" id="nav" >

                                                <jdoc:include type="modules" name="position-7"  style="beezDivision" headerLevel="3" />
                                                <jdoc:include type="modules" name="position-4" style="beezHide" headerLevel="3" state="0 " />
                                                <jdoc:include type="modules" name="position-5" style="beezTabs" headerLevel="2"  id="3" />


                                        </div><!-- end navi -->
                   <?php endif; ?>

                                <div class="wrap"></div>

                                </div> <!-- end contentarea -->

                        </div><!-- back -->

                </div><!-- all -->

                <div id="footer-outer">
                        <?php if ($showbottom) : ?>
                        <div id="footer-inner">

                                <div id="bottom">
                                        <div class="box box1"> <jdoc:include type="modules" name="position-9" style="beezDivision" headerlevel="3" /></div>
                                        <div class="box box2"> <jdoc:include type="modules" name="position-10" style="beezDivision" headerlevel="3" /></div>
                                        <div class="box box3"> <jdoc:include type="modules" name="position-11" style="beezDivision" headerlevel="3" /></div>
                                        <div class="box box4"> <jdoc:include type="modules" name="newfooterbox" style="beezDivision" headerlevel="3" /></div>
                                </div>


                        </div>
                                <?php endif ; ?>

                        <div id="footer-sub">


                                <div id="footer">

                                       <table width="100%"><tr><td> <jdoc:include type="modules" name="position-14" /></td><td align="right">
                                        <p align="right">
                                                <?php echo "In association with ";?> <a href="http://www.traveltraiangle.com/">TravelTraingle</a><br><?php echo "©All rights reserved";?>
                                        </p></td></tr><br />
                                        <tr><td align="left"><h3><strong> Payments</strong></h3></td><td align="left"><h3> <strong>GiftJaipur Gurantees</strong></h3></td></tr>
                                        <tr><td align="left"><img src="images/frontpage/payment.jpg" border="0" alt="GiftJaipur payment system" /></td><td align="left"><img src="images/frontpage/trust seal GiftJaipur.jpg" border="0" alt="GiftJaipur service" /></td></tr></table>


                                </div><!-- end footer -->

                        </div>

                </div>
        <jdoc:include type="modules" name="debug" />
        </body>
</html>