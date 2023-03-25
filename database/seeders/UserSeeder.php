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
        User::query()->create(['name'=>'client', 'email'=>'user@gmail.com', 'password'=>Hash::make('user')]);
        User::query()->create(['name'=>'artist', 'email'=>'artist@gmail.com', 'password'=>Hash::make('artist')]);
        User::query()->create(['name'=>'admin', 'email'=>'admin@gmail.com', 'password'=>Hash::make('admin')]);
    }
}
