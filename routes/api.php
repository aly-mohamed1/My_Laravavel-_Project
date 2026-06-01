<?php

use App\Http\Controllers\InitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DeliveryController,
    DeliveryStatuseController,
    DriverController,
    LocationController,
    NotificationController,
    OrderController,
    RolesController,
    UserController
};

Route::prefix('init')->controller(InitController::class)->group(function(){
    Route::get('models', 'models');
});


Route::apiResources([
    'deliveries' => DeliveryController::class,
    'deliveries_statuses' => DeliveryStatuseController::class,
    'driver' => DriverController::class,
    'locations' => LocationController::class,
    'notifications' => NotificationController::class,
    'orders' => OrderController::class,
    'roles' => RolesController::class,
    'users' => UserController::class,
]);
