<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Crud';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['viewloans'] = 'Crud/viewloans';

$route['viewLoanDetails/(:num)'] = 'Crud/viewLoanDetails/$1';


