<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            
            [
                //Sports Manager
                'name' => ' Namu Khunt',
                'email' => 'namu@gmail.com',
                'password'	=> bcrypt('123456'),
            ],
            [
                //Coach
                'name' => 'Piyu Mehta',
                'email' => 'piyu@gmail.com',
                'password'	=> bcrypt('123456')
                
            ],
            [
                //Captain
                'name' => ' pari dabhi',
                'email' => 'pari@gmail.com',
                'password'	=> bcrypt('123456'),
            ],
            
        ]);

        $user = User::where('email', 'namu@gmail.com')->first();
        $user->assignRole('Sports Manager');

        $user = User::where('email', 'piyu@gmail.com')->first();
        $user->assignRole('Coach');

        $user = User::where('email', 'pari@gmail.com')->first();
        $user->assignRole('Captain');

    }
}
