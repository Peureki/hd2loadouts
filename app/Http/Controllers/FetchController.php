<?php

namespace App\Http\Controllers;

use App\Models\Stratagem;
use App\Models\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FetchController extends Controller
{
    public function fetchSpreadsheetData(){
        $api = Http::get('https://script.google.com/macros/s/AKfycbyl6gGGah3E8Hnlrywqu2WSiO5p8MDI26C7367VPalzZImqUqygoU9sMdGhOesukQrZ/exec?endpoint=weapons');
        $spreadsheet = $api->json(); 

        // *
        // *
        // * WEAPONS
        // * 
        // *
        foreach ($spreadsheet['weapons'] as $index => $weapon){
            $traits = explode(', ', $weapon['traits']);

            Weapon::updateOrCreate(
                [
                    'id' => $index, 
                ],
                [
                    'name' => $weapon['name'],
                    'category' => $weapon['category'],
                    'type' => $weapon['type'],
                    'description' => $weapon['description'],
                    'damage' => $weapon['damage'],
                    'armor_penetration' => $weapon['armorPenetration'],
                    'capacity' => $weapon['capacity'],
                    'recoil' => !empty($weapon['recoil']) ? $weapon['recoil'] : null,
                    'fire_rate' => !empty($weapon['fireRate']) ? $weapon['fireRate'] : null,
                    'traits' => json_encode($traits), 
                ]
            );
        }
        // *
        // *
        // * STRATAGEMS
        // * 
        // *
        $api = Http::get('https://script.google.com/macros/s/AKfycbyl6gGGah3E8Hnlrywqu2WSiO5p8MDI26C7367VPalzZImqUqygoU9sMdGhOesukQrZ/exec?endpoint=stratagems');
        $spreadsheet = $api->json(); 

        foreach ($spreadsheet['stratagems'] as $index => $stratagem){
            Stratagem::updateOrCreate(
                [
                    'id' => $index,
                ],
                [
                    'name' => $stratagem['name'],
                    'category' => $stratagem['category'],
                    'type' => $stratagem['type'],
                    'description' => $stratagem['description'],
                    'code' => $stratagem['code'],
                    'damage' => $stratagem['damage'],
                    'armor_penetration' => $stratagem['armorPenetration'],
                    'uses' => $stratagem['uses'],
                    'capacity' => $stratagem['capacity'],
                    'fire_rate' => $stratagem['fireRate'],
                    'cooldown' => $stratagem['cooldown'],
                    'call_in_time' => $stratagem['callInTime'],
                    'traits' => $stratagem['traits'],
                ],
            );
        }
    }
}
