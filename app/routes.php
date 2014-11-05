<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HelpDeskController@indexAction');
Route::get('/helpdesk/ticket', 'HelpDeskController@ticketAction');
Route::get('/helpdesk/ticket/index', 'HelpDeskController@ticketIndexAction');
Route::get('/helpdesk/ticket/browse', 'HelpDeskController@ticketBrowseAction');
Route::get('/helpdesk/ticket/new', 'HelpDeskController@ticketNewAction');
Route::get('/helpdesk/ticket/detail/new', 'HelpDeskController@ticketNewTreadAction');
Route::get('/helpdesk/ticket/detail/edit/{id}', 'HelpDeskController@ticketEditTreadAction');
Route::get('/helpdesk/ticket/detail/delete/{id}', 'HelpDeskController@ticketDeleteTreadAction');
Route::post('/helpdesk/ticket/detail/save', 'HelpDeskController@ticketNewTreadAction');
Route::post('/helpdesk/ticket/detail/save/{id}', 'HelpDeskController@ticketSaveTreadAction');
Route::get('/helpdesk/ticket/edit/{id}', 'HelpDeskController@ticketEditAction');
Route::post('/helpdesk/ticket/save', 'HelpDeskController@ticketSaveAction');
Route::post('/helpdesk/ticket/save/{id}', 'HelpDeskController@ticketSaveAction');
Route::get('/helpdesk/ticket/detail/{id}', 'HelpDeskController@ticketDetailAction');
Route::get('/helpdesk/ticket/status/{id}', 'HelpDeskController@ticketStatusAction');
Route::get('/helpdesk/ticket/delete/{id}', 'HelpDeskController@ticketDeleteAction');
Route::get('/helpdesk/user/new', 'HelpDeskController@registrationAction');
Route::get('/helpdesk/user/account/{id}', 'HelpDeskController@accountAction');
Route::get('/helpdesk/user/account/edit/{id]', 'HelpDeskController@accountEditAction');
Route::post('/helpdesk/user/account/save/', 'HelpDeskController@accountSaveAction');
Route::post('/helpdesk/user/account/save/{id]', 'HelpDeskController@accountSaveAction');
Route::get('/helpdesk/user/account/delete/{id}', 'HelpDeskController@accountDeleteAction');
Route::get('/helpdesk/user/login', 'HelpDeskController@loginAction');
Route::get('/helpdesk/user/logout', 'HelpDeskController@logoutAction');
Route::get('/helpdesk/login', 'HelpDeskController@loginAction');
Route::get('/helpdesk/logout', 'HelpDeskController@logoutAction');
// Set default route to match all other cases
Route::any('{all}', 'HelpDeskController@indexAction')->where('all', '.*');
