<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sprinkle - Asset management library
 * 
 * @author 		Edmundas Kondrašovas <as@edmundask.lt>
 * @license		http://www.opensource.org/licenses/MIT
 */

/* JS */

$config['assets']['jquery'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	true,
	'minify'  			=>	false,
	'versions'			=>	array
	(
		'default'		=>  'jquery-1.7.2.min.js'		
	)
);

$config['assets']['jquery-totop'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	true,
	'minify'  			=>	true,
	'versions'			=>	array
	(
		'default'			=>	'jquery.ui.totop.js',
		
	)
);

$config['assets']['html5shiv'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	true,
	'minify'  			=>	true,
	'versions'			=>	array
	(
		'default'			=>	'html5shiv.js',
		
	)
);

$config['assets']['jquery.easing'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	true,
	'minify'  			=>	true,
	'versions'			=>	array
	(
		'default'		=>	'easing.js'
	)
);

$config['assets']['jquery.fancybox'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	true,
	'minify'  			=>	false,
	'versions'			=>	array
	(
		'default'		=>	'jquery.fancybox-1.3.4.pack.js'
	)
);

$config['assets']['scripts'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	true,
	'minify'  			=>	true,
	'versions'			=>	array
	(
		'default'		=>	'scripts.js'
	)
);

$config['assets']['bs-js'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	true,
	'minify'  			=>	false,
	'versions'			=>	array
	(
		'default'		=>	'bootstrap.min.js'
	)
);

$config['assets']['highlight'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	true,
	'minify'  			=>	true,
	'versions'			=>	array
	(
		'default'		=>	'jquery.highlight.js'
	)
);

/* CSS */

$config['assets']['old-front'] = array
(
	'type'    			=>	'css',
	'combine' 			=>	true,
	'minify'  			=>	true,
	'versions'			=>	array
	(
		'default'		=>	'old-front.css'
	)
);

$config['assets']['totop-css'] = array
(
	'type'    			=>	'css',
	'combine' 			=>	true,
	'minify'  			=>	true,
	'versions'			=>	array
	(
		'default'		=>	'ui.totop.css'
	)
);

$config['assets']['fancybox'] = array
(
	'type'    			=>	'css',
	'combine' 			=>	false,
	'minify'  			=>	false,
	'versions'			=>	array
	(
		'default'		=>	'jquery.fancybox-1.3.4.css'
	)
);

$config['assets']['bs-css'] = array
(
	'type'    			=>	'css',
	'combine' 			=>	true,
	'minify'  			=>	false,
	'filters'           =>  array('css_rewrite'),
	'versions'			=>	array
	(
		'default'		=>	'bootstrap.min.css'
	)
);

/*
|-------------------------------------------------------------------------
| Asset groups
|-------------------------------------------------------------------------
*/

$config['assets']['js-libs'] = array
(
	'type'  		=>	'group',
	'assets'		=>	array('jquery-totop', 'bs-js', 'jquery.easing', 'jquery.fancybox', 'scripts', 'highlight')
);

$config['assets']['css-frontend'] = array
(
	'type'  		=>	'group',
	'assets'		=>	array('bs-css', 'old-front', 'totop-css', 'fancybox')
);

/*
$config['assets']['css-backend'] = array
(
	'type'  		=>	'group',
	'assets'		=>	array('treeview', 'fancybox', 'ui', 'backend', 'oi', 'fileuploader', 'menu')
);
*/
