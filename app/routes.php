<?php
/**
 * @author         Pierre-Henry Soria <hi@ph7.me>
 * @copyright      (c) 2017-2018, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

use Core\Route;

Route::get('/', 'LifeGenerator@residence');
Route::get('/my-residence', 'LifeGenerator@residence');
Route::post('/my-nationality', 'LifeGenerator@nationality');
Route::post('/my-destination', 'LifeGenerator@destination');
Route::post('/my-gender', 'LifeGenerator@gender');
Route::post('/my-age', 'LifeGenerator@age');
Route::post('/my-lifestyle', 'LifeGenerator@lifestyle');
Route::post('/my-background', 'LifeGenerator@background');
Route::post('/job-type', 'LifeGenerator@job');
Route::post('/my-saving', 'LifeGenerator@saving');
Route::post('/availability', 'LifeGenerator@availability');
Route::post('/get-results', 'LifeGenerator@results');
Route::post('/confirmation', 'LifeGenerator@confirmation');

Route::get('/about', 'Page@about');
Route::get('/posts', 'Page@posts');
Route::get('/post', 'Page@post');

// Redirection
Route::location('/apps', 'https://docs.google.com/document/d/1HU1dUSix37K1f6COKQkMcDLeE72RZK8Y1yP8EFO8L30/');
Route::location('/podcast', 'https://itunes.apple.com/us/podcast/tropical-mba-location-independent-entrepreneurship/id325757845');
