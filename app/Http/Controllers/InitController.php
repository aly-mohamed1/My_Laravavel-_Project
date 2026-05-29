<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class InitController extends Controller
{
    private $models = [
        'User',
        'Roles',
        'DeliveryStatuse',
        'Order',
        'Driver',
        'Delivery',
        'Location',
        'Notification',
        'PersonalAccessToken'
    ];

    // public function controllers(){

    //     $classes = [
    //         'Role',
    //         'DeliveryStatuse',
    //         'Order',
    //         'Driver',
    //         'Delivery',
    //         'Location',
    //         'Notification',
    //         'PersonalAccessToken'
    //     ];

    //     foreach ($this->models as $model){
    //         Artisan::call('make:controller', [
    //             'name' => $model.'Controller',
    //             // '-r' => true,
    //             '--api' => true,
    //         ]);
    //     }
    // }
    public function Models()
    {
        foreach ($this->models as $model){
            Artisan::call('make:model', [
                'name' => $model,
                '-a' => true,
                '--force' => true,

            ]);
            sleep(1);
        }
    }
}
