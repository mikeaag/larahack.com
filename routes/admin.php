<?php

/**
 * @link /admin
 */
Route::get('/', 'AdminController@index')->name('index');

/**
 * @link /admin/types/*
 */
Route::resource('types', 'TypeController')->except(['show']);

/**
 * @link /admin/vote-categories/*
 */
Route::resource('vote-categories', 'VoteCategoryController')->except(['show']);

/**
 * @link /admin/events/*
 */
Route::resource('events', 'EventController')->except(['show']);

/**
 * @link /admin/roles/*
 */
Route::resource('roles', 'RoleController')->except(['show']);

/**
 * @link /admin/users/*
 */
Route::resource('users', 'UserController')->except(['show']);

/**
 * @link /admin/user-roles/*
 */
Route::resource('user-roles', 'UserRoleController')->only(['update']);
