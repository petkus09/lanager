<?php

/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
Route::resource('users', 'Zeropingheroes\Lanager\UsersController');
Route::resource('user-roles', 'Zeropingheroes\Lanager\UserRolesController');
Route::resource('user-achievements', 'Zeropingheroes\Lanager\UserAchievementsController');

/*
|--------------------------------------------------------------------------
| Sessions
|--------------------------------------------------------------------------
*/
Route::resource('sessions', 'Zeropingheroes\Lanager\SessionsController');
Route::get('login', array('as' => 'sessions.login', 'uses' => 'Zeropingheroes\Lanager\SessionsController@create'));
Route::get('logout', array('as' => 'sessions.logout', 'uses' => 'Zeropingheroes\Lanager\SessionsController@destroy'));

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/
Route::resource('pages', 'Zeropingheroes\Lanager\PagesController');

/*
|--------------------------------------------------------------------------
| Shouts
|--------------------------------------------------------------------------
*/
Route::resource('shouts', 'Zeropingheroes\Lanager\ShoutsController');

/*
|--------------------------------------------------------------------------
| Usage
|--------------------------------------------------------------------------
*/
Route::resource('usage', 'Zeropingheroes\Lanager\UsageController', array('only' => array('index', 'show')));

/*
|--------------------------------------------------------------------------
| Events
|--------------------------------------------------------------------------
*/
Route::get('events/timetable', array('as' => 'events.timetable', 'uses' => 'Zeropingheroes\Lanager\EventsController@timetable'));
Route::resource('events', 'Zeropingheroes\Lanager\EventsController');
Route::resource('events.signups', 'Zeropingheroes\Lanager\EventSignupsController');

/*
|--------------------------------------------------------------------------
| Playlists
|--------------------------------------------------------------------------
*/
Route::resource('playlists', 'Zeropingheroes\Lanager\PlaylistsController');
Route::resource('playlists.items', 'Zeropingheroes\Lanager\PlaylistItemsController');
Route::resource('playlists.items.votes', 'Zeropingheroes\Lanager\PlaylistItemVotesController');

/*
|--------------------------------------------------------------------------
| Achievements
|--------------------------------------------------------------------------
*/
Route::resource('achievements', 'Zeropingheroes\Lanager\AchievementsController');

/*
|--------------------------------------------------------------------------
| Index
|--------------------------------------------------------------------------
*/
Route::get('/', function()
{
	return Redirect::to('shouts');
});