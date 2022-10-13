<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function adapt()
    {
        return response(
            '
            Seu JSON:
                {
                    "Matheus" : "Backend",
                    "Ruffino" : "Power BI"
                }
            
            Em XML:

                <Matheus>Backend<Matheus>
                <Ruffino>Backend<Ruffino>

            '
        );
    }
}
