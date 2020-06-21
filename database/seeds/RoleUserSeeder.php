<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::findOrFail(1)->users()->sync(1);
        //Role::findOrFail(3)->rolesUsers()->sync([2, 3, 4, 5, 6]);
        //Role::findOrFail(4)->rolesUsers()->sync(7);
    }
}
