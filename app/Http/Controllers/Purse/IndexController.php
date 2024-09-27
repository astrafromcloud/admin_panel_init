<?php

namespace App\Http\Controllers\Purse;

use App\Http\Controllers\Controller;
use App\Models\Purse;

class IndexController extends Controller
{
    public function __invoke()
    {
        $purses = Purse::all();
        return $purses;
    }
}
