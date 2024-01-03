<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
         \App\Models\Role::create([
            'role_name'=>'admin',
            
         ]);
         \App\Models\Role::create([
            'role_name'=>'guests',
         

         ]);
            \App\Models\User::create([
            'name'=>'Gopi',
            'email' => 'admin@admin.in',
            'password' => \Hash::make('Chennai@01'),
            'role_id' => 1,

         ]);
    }
}
