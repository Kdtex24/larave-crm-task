<?php

use Illuminate\Database\Seeder;
use Illuminate\Hash;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin User',
            'email'=>'admin@admin.com',
            'password'=>\Hash::make('password')
        ]);
    }
}
