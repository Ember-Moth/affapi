<?php

namespace App\Http\Routes\V1;

use Illuminate\Contracts\Routing\Registrar;

class AffRoute
{
    public function map(Registrar $router)
    {
        $router->group([
            'prefix' => 'aff',
            'middleware' => 'user'
        ], function ($router) {
            $router->get('/fetch', 'V1\\Affs\\AffController@invitedUsers');
            $router->get('/invite/fetch', 'V1\\Affs\\AffController@fetchInviteCode');
        });
    }
} 
