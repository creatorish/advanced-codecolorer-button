<!DOCTYPE html>
<html>
<head>
<title>Advanced CodeColorer Button</title>
<meta charset="<?php echo get_option('blog_charset'); ?>" />
<link rel="stylesheet" href="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/themes/advanced/skins/wp_theme/dialog.css" />
<style>
.current,.panel,.panel_wrapper {
	height: auto !important;
}
.panel_wrapper {
	height: 280px !important;
}

</style>
</head>
<body id="link">
	<form id="accb-form" name="accb" action="#">
		<div class="tabs">
			<ul>
				<li id="general_tab" class="current"><span><a href="javascript:mcTabs.displayTab('general_tab', 'general_panel');" onmousedown="return false;"><?php _e("General", 'advanced-code-button'); ?></a></span></li>
			</ul>
		</div>
		<div class="panel_wrapper">
			<div id="general_panel" class="panel current">
				<table border="0" cellpadding="4" cellspacing="0" style="width: 100%;">
					<tr>
						<td colspan="2"><label><textarea id="source" name="source" style="width: 100%;height: 270px; font-family: 'Courier New',Courier,mono; font-size: 12px;" placeholder="<?php _e("Paste your source code.", 'advanced-code-button'); ?>"></textarea></label></td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="mceActionPanel">
			<input type="hidden" id="highlighter" name="highlighter" value="<?php echo get_option("acb_highlighter"); ?>" />
			<div style="float: left">
				<input type="button" id="cancel" name="cancel" value="<?php _e("Cancel", 'advanced-code-button'); ?>" onclick="tinyMCEPopup.close();" />
			</div>
			
			<div style="float: right">
				<input type="submit" id="insert" name="insert" value="<?php _e("Insert", 'advanced-code-button'); ?>" onclick="insertaccbcode();" />
			</div>
		</div>
	</form>
<script src="<?php echo get_option('siteurl') ?>/wp-includes/js/jquery/jquery.js"></script>
<script src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<script src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
<script src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/mctabs.js"></script>
<script src="<?php echo get_option('siteurl') ?>/wp-content/plugins/advanced-code-button/tinymce.js"></script>
</body>
</html>