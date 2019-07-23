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
        User::create([
            'name' =>'hasan',
            'email' => 'marlinhk92@yahoo.com',
            'phone' => '0799256384',
            'permission' => User::Student,
            'password' => Hash::make('programerhk92'),
        ]);
     
        factory(App\User::class, 100)->create()->each(function ($user) {
           
        });
    }
}
