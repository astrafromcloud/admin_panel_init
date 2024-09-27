<?php

namespace App\Http\Controllers\Purse;

use App\Http\Controllers\Controller;
use App\Http\Requests\Purse\StoreRequest;
use App\Http\Requests\Purse\UpdateRequest;
use App\Models\Purse;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Purse $purse)
    {
        $data = $request->validated();
        $purse->create($data);
        $purse->fresh();
        return $purse;
    }
}
