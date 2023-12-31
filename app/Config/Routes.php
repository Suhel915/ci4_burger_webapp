<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/homes', 'Home::homes');


$routes->get('/login', 'Login::index');
$routes->get('/register', 'Login::register');

$routes->get('/Menu','Home::menu');
$routes->get('/contact','Home::contactus');
$routes->get('/story','Home::ourstory');

$routes->get('/dashboard','Admin::index');
$routes->get('/new','Admin::new');
$routes->get('admin/userdetail/(:num)','Admin::userDetails/$1');
$routes->post('/create','Admin::create');
$routes->get('/addstory','Admin::nstory');
$routes->post('/savestory','Admin::savestory');

$routes->get('/newpage', 'Page::index');
$routes->post('/createpage','Page::create');
$routes->get('/showpage','Page::show');
$routes->get('/page/edit/(:num)','Page::edit/$1');
$routes->post('/page/update/(:num)','Page::update/$1');
$routes->get('/page/delete/(:num)','Page::delete/$1');

$routes->get('/newcontent', 'Content::index');
$routes->post('/createcontent', 'Content::create');
$routes->get('/showcontent', 'Content::show');
$routes->get('/showcontent/(:num)', 'Content::showcontent/$1');
$routes->get('/content/edit/(:num)','Content::edit/$1');
$routes->post('/content/update/(:num)','Content::update/$1');
$routes->get('/content/delete/(:num)','Content::delete/$1');
$routes->get('/content/view_all_users','Content::view_all_users');
$routes->get('/update_role/(:num)/admin', 'Content::updateRoleToAdmin/$1');
$routes->get('/update_role/(:num)/editor', 'Content::updateRoleToEditor/$1');
$routes->get('/update_role/(:num)/user', 'Content::updateRoleToUser/$1');
$routes->get('/delete_user/(:num)', 'Content::deleteUser/$1');


$routes->get('pages/(:any)', 'Page::shows/$1'); 

service('auth')->routes($routes);



