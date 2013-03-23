<script type="text/javascript">

jQuery(function() {
	jQuery('.second_second_second_second_second_second_sparky_full').first().css('display','none')
								  .css('color', '<?php echo $topPanelTextColor; ?>')
								  .find('h3').css('color', '<?php echo $topPanelH3Color; ?>');
	
	jQuery('.second_second_second_second_second_second_sparky_top_panel_button').on('click', function(){	
		jQuery('.second_second_second_second_second_second_sparky_full').first().css('background', '<?php echo $topPanelBgColor; ?>').slideToggle('fast');
		jQuery('.open_button').toggle();
		jQuery('.close_button').toggle();
	})
	
});

</script>

<div class="second_second_second_second_second_second_sparky_top_panel_container">
	<div class="second_second_second_second_second_second_sparky_top_panel_button">
		<span class="open_button"><?php echo $topPanelOpen; ?></span>
		<span class="close_button"><?php echo $topPanelClose; ?></span>
	</div>
</div>
