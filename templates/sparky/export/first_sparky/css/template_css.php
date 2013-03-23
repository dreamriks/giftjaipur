/*------------CSS STYLESHEET DYNAMICALLY GENERATED BY FIRST_FIRST_FIRST_SPARKY---------------*/

<?php if($googleWebFonts){ ?>
/*------------GOOGLE FONTS---------------*/
<?php echo $googleWebFonts; } ?>


html {
    font-size:<?php echo $pSize; ?>px;
}

body {
    color:<?php echo $pColor; ?>;
    font-family:<?php echo $pFamily; ?>;
<?php if($textDirection!="rtl") { ?>     text-align:<?php echo $pAlign; ?>;<?php } ?>
    font-weight:<?php echo $pWeight; ?>;
    font-style:<?php echo $pStyle; ?>;
<?php if($textDirection=="rtl") { ?>    direction:rtl;
<?php } ?>
<?php if(!$bodyBgImageSwitch) { ?>
    background:<?php echo $bodyBgColor; ?>;
<?php } if($bodyBgImageSwitch && $bodyBgImageFile) { ?>
    background:<?php echo $bodyBgColor; ?> url(<?php echo $template_path; ?>/images/<?php echo $bodyBgImageFile; ?>) <?php echo $bodyBgImageVerticalAlign.' '.$bodyBgImageHorizontalAlign.' '.$bodyBgImageRepeat; if($bodyBgImageFixedSwitch) { echo " fixed"; } ?>;
<?php } ?>
}

/*------------LAYOUT - SCREEN >= TEMPLATE WIDTH---------------*/

<?php if($enableResponsive){ ?>@media (min-width: <?php echo $templateWidth; ?>px) {<?php } ?>

.container, .row {
<?php if(!$fluidWidth) { ?>
    width:<?php echo $templateWidth; ?>px;
<?php }else{ ?>
    width:100%;
<?php } ?>
}

[class*="span"] {
    margin-left: 0;
}

<?php
$cell_size = $templateWidth / 12;
if($fluidWidth) { $cell_size = 8.33333; }
$cell_size = floor($cell_size);  
$empty_no  = 0;
foreach($module_grid as $gridRow){
//$gridRow[0] - Name
//$gridRow[1] - Class
//$gridRow[2] - ModulePos1,ModulePos2...
//$gridRow[3] - Holds content flag: true/false
    foreach($gridRow[2] as $mpostion){
    //$mpostion[0] - position name 
    //$mpostion[1] - number of grid cells occupied by position
    //$mpostion[2] - number of empty cells left of module
    
    $mpwidth = $cell_size * $mpostion[1];  
    $mpleft_off = $cell_size * $mpostion[2];  
    if( $mpostion[0] == "joom_content"){
        if($mpleft_off){
?>
.mp_empty<?php echo $empty_no; ?>{
    width:<?php echo $mpleft_off; if(!$fluidWidth) { echo "px"; }else{ echo "%"; } ?>;
}

<?php
            $empty_no++;
        }  
?>
.content_first_first_first_first_first_first_sparky {
    width:<?php echo $mpwidth; if(!$fluidWidth) { echo "px"; }else{ echo "%"; } ?>;
}

<?php
        }else{
            if($mpleft_off){
?>
.mp_empty<?php echo $empty_no; ?>{
    width:<?php echo $mpleft_off; if(!$fluidWidth) { echo "px"; }else{ echo "%"; } ?>;
}

<?php
                $empty_no++;
            } 
?>
.mp_<?php echo $mpostion[0];?>{
    width:<?php echo $mpwidth; if(!$fluidWidth) { echo "px"; }else{ echo "%"; } ?>;
}

<?php
        }
    }
}
?>

<?php if($enableResponsive){ ?>}

/*------------LAYOUT - SCREEN BETWEEN 980px AND TEMPLATE WIDTH---------------*/

@media (min-width: 980px) and (max-width: <?php echo $templateWidth; ?>px) {

.container {
    width: 868px;
}
.span12 {
    width: 868px
}
.span11 {
    width: 794px;
}
.span10 {
    width: 720px;
}
.span9 {
    width: 646px;
}
.span8 {
    width: 572px;
}
.span7 {
    width: 498px;
}
.span6 {
    width: 424px;
}
.span5 {
    width: 350px;
}
.span4 {
    width: 276px;
}
.span3 {
    width: 202px;
}
.span2 {
    width: 128px;
}
.span1 {
    width: 54px;
}

}

/*------------LAYOUT - SCREEN BETWEEN 768px AND 979px---------------*/

@media (min-width: 768px) and (max-width: 979px) {

.container {
    width: 724px;
}
.span12 {
    width: 724px
}
.span11 {
    width: 662px;
}
.span10 {
    width: 600px;
}
.span9 {
    width: 538px;
}
.span8 {
    width: 476px;
}
.span7 {
    width: 414px;
}
.span6 {
    width: 352px;
}
.span5 {
    width: 290px;
}
.span4 {
    width: 228px;
}
.span3 {
    width: 166px;
}
.span2 {
    width: 104px;
}
.span1 {
    width: 42px;
}

}

@media (max-width: 767px) {

.container {
    width: 100%;
}

[class*="span"] {
    width: 100%;
}

}
<?php } ?>

