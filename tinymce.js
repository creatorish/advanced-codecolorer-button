var SHORT_CODE = "program";
function insertaccbcode() {
	var langname = jQuery("#lang").val();
	var code = jQuery("#source").val();
	var inst = tinyMCE.getInstanceById("content");
	var shortMode = jQuery("#accb-form #shorttag").is(":checked");
	var html = inst.selection.getContent();
	var tag = "[" + SHORT_CODE;
	if (langname) {
		tag += " " + jQuery("#lang").attr("name") + "='" + langname + "' ";
	}
	var options = jQuery("#accb-form input:checkbox:checked");
	jQuery.each(options, function() {
		var name = jQuery(this).attr("name");
		if (name !== "shorttag") {
			tag += " " + name + "='true'";
		}
	});
	options = jQuery("#accb-form input:text");
	jQuery.each(options, function() {
		var val = jQuery(this).val();
		if (val && val.length > 0) {
			var name = jQuery(this).attr("name");
			tag += " " + name + "='" + val + "'";
		}
	});
	
	var theme = jQuery("#theme").val();
	if (theme) {
		tag += " theme='" + theme + "'";
	}
	
	if (code) {
		html = escapeHTML(code);
	}
	
	
	
	tag += "]<pre>" + removeaccbcode(html) + "</pre>[/" + SHORT_CODE + "]";
	
	window.tinyMCE.execInstanceCommand("content", "mceInsertContent", false, tag);
	tinyMCEPopup.close();
	return;
}

function setFocusSourceCode() {
	var inst = tinyMCE.getInstanceById("content");
	var html = inst.selection.getContent();
	if (html) {
		setAttr(html);
		
		html = removeHTML(html);
		html = unescapeHTML(html);
		html = removeaccbcode(html);
		jQuery("#source").val(html);
	}
}
function removeHTML(str) {
	return str.replace(/<.+?>/g,"");
}
function escapeHTML(str) {
	str = str.replace(/&/g,"&amp;");
	str = str.replace(/\\/g,"&yen;");
	str = str.replace(/\|/g,"&brvbar;");
	str = str.replace(/"/g,"&quot;");
	str = str.replace(/</g,"&lt;");
	str = str.replace(/>/g,"&gt;");
	str = str.replace(/[\n|\r]/g,"\r");
	return str;
}
function unescapeHTML(str) {
	str = str.replace(/&lt;/g,"<");
	str = str.replace(/&gt;/g,">");
	str = str.replace(/&quot;/g,'"');
	str = str.replace(/&brvbar;/g,"|");
	str = str.replace(/&yen;/g,"\\");
	str = str.replace(/&amp;/g,"&");
	return str;
}
function removeaccbcode(html) {
	var reg = new RegExp('\\[' + SHORT_CODE + '.*?\\]');
	var tag = String(html).replace(reg,"");
	
	reg = new RegExp('\\[\/' + SHORT_CODE + '.*?\\]');
	tag = String(tag).replace(reg,"");
	
	return tag;
}

function setAttr(str) {
	var reg = new RegExp('\\[' + SHORT_CODE + '.*?\\]');
	var shortcode = String(str).match(reg);
	if (shortcode) {
		reg = new RegExp('^\\[' + SHORT_CODE);
		shortcode = String(shortcode).replace(reg,"<div");
		shortcode = shortcode.replace(/\]$/,"></div>");
		
		var atts = jQuery(shortcode).get(0).attributes;
		
		jQuery("input:checked").removeAttr("checked");
		for (var i = 0; i < atts.length; i++) {
			var key = atts[i].name;
			var val = atts[i].value;
			var elm = jQuery("#" + key);
			if (elm.attr("type") === "checkbox") {
				if (val === true || val === "true") {
					elm.attr("checked","checked");
				} else {
					elm.removeAttr("checked");
				}
			} else {
				jQuery("#" + key).val(val);
			}
		}
	}
}

function init() {
	tinyMCEPopup.resizeToInnerSize();
	setFocusSourceCode();
}
tinyMCEPopup.executeOnLoad("init();");