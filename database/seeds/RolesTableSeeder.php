<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create role_super_admin
        $role_super_admin = new Role();
        $role_super_admin->name = "Role Super Admin";
        $role_super_admin->slug = "ROLE_SUPER_ADMIN";
        $role_super_admin->save();

        // Create role_super_admin
        $role_admin = new Role();
        $role_admin->name = "Role Admin";
        $role_admin->slug = "ROLE_ADMIN";
        $role_admin->save();

        // Create role_developer
        $role_developer = new Role();
        $role_developer->name = "Role Developer";
        $role_developer->slug = "ROLE_DEVELOPER";
        $role_developer->save();

        // Create role_user
        $role_user = new Role();
        $role_user->name = "Role User";
        $role_user->slug = "ROLE_USER";
        $role_user->save();
    }
}