.cell_pad {
    padding:<?php echo $cellPaddingVertical; ?>px <?php echo $cellPaddingHorizontal; ?>px;
    margin:<?php echo $cellMarginVertical; ?>px <?php echo $cellMarginHorizontal; ?>px;
}

/*------------ COMMON SETTINGS ---------------*/

a {
    color:<?php echo $linksColor; ?>;
    font-weight:<?php echo $linksWeight; ?>;
    font-style:<?php echo $linksStyle; ?>;
    text-decoration:<?php if($linksUnderline) { echo "underline"; }else{ echo "none"; } ?>;
}

a:hover {
    color:<?php echo $linksHoverColor; ?>;
    text-decoration:<?php if($linksUnderlineHover) { echo "underline"; }else{ echo "none"; } ?>;
}

h1, h1 a {
    color:<?php echo $h1Color; ?>;
    font-size:<?php echo $h1Size; ?>px;
    font-family:<?php echo $h1Family; ?>;
 <?php if($textDirection!="rtl") { ?>   text-align:<?php echo $h1Align; ?>;<?php } ?>
    font-weight:<?php echo $h1Weight; ?>;
    font-style:<?php echo $h1Style; ?>;
    <?php if($h1Underline) { ?>text-decoration:underline;<?php } ?>
}

h2, h2 a {
    color:<?php echo $h2Color; ?>;
    font-size:<?php echo $h2Size; ?>px;
    font-family:<?php echo $h2Family; ?>;
<?php if($textDirection!="rtl") { ?>    text-align:<?php echo $h2Align; ?>;<?php } ?>
    font-weight:<?php echo $h2Weight; ?>;
    font-style:<?php echo $h2Style; ?>;
    <?php if($h2Underline) { ?>text-decoration:underline;<?php } ?>
}

h3 {
    color:<?php echo $h3Color; ?>;
    font-size:<?php echo $h3Size; ?>px;
    font-family:<?php echo $h3Family; ?>;
<?php if($textDirection!="rtl") { ?>    text-align:<?php echo $h3Align; ?>;<?php } ?>
    font-weight:<?php echo $h3Weight; ?>;
    font-style:<?php echo $h3Style; ?>;
    <?php if($h3Underline) { ?>text-decoration:underline;<?php } ?>
}

h4 {
    color:<?php echo $h4Color; ?>;
    font-size:<?php echo $h4Size; ?>px;
    font-family:<?php echo $h4Family; ?>;
<?php if($textDirection!="rtl") { ?>    text-align:<?php echo $h4Align; ?>;<?php } ?>
    font-weight:<?php echo $h4Weight; ?>;
    font-style:<?php echo $h4Style; ?>;
    <?php if($h4Underline) { ?>text-decoration:underline;<?php } ?>
}

