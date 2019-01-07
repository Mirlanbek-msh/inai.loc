<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'post-list',
            'post-create',
            'post-edit',
            'post-delete',

            'event-list',
            'event-create',
            'event-edit',
            'event-delete',
            
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'Super Administrator',
            'guard_name' => 'web'
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'Administrator',
            'guard_name' => 'web'
        ]);
        DB::table('roles')->insert([
            'id' => '3',
            'name' => 'Editor',
            'guard_name' => 'web'
        ]);

        DB::table('role_has_permissions')->insert([
            'permission_id' => '1',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '2',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '3',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '4',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '5',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '6',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '7',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '8',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '9',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '10',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '11',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '12',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '13',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '14',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '15',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '16',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '17',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '18',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '19',
            'role_id' => '1'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '20',
            'role_id' => '1'
        ]);

        // erke
        DB::table('model_has_roles')->insert([
            'role_id' => '1',
            'model_type' => 'App\User',
            'model_id' => '1'
        ]);
         // admin
         DB::table('model_has_roles')->insert([
            'role_id' => '1',
            'model_type' => 'App\User',
            'model_id' => '2'
        ]);
    }
}
