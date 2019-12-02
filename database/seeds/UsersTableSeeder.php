<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::Query()->truncate();
        User::create([
            'email'=>'admin@admin.com',
            'password'=>Hash::make('admin'),
            'name'=>'Administrator'
        ]);
    }
}
