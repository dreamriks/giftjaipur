<script type="text/javascript" src="<?php echo $template_path ?>/js/jquery.equal-height-columns.js"></script>
<?php
$equalHeightClass = explode(",", $equalHeightClasses);
$equalHeightClassesNumber = count($equalHeightClass);
?>
<script type="text/javascript">
	<?php for ($loop = 0; $loop < $equalHeightClassesNumber; $loop += 1) {
	$equalHeightClass[$loop] = str_replace(".", "", $equalHeightClass[$loop]);
	$equalHeightClass[$loop] = str_replace(" ", "", $equalHeightClass[$loop]);
	?>
	var windowWidth = jQuery(window).width();
	if(windowWidth > 767) {
		jQuery('.<?php echo $equalHeightClass[$loop]; ?>').find('.cell_pad').equalHeightColumns();
	}
	<?php } ?>
</script>