img {
    border:none;
}

/*--------------LOGO----------------*/

.first_first_first_first_first_first_sparky_logo, .first_first_first_first_first_first_sparky_logo a {
	color:<?php echo $logoColor; ?>;
    font-size:<?php echo $logoSize; ?>px;
    font-family:<?php echo $logoFamily; ?>;
    font-weight:<?php echo $logoWeight; ?>;
    font-style:<?php echo $logoStyle; ?>;
<?php if($textDirection!="rtl") { ?>	text-align:<?php echo $logoAlign; ?>;<?php } ?>
    text-decoration:none;
}

.first_first_first_first_first_first_sparky_slogan {
	color:<?php echo $sloganColor; ?>;
    font-size:<?php echo $sloganSize; ?>px;
    font-family:<?php echo $sloganFamily; ?>;
    font-weight:<?php echo $sloganWeight; ?>;
    font-style:<?php echo $sloganStyle; ?>;
<?php if($textDirection!="rtl") { ?>	text-align:<?php echo $sloganAlign; ?>;<?php } ?>
}

<?php
foreach($mnucfg as $menu_name => $menu) {
if($menu['type'] == "standard") { ?>

/*--------------STANDARD----------------*/

ul.mnu_<?php echo $menu_name;?> {
    margin:0;
    padding:0;
<?php if($textDirection!="rtl") { ?>    text-align:<?php echo $menu['text_align']; ?>;<?php } ?>
}

ul.mnu_<?php echo $menu_name;?> ul {
    margin:<?php echo $menu['margin_sub']; ?>px;
    padding:0;
}

.mnu_<?php echo $menu_name;?> li {
    display:block;
}

<?php if($menu['direction'] == "horizontal") { ?>
.mnu_<?php echo $menu_name;?> > li {
    display:inline;
}
<?php } ?>

.mnu_<?php echo $menu_name;?> > li {
    margin-bottom:<?php echo $menu['bottom_margin']; ?>px;
    padding:<?php echo $menu['vertical_padding']; ?>px <?php echo $menu['horizontal_padding']; ?>px;
    font-size:<?php echo $menu['font_size']; ?>px;
    font-weight:<?php echo $menu['font_weight']; ?>;
    font-style:<?php echo $menu['font_style']; ?>;
<?php if($textDirection!="rtl") { ?>    text-align:<?php echo $menu['text_align']; ?>;<?php } ?>
}

.mnu_<?php echo $menu_name;?> > li > a {
    color:<?php echo $menu['text_color']; ?>;
    font-family:<?php echo $menu['font_family']; ?>;
    font-weight:<?php echo $menu['font_weight']; ?>;
    font-style:<?php echo $menu['font_style']; ?>;
}

.mnu_<?php echo $menu_name;?> > li > a:hover {
    color:<?php echo $menu['links_hover_color']; ?>;
}

.mnu_<?php echo $menu_name;?> > li li {
    margin:0;
    padding:0;
    font-size:<?php echo $menu['font_size_sub']; ?>px;
    line-height:<?php echo $menu['subitem_height']; ?>px;
    font-weight:<?php echo $menu['font_weight']; ?>;
    font-style:<?php echo $menu['font_style']; ?>;
 <?php if($textDirection!="rtl") { ?>   text-align:<?php echo $menu['text_align']; ?>;<?php } ?>
}

.mnu_<?php echo $menu_name;?> > li li a {
    color:<?php echo $menu['text_color_sub']; ?>;
    font-family:<?php echo $menu['font_family_sub']; ?>;
    font-weight:<?php echo $menu['font_weight']; ?>;
    font-style:<?php echo $menu['font_style']; ?>;
<?php if($textDirection!="rtl") { ?>    text-align:<?php echo $menu['text_align']; ?>;<?php } ?>
}

.mnu_<?php echo $menu_name;?> > li li a:hover {
    color:<?php echo $menu['links_hover_color_sub']; ?>;   
}

<?php } elseif($menu['type'] == "acc") { ?>

/*--------------ACCORDION----------------*/

.mnu_<?php echo $menu_name;?> ul {
    background:<?php echo $menu['accordion_pane_bg']; ?>;
}
.mnu_<?php echo $menu_name;?> li, .mnu_<?php echo $menu_name;?> li li ul  {
    border:<?php echo $menu['accordion_pane_border_size']; ?>px solid <?php echo $menu['accordion_pane_border_color']; ?>;
    border-radius:<?php echo $menu['accordion_pane_border_radius']; ?>px;
    background:<?php echo $menu['accordion_pane_bg']; ?>;
}

.mnu_<?php echo $menu_name;?> li a {
    font-family:<?php echo $menu['font_family']; ?>;
    font-size:<?php echo $menu['font_size']; ?>px;
    color:<?php echo $menu['text_color']; ?>;
}

.mnu_<?php echo $menu_name;?> li a:hover {
	color:<?php echo $menu['links_hover_color']; ?> !important;
}

.mnu_<?php echo $menu_name;?> li ul li a {
    color:<?php echo $menu['text_color_sub']; ?>;
    font-size:<?php echo $menu['font_size_sub']; ?>px;
}

.mnu_<?php echo $menu_name;?> li ul li a:hover {
    color:<?php echo $menu['links_hover_color_sub']; ?> !important;
}
<?php } elseif($menu['type'] == "nav") { ?>

/*--------------DROP-DOWN----------------*/

.mnu_<?php echo $menu_name;?> {
    margin:0;
    padding:0;
    list-style-type:none;
    list-style-position:outside;
    position:absolute;
    z-index:100;
    white-space:nowrap;
}

.mnu_<?php echo $menu_name;?> ul {
    margin:0;
    padding:0;
    list-style-type:none;
    list-style-position:outside;
    position:absolute;
    z-index:100;
    background:<?php echo $menu['drop_down_pane_bg']; ?>;
}

.mnu_<?php echo $menu_name;?> ul {
    width:<?php echo $menu['drop_down_pane_width']; ?>px;
    left:-1px;
    border:<?php echo $menu['border_size_sub_lvl']; ?>px solid <?php echo $menu['border_color_sub_lvl']; ?>;
    padding:<?php echo $menu['drop_down_pane_padding']; ?>px;
}

.mnu_<?php echo $menu_name;?> > li > a, .mnu_<?php echo $menu_name;?> > li > span {
    display:block;
    margin:0;
    text-decoration:none;
    color:<?php echo $menu['text_color']; ?>;
    font-size:<?php echo $menu['font_size']; ?>px;
    padding-left:<?php echo $menu['drop_down_button_horiz_padding']; ?>px;
    padding-right:<?php echo $menu['drop_down_button_horiz_padding']; ?>px;
    padding-top:<?php echo $menu['drop_down_button_top_padding']; ?>px;
    font-family:<?php echo $menu['font_family']; ?>;
    font-weight:<?php echo $menu['font_weight']; ?>;
    font-style:<?php echo $menu['font_style']; ?>;
    height:<?php echo $menu['drop_down_button_height']; ?>px;
    cursor:pointer;
}

.mnu_<?php echo $menu_name;?> > li.active > a, .mnu_<?php echo $menu_name;?> > li.active > span {
    color:<?php echo $menu['active_text_color']; ?> !important;
    cursor:pointer;
}

.mnu_<?php echo $menu_name;?> > li > a:hover, .mnu_<?php echo $menu_name;?> > li:hover > a,
.mnu_<?php echo $menu_name;?> > li > a:hover, .mnu_<?php echo $menu_name;?> > li:hover > span {
    color:<?php echo $menu['links_hover_color']; ?>;
}

.mnu_<?php echo $menu_name;?> > li {
    float:left;
    position:relative;
<?php if ($menu['drop_down_button_width']) { ?>    width:<?php echo $menu['drop_down_button_width']; ?>px;<?php } ?>
<?php if($textDirection!="rtl") { ?>    text-align:<?php echo $menu['text_align']; ?>;<?php } ?>
    margin:0;
    border-right:<?php echo $menu['border_size_first_lvl']; ?>px solid <?php echo $menu['border_color_first_lvl']; ?>;
    border-bottom:<?php echo $menu['border_size_first_lvl']; ?>px solid <?php echo $menu['border_color_first_lvl']; ?>;
    border-top:<?php echo $menu['border_size_first_lvl']; ?>px solid <?php echo $menu['border_color_first_lvl']; ?>;
    background:<?php echo $menu['button_bg']; ?>;
}

.mnu_<?php echo $menu_name;?> > li.active {
    background:<?php echo $menu['active_button_bg']; ?>;
}

.mnu_<?php echo $menu_name;?> > li:first-child {
    border-left:<?php echo $menu['border_size_first_lvl']; ?>px solid <?php echo $menu['border_color_first_lvl']; ?>;
}

.mnu_<?php echo $menu_name;?> li:hover {
    position:relative;
    background:<?php echo $menu['button_hover_bg']; ?>;
}

.mnu_<?php echo $menu_name;?> li ul li:hover {
    background:<?php echo $menu['drop_down_hover_bg']; ?>;
}

.mnu_<?php echo $menu_name;?> li ul li {
    height:<?php echo $menu['drop_down_pane_height']; ?>px;
    border-bottom:<?php echo $menu['border_size_sub_lvl']; ?>px solid <?php echo $menu['border_color_sub_lvl']; ?>;
    padding:0 <?php echo $menu['drop_down_pane_horiz_padding']; ?>px;
<?php if($textDirection!="rtl") { ?>    text-align:left;<?php } ?>
}

.mnu_<?php echo $menu_name;?> li ul a, .mnu_<?php echo $menu_name;?> li ul span {
    line-height:<?php echo $menu['drop_down_pane_height']; ?>px;
    font-size:<?php echo $menu['font_size_sub']; ?>px;
    color:<?php echo $menu['text_color_sub']; ?>;
    font-weight:<?php echo $menu['font_weight_sub']; ?>;
    font-style:<?php echo $menu['font_style_sub']; ?>;
    padding-top:0;
    cursor:pointer;
}

.mnu_<?php echo $menu_name;?> li ul a:hover,
.mnu_<?php echo $menu_name;?> li ul span:hover {
    color:<?php echo $menu['links_hover_color_sub']; ?>;
}

.mnu_<?php echo $menu_name;?> li ul ul {
    left:<?php echo $menu['drop_down_pane_width']; ?>px;
    margin-top:-1px;
}

.mnu_<?php echo $menu_name;?> ul ul {
    top:0px;
}

<?php if($menu['arrows']) { ?>
.mnu_<?php echo $menu_name;?> > li.parent {
    background-image:url(<?php echo $template_path; ?>/images/arrow_down.png);
    background-repeat:no-repeat;
    background-position:right center;
    padding-right:15px;
}

.mnu_<?php echo $menu_name;?> li li.parent {
    background:url(<?php echo $template_path; ?>/images/arrow_right.png) no-repeat right center;
}
<?php } ?>

.mnu_<?php echo $menu_name;?> .sub {
    font-size:10px;
    line-height:normal;
    display:block;
}

<?php } elseif($menu['type'] == "navh") { ?>

/*--------------HORIZONTAL----------------*/

.mnu_<?php echo $menu_name;?> {
    background:<?php echo $menu['tab_color']; ?>;
    width:100%;
    height:<?php echo $menu['tab_height']; ?>px;
    font-family:<?php echo $menu['font_family']; ?>;
}

.mnu_<?php echo $menu_name;?> > li {
    background:<?php echo $menu['button_bg']; ?>;
    line-height:<?php echo $menu['tab_height']; ?>px;
    padding:0 <?php echo $menu['horiz_button_padding']; ?>px;
    margin:0;
    border:<?php echo $menu['border_size_first_lvl']; ?>px solid <?php echo $menu['border_color_first_lvl']; ?>;
<?php if (!$menu['margin_size']) { ?>border-left:none;<?php } ?>
    border-bottom:none;
    margin:0 <?php echo $menu['margin_size']; ?>px;
    -webkit-radius:<?php echo $menu['border_radius']; ?>px <?php echo $menu['border_radius']; ?>px 0 0;
    -moz-radius:<?php echo $menu['border_radius']; ?>px <?php echo $menu['border_radius']; ?>px 0 0;
    border-radius:<?php echo $menu['border_radius']; ?>px <?php echo $menu['border_radius']; ?>px 0 0;
}

.mnu_<?php echo $menu_name;?> > li:first-child {
    border-left:<?php echo $menu['border_size_first_lvl']; ?>px solid <?php echo $menu['border_color_first_lvl']; ?>;
}

.mnu_<?php echo $menu_name;?> > li:hover, .mnu_<?php echo $menu_name;?> > li.parent:hover  {
    background:<?php echo $menu['button_hover_bg']; ?>;
}

.mnu_<?php echo $menu_name;?> > li.active {
    background:<?php echo $menu['active_button_bg']; ?>;
    border-color:<?php echo $menu['border_color_active']; ?>;
    border-left:<?php echo $menu['border_size_first_lvl']; ?>px solid <?php echo $menu['border_color_active']; ?>;
}

.mnu_<?php echo $menu_name;?> > li.active a {
    color:<?php echo $menu['active_text_color']; ?>;
}

.mnu_<?php echo $menu_name;?> > li a:hover {
    color:#FFF;
}
 
.mnu_<?php echo $menu_name;?> > li > a {
    font-size:<?php echo $menu['font_size']; ?>px;
    color:<?php echo $menu['text_color']; ?>;
}

.mnu_<?php echo $menu_name;?> > li > a:hover {
    color:<?php echo $menu['links_hover_color']; ?>;
}

.mnu_<?php echo $menu_name;?>, .mnu_<?php echo $menu_name;?> ul {
    margin:0;
    padding:0;
    list-style-type:none;
    list-style-position:outside;
}

.mnu_<?php echo $menu_name;?> li a {
    display:block;
    text-decoration:none;
}

.mnu_<?php echo $menu_name;?> ul {
    position: absolute;
    z-index:200;
    float: left;
}

.mnu_<?php echo $menu_name;?> ul {
    display:none;
}

.mnu_<?php echo $menu_name;?> > li , .mnu_<?php echo $menu_name;?> > li  > ul > li {
    float:left;
}

.mnu_<?php echo $menu_name;?> > li:hover > ul {
    display:block;
}

.mnu_<?php echo $menu_name;?> > li.active > ul {
    display: block;
}

.navh_submenu {
    font-family:<?php echo $menu['font_family_sub']; ?>;
    float: left;
    clear: both;
}

.navh_submenu li {
    display: block;
}

div.navh_submenu {
    background:<?php echo $menu['tab_color_sub']; ?>;
    height:<?php echo $menu['tab_height_sub']; ?>px;
    line-height:<?php echo $menu['tab_height_sub']; ?>px;
    width:100%;
}

div.navh_submenu ul {
    margin: 0;
    padding: 0;
}

div.navh_submenu ul > li {
    padding:0 <?php echo $menu['horiz_button_padding_sub']; ?>px;
    margin:0;
    float:left;
}

div.navh_submenu ul > li > a {
    color:<?php echo $menu['text_color_sub']; ?> !important;
    font-size:<?php echo $menu['font_size_sub']; ?>px;
}

div.navh_submenu ul > li > a:hover {
    color:<?php echo $menu['links_hover_color_sub']; ?> !important;
}

div.navh_submenu ul > li > ul {
    padding:<?php echo $menu['horiz_pane_padding_sub_sub']; ?>px;
    background:<?php echo $menu['tab_color_sub_sub']; ?>;
    position: absolute;
    margin-left:-<?php echo $menu['horiz_button_padding_sub']; ?>px;
}

div.navh_submenu ul > li > ul > li {
    width:<?php echo $menu['tab_width_sub_sub']; ?>px;
    line-height:<?php echo $menu['horiz_pane_menu_item_height_sub_sub']; ?>px;
    padding:0;
    margin:0;
    float:none;
}

div.navh_submenu ul > li > ul > li > a {
    color:<?php echo $menu['text_color_sub_sub']; ?> !important;
    font-size:<?php echo $menu['font_size_sub_sub']; ?>px;
}

div.navh_submenu ul > li > ul > li > a:hover {
    color:<?php echo $menu['links_hover_color_sub_sub']; ?> !important;
}
  
<?php }
}
?>

