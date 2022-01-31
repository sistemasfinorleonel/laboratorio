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
        
        
       
        DB::table('users')->insert(['name' => 'Leonel Chana Choquehuanca','email' => 'leonel@gmail.com','password' => '12345678',]);
        DB::table('users')->insert(['name' => 'Luis Beltran Condori Cano','email' => 'luisbeltrancondoricano@gmail.com','password' => '12345678',]);
        DB::table('users')->insert(['name' => 'admin','email' => 'admin@gmail.com','password' => '12345678',]);
    
    }
}
