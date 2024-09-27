<?php

namespace App\Http\Controllers\Purse;

use App\Http\Controllers\Controller;
use App\Models\Purse;

class DeleteController extends Controller
{
    public function __invoke(Purse $purse)
    {
        $purse->delete();
        return response([]);
    }
}
