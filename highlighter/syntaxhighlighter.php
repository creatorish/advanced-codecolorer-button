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
				<li id="style_tab"><span><a href="javascript:mcTabs.displayTab('style_tab', 'style_panel');" onmousedown="return false;"><?php _e("Style", 'advanced-code-button'); ?></a></span></li>
			</ul>
		</div>
		<div class="panel_wrapper">
			<div id="general_panel" class="panel current">
				<table border="0" cellpadding="4" cellspacing="0" style="width: 100%;">
					<tr>
						<td nowrap="nowrap"><label for="lang"><?php _e("Select Language", 'advanced-code-button'); ?></label></td>
						<td>
							<select id="lang" name="language" style="width: 200px">
								<option value="actionscript3"><?php _e("actionscript3", 'advanced-code-button'); ?></option>
								<option value="bash"><?php _e("bash", 'advanced-code-button'); ?></option>
								<option value="clojure"><?php _e("clojure", 'advanced-code-button'); ?></option>
								<option value="coldfusion"><?php _e("coldfusion", 'advanced-code-button'); ?></option>
								<option value="cpp"><?php _e("cpp", 'advanced-code-button'); ?></option>
								<option value="csharp"><?php _e("csharp", 'advanced-code-button'); ?></option>
								<option value="css"><?php _e("css", 'advanced-code-button'); ?></option>
								<option value="delphi"><?php _e("delphi", 'advanced-code-button'); ?></option>
								<option value="erlang"><?php _e("erlang", 'advanced-code-button'); ?></option>
								<option value="fsharp"><?php _e("fsharp", 'advanced-code-button'); ?></option>
								<option value="diff"><?php _e("diff", 'advanced-code-button'); ?></option>
								<option value="groovy"><?php _e("groovy", 'advanced-code-button'); ?></option>
								<option value="html"><?php _e("html", 'advanced-code-button'); ?></option>
								<option value="javascript"><?php _e("javascript", 'advanced-code-button'); ?></option>
								<option value="java"><?php _e("java", 'advanced-code-button'); ?></option>
								<option value="javafx"><?php _e("javafx", 'advanced-code-button'); ?></option>
								<option value="matlab"><?php _e("matlab", 'advanced-code-button'); ?></option>
								<option value="objc"><?php _e("objc", 'advanced-code-button'); ?></option>
								<option value="perl"><?php _e("perl", 'advanced-code-button'); ?></option>
								<option value="php"><?php _e("php", 'advanced-code-button'); ?></option>
								<option value="text"><?php _e("text", 'advanced-code-button'); ?></option>
								<option value="powershell"><?php _e("powershell", 'advanced-code-button'); ?></option>
								<option value="python"><?php _e("python", 'advanced-code-button'); ?></option>
								<option value="r"><?php _e("r", 'advanced-code-button'); ?></option>
								<option value="ruby"><?php _e("ruby", 'advanced-code-button'); ?></option>
								<option value="scala"><?php _e("scala", 'advanced-code-button'); ?></option>
								<option value="sql"><?php _e("sql", 'advanced-code-button'); ?></option>
								<option value="vb"><?php _e("vb", 'advanced-code-button'); ?></option>
								<option value="xml"><?php _e("xml", 'advanced-code-button'); ?></option>
							</select>
						</td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="gutter"><?php _e("Gutter", 'advanced-code-button'); ?></label></td>
						<td><label><input name="gutter" id='gutter' type="checkbox" checked="checked" /></label></td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="htmlscript"><?php _e("HTML Script", 'advanced-code-button'); ?></label></td>
						<td><label><input name="htmlscript" id='htmlscript' type="checkbox" /></label></td>
					</tr>
					<tr>
						<td colspan="2"><label><textarea id="source" name="source" style="width: 100%;height: 180px; font-family: 'Courier New',Courier,mono; font-size: 12px;" placeholder="<?php _e("Paste your source code.", 'advanced-code-button'); ?>"></textarea></label></td>
					</tr>
				</table>
			</div>
			
			<div id="style_panel" class="panel">
				<table border="0" cellpadding="4" cellspacing="0" style="width: 100%;">
					<tr>
						<td nowrap="nowrap" valign="top"><label for="autolinks"><?php _e("Auto Links", 'advanced-code-button'); ?></label></td>
						<td><label><input name="autolinks" id='autolinks' type="checkbox" /></label></td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="light"><?php _e("Light", 'advanced-code-button'); ?></label></td>
						<td><label><input name="light" id='light' type="checkbox" /></label></td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="toolbar"><?php _e("Toolbar", 'advanced-code-button'); ?></label></td>
						<td><label><input name="toolbar" id='toolbar' type="checkbox" /></label></td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="wraplines"><?php _e("Wrap Lines", 'advanced-code-button'); ?></label></td>
						<td><label><input name="wraplines" id='wraplines' type="checkbox" /></label></td>
					</tr>
					
					<tr>
						<td nowrap="nowrap" valign="top"><label for="firstline"><?php _e("First Line", 'advanced-code-button'); ?></label></td>
						<td><label><input name="firstline" id='firstline' type="text" maxlength="4" /></label></td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="highlight"><?php _e("Highlight", 'advanced-code-button'); ?></label></td>
						<td><label><input name="highlight" id='highlight' type="text" maxlength="256" /></label></td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="padlinenumbers"><?php _e("Pad Line Numbers", 'advanced-code-button'); ?></label></td>
						<td><label><input name="padlinenumbers" id='padlinenumbers' type="text "maxlength="5" /></label></td>
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