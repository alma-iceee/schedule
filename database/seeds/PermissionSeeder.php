<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'user_management_access',
            ],
            [
                'name' => 'permission_create',
            ],
            [
                'name' => 'permission_edit',
            ],
            [
                'name' => 'permission_show',
            ],
            [
                'name' => 'permission_delete',
            ],
            [
                'name' => 'permission_access',
            ],
            [
                'name' => 'role_create',
            ],
            [
                'name' => 'role_edit',
            ],
            [
                'name' => 'role_show',
            ],
            [
                'name' => 'role_delete',
            ],
            [
                'name' => 'role_access',
            ],
            [
                'name' => 'user_create',
            ],
            [
                'name' => 'user_edit',
            ],
            [
                'name' => 'user_show',
            ],
            [
                'name' => 'user_delete',
            ],
            [
                'name' => 'user_access',
            ],
            [
                'name' => 'lesson_create',
            ],
            [
                'name' => 'lesson_edit',
            ],
            [
                'name' => 'lesson_show',
            ],
            [
                'name' => 'lesson_delete',
            ],
            [
                'name' => 'lesson_access',
            ],
            [
                'name' => 'group_create',
            ],
            [
                'name' => 'group_edit',
            ],
            [
                'name' => 'group_show',
            ],
            [
                'name' => 'group_delete',
            ],
            [
                'name' => 'group_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
