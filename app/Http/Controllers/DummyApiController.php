<?php

namespace App\Http\Controllers;

use App\Components\Connection;
use App\Jobs\ImportJob;
use App\Models\AppleProduct;
use Illuminate\Http\Request;

class DummyApiController extends Controller
{
    public function getProducts() {
        ImportJob::dispatch();
        return view('notification');
    }
}
