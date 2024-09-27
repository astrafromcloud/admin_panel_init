<?php

namespace App\Http\Controllers\Purse;

use App\Http\Controllers\Controller;
use App\Http\Requests\Purse\StoreRequest;
use App\Models\Purse;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('purses.create');
    }
}
