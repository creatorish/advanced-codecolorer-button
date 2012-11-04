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
							<select id="lang" name="lang" style="width: 200px">
								<!--
								<option value="abap"><?php _e("abap", 'advanced-code-button'); ?></option>
								<option value="actionscript"><?php _e("actionscript", 'advanced-code-button'); ?></option>
								-->
								<option value="actionscript3"><?php _e("actionscript3", 'advanced-code-button'); ?></option>
								<!--
								<option value="ada"><?php _e("ada", 'advanced-code-button'); ?></option>
								<option value="apt_sources"><?php _e("apt_sources", 'advanced-code-button'); ?></option>
								<option value="asm"><?php _e("asm", 'advanced-code-button'); ?></option>
								<option value="asp"><?php _e("asp", 'advanced-code-button'); ?></option>
								<option value="autoit"><?php _e("autoit", 'advanced-code-button'); ?></option>
								<option value="avisynth"><?php _e("avisynth", 'advanced-code-button'); ?></option>
								<option value="bash"><?php _e("bash", 'advanced-code-button'); ?></option>
								<option value="bf"><?php _e("bf", 'advanced-code-button'); ?></option>
								<option value="bibtex"><?php _e("bibtex", 'advanced-code-button'); ?></option>
								<option value="blitzbasic"><?php _e("blitzbasic", 'advanced-code-button'); ?></option>
								<option value="bnf"><?php _e("bnf", 'advanced-code-button'); ?></option>
								<option value="boo"><?php _e("boo", 'advanced-code-button'); ?></option>
								-->
								<option value="c"><?php _e("c", 'advanced-code-button'); ?></option>
								<!--
								<option value="c_mac"><?php _e("c_mac", 'advanced-code-button'); ?></option>
								<option value="caddcl"><?php _e("caddcl", 'advanced-code-button'); ?></option>
								<option value="cadlisp"><?php _e("cadlisp", 'advanced-code-button'); ?></option>
								<option value="cil"><?php _e("cil", 'advanced-code-button'); ?></option>
								<option value="cfdg"><?php _e("cfdg", 'advanced-code-button'); ?></option>
								<option value="cfm"><?php _e("cfm", 'advanced-code-button'); ?></option>
								<option value="cmake"><?php _e("cmake", 'advanced-code-button'); ?></option>
								<option value="cobol"><?php _e("cobol", 'advanced-code-button'); ?></option>
								<option value="cpp-qt"><?php _e("cpp-qt", 'advanced-code-button'); ?></option>
								<option value="cpp"><?php _e("cpp", 'advanced-code-button'); ?></option>
								<option value="csharp"><?php _e("csharp", 'advanced-code-button'); ?></option>
								-->
								<option value="css"><?php _e("css", 'advanced-code-button'); ?></option>
								<!--
								<option value="d"><?php _e("d", 'advanced-code-button'); ?></option>
								<option value="dcs"><?php _e("dcs", 'advanced-code-button'); ?></option>
								-->
								<option value="delphi"><?php _e("delphi", 'advanced-code-button'); ?></option>
								<!--
								<option value="diff"><?php _e("diff", 'advanced-code-button'); ?></option>
								<option value="div"><?php _e("div", 'advanced-code-button'); ?></option>
								-->
								<option value="dos"><?php _e("dos", 'advanced-code-button'); ?></option>
								<!--
								<option value="dot"><?php _e("dot", 'advanced-code-button'); ?></option>
								<option value="eiffel"><?php _e("eiffel", 'advanced-code-button'); ?></option>
								-->
								<option value="email"><?php _e("email", 'advanced-code-button'); ?></option>
								<!--
								<option value="erlang"><?php _e("erlang", 'advanced-code-button'); ?></option>
								<option value="fo"><?php _e("fo", 'advanced-code-button'); ?></option>
								<option value="fortran"><?php _e("fortran", 'advanced-code-button'); ?></option>
								<option value="freebasic"><?php _e("freebasic", 'advanced-code-button'); ?></option>
								<option value="genero"><?php _e("genero", 'advanced-code-button'); ?></option>
								<option value="gettext"><?php _e("gettext", 'advanced-code-button'); ?></option>
								<option value="glsl"><?php _e("glsl", 'advanced-code-button'); ?></option>
								<option value="gml"><?php _e("gml", 'advanced-code-button'); ?></option>
								<option value="bnuplot"><?php _e("bnuplot", 'advanced-code-button'); ?></option>
								<option value="groovy"><?php _e("groovy", 'advanced-code-button'); ?></option>
								<option value="haskell"><?php _e("haskell", 'advanced-code-button'); ?></option>
								<option value="hq9plus"><?php _e("hq9plus", 'advanced-code-button'); ?></option>
								-->
								<option value="html4strict"><?php _e("html4strict", 'advanced-code-button'); ?></option>
								<!--
								<option value="idl"><?php _e("idl", 'advanced-code-button'); ?></option>
								<option value="ini"><?php _e("ini", 'advanced-code-button'); ?></option>
								<option value="inno"><?php _e("inno", 'advanced-code-button'); ?></option>
								<option value="intercal"><?php _e("intercal", 'advanced-code-button'); ?></option>
								<option value="io"><?php _e("io", 'advanced-code-button'); ?></option>
								-->
								<option value="java"><?php _e("java", 'advanced-code-button'); ?></option>
								<option value="java5"><?php _e("java5", 'advanced-code-button'); ?></option>
								<option value="javascript"><?php _e("javascript", 'advanced-code-button'); ?></option>
								<!--
								<option value="kixtart"><?php _e("kixtart", 'advanced-code-button'); ?></option>
								<option value="klonec"><?php _e("klonec", 'advanced-code-button'); ?></option>
								<option value="klonecpp"><?php _e("klonecpp", 'advanced-code-button'); ?></option>
								<option value="latex"><?php _e("latex", 'advanced-code-button'); ?></option>
								<option value="lisp"><?php _e("lisp", 'advanced-code-button'); ?></option>
								<option value="locobasic"><?php _e("locobasic", 'advanced-code-button'); ?></option>
								<option value="lolcode"><?php _e("lolcode", 'advanced-code-button'); ?></option>
								<option value="lotusformulas"><?php _e("lotusformulas", 'advanced-code-button'); ?></option>
								<option value="lotusscript"><?php _e("lotusscript", 'advanced-code-button'); ?></option>
								<option value="lscript"><?php _e("lscript", 'advanced-code-button'); ?></option>
								<option value="lsl2"><?php _e("lsl2", 'advanced-code-button'); ?></option>
								<option value="lua"><?php _e("lua", 'advanced-code-button'); ?></option>
								<option value="m68k"><?php _e("m68k", 'advanced-code-button'); ?></option>
								<option value="make"><?php _e("make", 'advanced-code-button'); ?></option>
								<option value="matlab"><?php _e("matlab", 'advanced-code-button'); ?></option>
								<option value="mirc"><?php _e("mirc", 'advanced-code-button'); ?></option>
								<option value="modula3"><?php _e("modula3", 'advanced-code-button'); ?></option>
								<option value="mpasm"><?php _e("mpasm", 'advanced-code-button'); ?></option>
								<option value="mxml"><?php _e("mxml", 'advanced-code-button'); ?></option>
								<option value="mysql"><?php _e("mysql", 'advanced-code-button'); ?></option>
								<option value="nsis"><?php _e("nsis", 'advanced-code-button'); ?></option>
								<option value="oberon2"><?php _e("oberon2", 'advanced-code-button'); ?></option>
								-->
								<option value="objc"><?php _e("objc", 'advanced-code-button'); ?></option>
								<!--
								<option value="ocaml-brief"><?php _e("ocaml-brief", 'advanced-code-button'); ?></option>
								<option value="ocaml"><?php _e("ocaml", 'advanced-code-button'); ?></option>
								<option value="oobas"><?php _e("oobas", 'advanced-code-button'); ?></option>
								<option value="oracle11"><?php _e("oracle11", 'advanced-code-button'); ?></option>
								<option value="oracle8"><?php _e("oracle8", 'advanced-code-button'); ?></option>
								<option value="pascal"><?php _e("pascal", 'advanced-code-button'); ?></option>
								<option value="per"><?php _e("per", 'advanced-code-button'); ?></option>
								<option value="pic16"><?php _e("pic16", 'advanced-code-button'); ?></option>
								<option value="pixelbender"><?php _e("pixelbender", 'advanced-code-button'); ?></option>
								-->
								<option value="perl"><?php _e("perl", 'advanced-code-button'); ?></option>
								<!--
								<option value="php-brief"><?php _e("php-brief", 'advanced-code-button'); ?></option>
								-->
								<option value="php"><?php _e("php", 'advanced-code-button'); ?></option>
								<!--
								<option value="plsql"><?php _e("plsql", 'advanced-code-button'); ?></option>
								<option value="povray"><?php _e("povray", 'advanced-code-button'); ?></option>
								<option value="powershell"><?php _e("powershell", 'advanced-code-button'); ?></option>
								<option value="progress"><?php _e("progress", 'advanced-code-button'); ?></option>
								<option value="prolog"><?php _e("prolog", 'advanced-code-button'); ?></option>
								<option value="properties"><?php _e("properties", 'advanced-code-button'); ?></option>
								<option value="providex"><?php _e("providex", 'advanced-code-button'); ?></option>
								-->
								<option value="python"><?php _e("python", 'advanced-code-button'); ?></option>
								<!--
								<option value="qbasic"><?php _e("qbasic", 'advanced-code-button'); ?></option>
								-->
								<option value="rails"><?php _e("rails", 'advanced-code-button'); ?></option>
								<!--
								<option value="rebol"><?php _e("rebol", 'advanced-code-button'); ?></option>
								<option value="reg"><?php _e("reg", 'advanced-code-button'); ?></option>
								<option value="robots"><?php _e("robots", 'advanced-code-button'); ?></option>
								-->
								<option value="ruby"><?php _e("ruby", 'advanced-code-button'); ?></option>
								<!--
								<option value="sas"><?php _e("sas", 'advanced-code-button'); ?></option>
								<option value="scala"><?php _e("scala", 'advanced-code-button'); ?></option>
								<option value="scheme"><?php _e("scheme", 'advanced-code-button'); ?></option>
								<option value="scilab"><?php _e("scilab", 'advanced-code-button'); ?></option>
								<option value="sdlbasic"><?php _e("sdlbasic", 'advanced-code-button'); ?></option>
								<option value="smalltalk"><?php _e("smalltalk", 'advanced-code-button'); ?></option>
								-->
								<option value="smarty"><?php _e("smarty", 'advanced-code-button'); ?></option>
								<option value="sql"><?php _e("sql", 'advanced-code-button'); ?></option>
								<!--
								<option value="tcl"><?php _e("tcl", 'advanced-code-button'); ?></option>
								-->
								<option value="teraterm"><?php _e("teraterm", 'advanced-code-button'); ?></option>
								<option value="text"><?php _e("text", 'advanced-code-button'); ?></option>
								<!--
								<option value="thinbasic"><?php _e("thinbasic", 'advanced-code-button'); ?></option>
								<option value="tsql"><?php _e("tsql", 'advanced-code-button'); ?></option>
								<option value="typoscript"><?php _e("typoscript", 'advanced-code-button'); ?></option>
								-->
								<option value="vb"><?php _e("vb", 'advanced-code-button'); ?></option>
								<!--
								<option value="vbnet"><?php _e("vbnet", 'advanced-code-button'); ?></option>
								<option value="verilog"><?php _e("verilog", 'advanced-code-button'); ?></option>
								<option value="vhdl"><?php _e("vhdl", 'advanced-code-button'); ?></option>
								-->
								<option value="vim"><?php _e("vim", 'advanced-code-button'); ?></option>
								<!--
								<option value="visualfoxpro"><?php _e("visualfoxpro", 'advanced-code-button'); ?></option>
								<option value="visualprolog"><?php _e("visualprolog", 'advanced-code-button'); ?></option>
								<option value="whitespace"><?php _e("whitespace", 'advanced-code-button'); ?></option>
								<option value="whois"><?php _e("whois", 'advanced-code-button'); ?></option>
								<option value="winbatch"><?php _e("winbatch", 'advanced-code-button'); ?></option>
								-->
								<option value="xml"><?php _e("xml", 'advanced-code-button'); ?></option>
								<!--
								<option value="xorg_conf"><?php _e("xorg_conf", 'advanced-code-button'); ?></option>
								<option value="xpp"><?php _e("xpp", 'advanced-code-button'); ?></option>
								<option value="z80"><?php _e("z80", 'advanced-code-button'); ?></option>
								-->
							</select>
						</td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="line"><?php _e("Line", 'advanced-code-button'); ?></label></td>
						<td><label><input name="line" id='line' type="text" maxlength="4" value="1" /></label></td>
					</tr>
					<tr>
						<td nowrap="nowrap" valign="top"><label for="escaped"><?php _e("Escaped", 'advanced-code-button'); ?></label></td>
						<td><label><input name="escaped" id='escaped' type="checkbox" checked="checked" /></label></td>
					</tr>
					<tr>
						<td colspan="2"><label><textarea id="source" name="source" style="width: 100%;height: 180px; font-family: 'Courier New',Courier,mono; font-size: 12px;" placeholder="<?php _e("Paste your source code.", 'advanced-code-button'); ?>"></textarea></label></td>
					</tr>
				</table>
			</div>
			
			<div id="style_panel" class="panel">
				<table border="0" cellpadding="4" cellspacing="0" style="width: 100%;">
					<tr>
						<td nowrap="nowrap" valign="top"><label for="highlight"><?php _e("Highlight", 'advanced-code-button'); ?></label></td>
						<td><label><input name="highlight" id='highlight' type="text" maxlength="128" /></label></td>
					</tr>
					
					<tr>
						<td nowrap="nowrap" valign="top"><label for="src"><?php _e("Source", 'advanced-code-button'); ?></label></td>
						<td><label><input name="src" id='src' type="text "maxlength="128" /></label></td>
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