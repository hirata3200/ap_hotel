<?php

Route::get('/user','UserController@index');

Route::get('/reserve','ReserveController@index');

Route::get('/roomaster','RoomasterController@index');

Route::get('/room','RoomController@index');