require.config({
    baseUrl: 'scripts',
    paths: {
        jquery: 'vendor/jquery-1.10.2.min'
    }
});

require(["modules/info", "modules/menu"], function(info, menu) {
	menu.init();
	info.init();
});