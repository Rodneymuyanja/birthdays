<?php

use Illuminate\Database\Seeder;
use App\friends;

class friendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        friends::create(
        [
            'name'=>'gary',
            'comments'=>'gary, hes a nice guy honestly and i dont know alot about him but heyyyyyyyyyyyyy',
            'pets'=>'pete',
            'gifts'=>'cars',
            'cake'=>'chocolate and marshmallows',
            'music'=>'rum and chun',
            'movies'=>'endgame',
            'places'=>'anything better Uganda',
        ]
    );
    }
}
