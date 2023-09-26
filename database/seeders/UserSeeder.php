<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
            'nom'=>'MAIGA',
            'prenom'=>'Samira',
            'role_id'=> 1,
            'numero'=> 60320054,
            'photo'=> '03.jpg' ,
            'email'=>'admin@gmail.com',
            'password' => Hash::make('1234')// password
        ]);
    }
}
