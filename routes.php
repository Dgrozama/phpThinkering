<?php
//definim les rutes
return [
    '' => 'HomeController@index',
    'films' => 'FilmController@index',
    'films/create' => 'FilmController@create',
    'films/store' => 'FilmController@store',
    'films/show' => 'FilmController@show',
    'films/edit' => 'FilmController@edit',
    'films/update' => 'FilmController@update',
    'films/delete' => 'FilmController@delete',
    'series' => 'SeriesController@index',
    'series/create' => 'SeriesController@create',
    'series/store' => 'SeriesController@store',
    'series/show' => 'SeriesController@show',
    'series/edit' => 'SeriesController@edit',
    'series/update' => 'SeriesController@update',
    'series/delete' => 'SeriesController@delete',
];