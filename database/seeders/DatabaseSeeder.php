<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);

        $user = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('12345678'),
        ]);
        $user->assignRole('admin');
        $user->assignRole('user');
    }
}
