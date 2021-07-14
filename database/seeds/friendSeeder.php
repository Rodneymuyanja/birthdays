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
        friends::create([
            'name'=>'winy mukimba',
            'pets'=>'dogs',
            'gifts'=>'baecation',
            'cake'=>'chocolate and marshmallows',
            'music'=>'yellow',
            'movies'=>'friends',
            'places'=>'anything better Uganda',
        ]);
    }
}
