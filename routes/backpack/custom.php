<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('qs', 'QSCrudController');
    CRUD::resource('pm', 'PMCrudController');
    CRUD::resource('gr', 'GRCrudController');
    CRUD::resource('part', 'PartCrudController');
    CRUD::resource('tambahan', 'TambahanCrudController');
    CRUD::resource('mobil', 'MobilCrudController');
}); // this should be the absolute last line of this file
