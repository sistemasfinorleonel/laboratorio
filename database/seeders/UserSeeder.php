<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
       
     User::create([

            'name'=>'leonel chana',
            'email'=>'leonelchana@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
        User::create([

            'name'=>'Luis Beltran Condori Cano',
            'email'=>'luisbeltrancondoricano@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);
        User::create([

            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);

      
    }
}
