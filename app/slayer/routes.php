<?php

# ------------------------------------------------------------
# Creating Routes
# ------------------------------------------------------------
# - There are two ways to create route, there is the Facade
# and the function route()
# e.g
# -- Route::addGet() or Route::get() ...
# -- route()->addGet() or route()->get() ...


Route::addGet('/', [
    'controller' => 'Welcome',
    'action'     => 'showSignature',
]);


# -------------------------------------------------------------
# Organized Routes using RouteGroup
# -------------------------------------------------------------
# - You can manage creating your own routes

Route::mount(new App\Slayer\Routes\AuthRoutes);
Route::mount(new App\Slayer\Routes\NewsfeedRoutes);