<?php if ($topPanelSwitch) { ?>

/*--------------TOP PANEL ----------------*/

.first_first_first_first_first_first_sparky_top_panel_button {
	width:<?php echo $topPanelButtonWidth; ?>px;
	height:<?php echo $topPanelButtonHeight; ?>px;
	line-height:<?php echo $topPanelButtonHeight; ?>px;
	background:<?php echo $topPanelButtonBgColor; ?>;
	color:<?php echo $topPanelButtonTextColor; ?>;
	font-size:<?php echo $topPanelButtonTextSize; ?>px;
    border:1px solid <?php echo $topPanelButtonBorderColor; ?>;
    border-top:none;
    -webkit-border-radius:0 0 <?php echo $topPanelButtonBorderRadius; ?>px <?php echo $topPanelButtonBorderRadius; ?>px;
    -moz-border-radius:0 0 <?php echo $topPanelButtonBorderRadius; ?>px <?php echo $topPanelButtonBorderRadius; ?>px;
	border-radius:0 0 <?php echo $topPanelButtonBorderRadius; ?>px <?php echo $topPanelButtonBorderRadius; ?>px;
}

.first_first_first_first_first_first_sparky_top_panel_container h3 {
	color:<?php echo $topPanelH3Color; ?>;
}

.first_first_first_first_first_first_sparky_top_panel_container {
	color:<?php echo $topPanelTextColor; ?>;
    position:absolute;
    width:100%;
}

.first_first_first_first_first_first_sparky_top_panel_button {
    margin:0 auto;
    text-align:center;
    cursor:pointer;
}

.close_button {
    display:none;
}
<?php } ?>

<?php if ($scrollToTopSwitch) { ?>

/*--------------SCROLL TO TOP----------------*/

#back-top {
	<?php if($scrollToTopPosition=="bottom_right") { ?>
	bottom: 25px;
	right: 25px;
    <?php }elseif($scrollToTopPosition=="bottom_left") { ?>
    bottom: 25px;
	left: 25px;
    <?php }elseif($scrollToTopPosition=="top_right") { ?>
    top: 5px;
	right: 25px;
    <?php }else{ ?>
    top: 5px;
	left: 25px;
    <?php } ?>
}
<?php } ?>

/*--------------FONT RESIZE----------------*/

#font_resize {
    text-align:right;
}

#font_resize a {
    color:#fff;
    text-decoration:none;
    padding:0 2px;
}

.clr {
    clear:both;
}

/*--------------RESPONSIVE TOP MENU----------------*/

select.tinynav {
    background-color:#000;
    background-image:none;
    height:30px;
    color:#eee;
    border:1px solid #666;
}

.mp_topmenu {
    text-align:right;
}
