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

    public function addProduct(Request $req)
    {
        $connection = new Connection();
        $res = $connection->client->request('POST', 'products/add', [
            'query' => [
                'title' => $req->input('title'),
                'description' => $req->input('description'),
                'price' => $req->input('price'),
                'category' => $req->input('category'),
                'sku' => bin2hex(random_bytes(4)),
            ]
        ]);
        $result =json_decode($res->getBody()->getContents(), true);

        return view('notification', compact('result'));
    }
}
