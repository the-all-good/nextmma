<?php

namespace App;
use Illuminate\Support\Facades\Http;
use App\Models\fights;
use App\Models\Fighter;

class Scraper
{
    private $url;
    private $key;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->url = config('services.sport.url');
        $this->key = config('services.sport.key');
    }

    protected function make_request(?string $param, ?array $query) 
    {
        $request = "$this->url/$param";
        $response = Http::withHeaders([
            'x-apisports-key' => $this->key,
        ])->withQueryParameters($query)->get($request)->json();
        
        return $response;
    }

    public function get_fights($season)
    {
        $query = ['season' => $season];
        $results = $this->make_request('fights', $query);

        foreach($results['response'] as $fight){
            
            if(fights::where('id', $fight['id'])->exists()){
                continue;
            }

            $winner = $fight['fighters']['first']['winner'] ? $fight['fighters']['first']['id'] : $fight['fighters']['second']['id'];

            $newFight = new fights([
                'id' => $fight['id'],
                'timestamp' => $fight['timestamp'],
                'slug' => $fight['slug'],
                'is_main' => $fight['is_main'],
                'category' => $fight['category'],
                'status' => $fight['status']['long'],
                'fighter_1_id' => $fight['fighters']['first']['id'],
                'fighter_2_id' => $fight['fighters']['second']['id'],
                'fighter_win_id' => $winner,
            ]);
            $newFight->save();

            $fighter_1 = Fighter::where('id', $newFight->fighter_1_id)->exists();
            $fighter_2 = Fighter::where('id', $newFight->fighter_2_id)->exists();

            if(!$fighter_1) {
                $this->get_fighter(strval($newFight->fighter_1_id));
            }
            if(!$fighter_2) {
                $this->get_fighter(strval($newFight->fighter_2_id));
            }
        }

        return;
    }

    public function get_fighter($id)
    {
        if (Fighter::where('id', $id)->exists()){
            return;
        }

        $query = ['id' => $id];
        $responses = $this->make_request('fighters', $query)['response'];
        
        foreach($responses as $response){
            $fighter = new Fighter([
                'id' => $response['id'],
                'name' => $response['name'],
                'nickname' => $response['nickname'],
                'photo' => $response['photo'],
                'gender' => $response['gender'],
                'birth_date' => $response['birth_date'],
                'height' => $response['height'] == null ? 'undefined' : $response['height'],
                'weight' => $response['weight'] == null ? 'undefined' : $response['weight'],
                'reach' => $response['reach'] == null ? 'undefined' : $response['reach'],
                'stance' => $response['stance'] == null ? 'undefined' : $response['stance'],
                'category' => $response['category'] == null ? 'undefined' : $response['category'],
                'last_update' => strtotime($response['last_update']),
            ]);
            $fighter->save();
        }
        
        return;
    }
}
