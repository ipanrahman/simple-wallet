<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        $role_super_admin = Role::where('slug', 'ROLE_SUPER_ADMIN')->first();
        $role_admin = Role::where('slug', 'ROLE_ADMIN')->first();
        $role_developer = Role::where('slug', 'ROLE_DEVELOPER')->first();

        // Create super_admin
        $super_admin = new User();
        $super_admin->name = 'Super Admin';
        $super_admin->email = 'super_admin@silet.com';
        $super_admin->email = 'super_admin@silet.com';
        $super_admin->password = Hash::make('super_admin@silet.com');
        $super_admin->save();
        $super_admin->roles()->attach($role_super_admin);

        // create admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@silet.com';
        $admin->password = Hash::make('admin@silet.com');
        $admin->save();
        $admin->roles()->attach($role_admin);

        // Create admin
        $super_admin = new User();
        $super_admin->name = 'Developer';
        $super_admin->email = 'developer@silet.com';
        $super_admin->password = Hash::make('developer@silet.com');
        $super_admin->save();
        $super_admin->roles()->attach($role_developer);
    }
}
