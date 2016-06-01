var elixir = require('laravel-elixir');
elixir.config.assetsPath = 'public/plugins/';
elixir.config.css.folder = '';
elixir.config.js.folder = '';

elixir.config.versioning.buildFolder = '/';


elixir(function(mix) {

	// Join CSS files
    mix.styles([
		'bootstrap/dist/css/bootstrap.min.css',
		'font-awesome/css/font-awesome.min.css',
		'/Ionicons/css/ionicons.min.css',
		'/datetimepicker/build/jquery.datetimepicker.min.css',
		'/sweetalert2/dist/sweetalert2.min.css',
		'/chosen/chosen.css',
		'/datatables-bootstrap/1/dataTables.bootstrap.css',
		'/AdminLTE/dist/css/AdminLTE.min.css',
		'/AdminLTE/dist/css/skins/skin-blue.min.css'
	], 'public/assets/css/admin.css');

    // Join JS files
	mix.scripts([
		'jquery/dist/jquery.min.js',
		'bootstrap/dist/js/bootstrap.min.js',
		'datetimepicker/build/jquery.datetimepicker.full.min.js',
		'ckeditor/ckeditor.js',
		'datatables/media/js/jquery.dataTables.min.js',
		'datatables/media/js/dataTables.bootstrap.js',
		'AdminLTE/dist/js/app.min.js',
	], 'public/assets/js/admin.js');

    // Copy Fonts
	mix.copy(
	   'public/plugins/font-awesome/fonts',
	   'public/assets/fonts'
    );


	// Versionning
	mix.version(['public/assets/css/admin.css', 'public/assets/js/admin.js']);
});


