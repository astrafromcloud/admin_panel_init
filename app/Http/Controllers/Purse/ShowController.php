<?php

namespace App\Http\Controllers\Purse;

use App\Http\Controllers\Controller;
use App\Models\Purse;

class ShowController extends Controller
{
    public function __invoke(Purse $purse)
    {
        return $purse;
    }
}
