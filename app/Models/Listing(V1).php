<?php
 namespace App\Models;

 class Listing {
    public static function all(){
        return [
            [
                'id' => '0001',
                'title' => 'Something Random 1',
                'description' => 'Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random WordsRandom Words Random Words Random Words Random Words'
            ],
            [
                'id' => '0002',
                'title' => 'Something Random 2',
                'description' => 'Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random WordsRandom Words Random Words Random Words Random Words'
            ],
            [
                'id' => '0003',
                'title' => 'Something Random 3',
                'description' => 'Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random Words Random WordsRandom Words Random Words Random Words Random Words'
            ]
            ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
 }
