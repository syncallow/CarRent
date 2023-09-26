<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;

class Info extends Model
{
    use HasFactory;
    protected $table = 'infos';
    protected $guarded = false;

    public function getGoogleReviews() {
        $apiKey = config('services.google.api_key');
        $placeId = 'ChIJSxY_lx_L1EARy4drv4LGugM';

        $client = new Client();

        $response = $client->get("https://maps.googleapis.com/maps/api/place/details/json?placeid={$placeId}&key={$apiKey}&language=ru&fields=reviews");

        $data = json_decode($response->getBody(), true);

        $reviews = $data['result']['reviews'];

        return $reviews;
     }
}
