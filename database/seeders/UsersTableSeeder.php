<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(100)->create();

        $user = User::find(1);
        $user->name = 'Summer';
        $user->email = 'summer@gmail.com';
        $user->save();
    }
}
