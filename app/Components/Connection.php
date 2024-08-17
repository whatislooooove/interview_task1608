<?php

namespace App\Components;

use GuzzleHttp\Client;

class Connection
{
    public $client;

    /**
     * @Test doc!
     */
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://dummyjson.com/']);
    }

}
