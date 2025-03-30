<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FetchController extends Controller
{
    public function fetchSpreadsheetData(){
        $api = Http::get('https://script.google.com/macros/s/AKfycbyl6gGGah3E8Hnlrywqu2WSiO5p8MDI26C7367VPalzZImqUqygoU9sMdGhOesukQrZ/exec?endpoint=weapons');
        $spreadsheet = $api->json(); 

        foreach ($spreadsheet['weapons'] as $index => $weapon){
            $traits = explode(', ', $weapon['traits']);

            Weapon::updateOrCreate(
                [
                    'id' => $index, 
                ],
                [
                    'category' => $weapon['category'],
                    'type' => $weapon['type'],
                    'description' => $weapon['description'],
                    'damage' => $weapon['damage'],
                    'armor_penetration' => $weapon['armorPenetration'],
                    'capacity' => $weapon['capacity'],
                    'recoil' => $weapon['recoil'],
                    'fire_rate' => $weapon['fireRate'],
                    'traits' => json_encode($traits), 
                ]
            );
        }
    }
}
