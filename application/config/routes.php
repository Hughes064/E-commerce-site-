<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
$route['default_controller'] = 'mains';
$route['add'] = 'mains/add';
$route['delete'] = 'mains/delete';
$route['main'] = 'mains/delete_course';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
