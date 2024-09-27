<?php

namespace App\Http\Controllers\Purse;

use App\Http\Controllers\Controller;
use App\Http\Requests\Purse\UpdateRequest;
use App\Models\Purse;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Purse $purse)
    {
        $data = $request->validated();
        $purse->update($data);
        $purse->fresh();
        return $purse;
    }
}
