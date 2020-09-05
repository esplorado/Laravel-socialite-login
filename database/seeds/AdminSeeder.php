<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->role = 'admin';
        $user->email = 'admin@gmail.com';
        $user->phone = 1234567890;
        $user->password = \Hash::make(123456);
        $user->first_name = 'admin';
        $user->last_name = 'admin' ;
        $user->save();
     }
}
