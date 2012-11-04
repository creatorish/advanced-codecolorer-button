(function() {
	tinymce.create('tinymce.plugins.advancedcode', {
		getInfo : function() {
			return {
				longname : 'Advanced Code Button',
				author : 'yuu@creatorish',
				authorurl : 'http://creatorish.com',
				infourl : 'http://creatorish.com/lab/',
				version : "0.1"
			};
		},
		init : function(ed, url) {
			ed.addButton('advanced-dcode-button', {
				title : 'Insert Code', //tileのテキスト
				cmd : 'advanced-code-click',
				image : url + '/acb_img.png'
			});
			ed.addCommand('advanced-code-click', function() {
				ed.windowManager.open({
					file : url + '/window.php',
					width : 360,
					height : 360,
					inline : 1
				}, {
					plugin_url : url
				});
			});
		}
	});
	tinymce.PluginManager.add('advancedcode', tinymce.plugins.advancedcode);
})();