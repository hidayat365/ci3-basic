<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['display_override'][] = array(
	'class'  	=> 'Develbar',
    'function' 	=> 'debug',
    'filename' 	=> 'Develbar.php',
    'filepath' 	=> 'third_party/DevelBar/hooks'
);


/*
| -------------------------------------------------------------------------
| EloquentHook
| -------------------------------------------------------------------------
*/
$hook['post_controller_constructor'][] = [
    'class'    => 'EloquentHook',
    'function' => 'bootEloquent',
    'filename' => 'EloquentHook.php',
    'filepath' => 'hooks'
];

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */