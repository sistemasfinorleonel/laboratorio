<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory(50)->create();
       
        DB::table('users')->insert([
            'name' => 'leonel',
            'email' => 'leonel@gmail.com',
            'password' => '12345678',
        ]);
    
    }
}
