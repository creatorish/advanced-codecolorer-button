<?php
/*
Plugin Name: Advanced Code Button
Plugin URI: http://creatorish.com/lab/4411
Description: Advanced Code Insert Button Plugin for TinyMCE.
Version: 0.1
Author: yuu@creatorish
Author URI:  http://creatorish.com
*/

function accb_addbuttons() {
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
		return;
	}
	
	load_plugin_textdomain("advanced-code-button", false, dirname(plugin_basename(__FILE__)) . '/languages' );
	
	if ( get_user_option('rich_editing') == 'true') {
		add_filter('mce_external_plugins', 'add_accb_plugin');
		add_filter('mce_buttons', 'register_accb_button');
	}
}

function register_accb_button($buttons) {
	array_push($buttons, "separator", "advanced-dcode-button");
	return $buttons;
}

function add_accb_plugin($plugin_array) {
	$plugin_array['advancedcode'] = get_option('siteurl') .'/wp-content/plugins/advanced-code-button/editor_plugin.js';
	return $plugin_array;
}
add_action('init','accb_addbuttons');

function generateCCCode($atts,$content=null) {
	$highlighter = get_option("acb_highlighter");
	switch($highlighter) {
		case "codecolorer":
			$content = strip_tags($content);
			$tag = "[cc";
			foreach ($atts as $key => $value) {
				$tag .= " " . $key . "='" . $value . "'";
			}
			$tag .= "]" . $content . "[/cc]";
			$content = codecolorer_highlight($tag);
			break;
		case "syntaxhighlighter":
			global $SyntaxHighlighter;
			$content = html_entity_decode(strip_tags($content));
			$tag = "[code";
			foreach ($atts as $key => $value) {
				$tag .= " " . $key . "='" . $value . "'";
			}
			$tag .= "]" . $content . "[/code]";
			if (isset($SyntaxHighlighter)) {
				$content = $SyntaxHighlighter->parse_shortcodes($tag);
			} else {
				$content = "<pre>" . $content . "</pre>";
			}
			break;
		case "wpsyntax":
			$content = strip_tags($content);
			$tag = "<pre";
			foreach ($atts as $key => $value) {
				$tag .= " " . $key . "='" . $value . "'";
			}
			$tag .= ">" . $content . "</pre>";
			if (function_exists("wp_syntax_before_filter")) {
				$content = wp_syntax_before_filter($tag);
			} else {
				$content = "<pre>" . $content . "</pre>";
			}
			break;
		default:
			break;
	}
	return $content;
}
add_shortcode('program', 'generateCCCode');
add_action('admin_menu', 'acb_plugin_menu');

function get_support_hightligher() {
	return array(
		"none"=>"None",
		"codecolorer"=>"CodeColorer",
		"syntaxhighlighter"=>"SyntaxHighlighter Evolved",
		"wpsyntax"=>"WP-Syntax"
	);
}

function acb_plugin_menu() {
	add_options_page('Advanced Code Button', 'Advanced Code Button', 8, __FILE__, 'acb_options');
}

function setSelectBox($val) {
	foreach(get_support_hightligher() as $id => $name) {
		echo '<option value="' . $id . '"';
		if ($id == $val) {
			echo ' selected="selected"';
		}
		echo '>' . $name . '</option>';
	}
}

function acb_options() {
?>
<div class="wrap">
	<?php screen_icon(); ?>
	<h2>Advanced Code Button: <?php _e('Options', 'advanced-code-button') ?></h2>
	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<table width="100%" cellpadding="5" class="form-table">
			<tr valign="top">
				<th scope="row"><label for="acb_highlighter"><?php _e('Highlighter Plugin', 'advanced-code-button') ?>:</label></th>
				<td>
					<select name="acb_highlighter">
						<?php setSelectBox(get_option("acb_highlighter"));?>
					</select>
					<span class="description"><?php _e('Select your &quot;Highlighter Plugin&quot;.', 'advanced-code-button') ?></span>
				</td>
			</tr>
		</table>
		<p class="submit">
			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="page_options" value="acb_highlighter" />
			<input type="submit" class="button-primary" name="Submit" value="<?php _e('Save Options', 'advanced-code-button') ?> &raquo;" />
		</p>
	</form>
</div>
<?php } ?>