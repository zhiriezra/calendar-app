<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Prof Musa',
        	'email' => 'maibinu@gmail.com',
        	'password' => bcrypt('000000')
        ]);
    }
}
