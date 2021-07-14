<?php

use Illuminate\Database\Seeder;
use App\userfriends;

class userfriendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        userfriends::create([
            'user'=>'muyanja rodney',
            'friends'=>'winy mukimba',
        ]);
    }
}
