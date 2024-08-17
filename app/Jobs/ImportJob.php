<?php

namespace App\Jobs;

use App\Components\Connection;
use App\Models\AppleProduct;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $conn = new Connection();
        $res = $conn->client->request('GET', '/products/search', [
            'query' => [
                'q' => 'Apple',
                'limit' => 0
            ]
        ]);
        $resArray = json_decode($res->getBody()->getContents(), true)['products'];

        foreach ($resArray as $item) {
            $existProducts = AppleProduct::where('sku', $item['sku'])->get()->toArray();
            if (count($existProducts) === 0) {
                $attributes = [
                    'title' => $item['title'],
                    'description' => $item['description'],
                    'category' => $item['category'],
                    'price' => (int)$item['price'],
                    'sku' => $item['sku'],
                ];

                AppleProduct::create($attributes);
            }
        }
    }
}
