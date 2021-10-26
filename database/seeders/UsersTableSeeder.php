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
        $user = new User;
        $user->name = "Administrator";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('admin123'); 
        $user->save();
    }
}
