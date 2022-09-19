<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create permissions
        Permission::create(['guard_name' => 'admin', 'name' => 'create']);
        Permission::create(['guard_name' => 'admin', 'name' => 'edit']);
        Permission::create(['guard_name' => 'admin', 'name' => 'update']);
        Permission::create(['guard_name' => 'admin', 'name' => 'delete']);
        Permission::create(['guard_name' => 'admin', 'name' => 'show']);

        // create roles and assign existing permissions
        $role1 = Role::create(['guard_name' => 'admin', 'name' => 'manager']);
        $role1->givePermissionTo('create');
        $role1->givePermissionTo('edit');
        $role1->givePermissionTo('update');
        $role1->givePermissionTo('delete');
        $role1->givePermissionTo('show');

        $role2 = Role::create(['guard_name' => 'admin', 'name' => 'karyawan']);
        $role2->givePermissionTo('create');
        $role2->givePermissionTo('edit');
        $role2->givePermissionTo('update');
        $role2->givePermissionTo('delete');
        $role2->givePermissionTo('show');

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $admin = Admin::create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'notelpon' => '12345678',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole($role1);

        $karyawan = Admin::create([
            'name' => 'karyawan',
            'email' => 'karyawan@gmail.com',
            'notelpon' => '12345678',
            'password' => bcrypt('12345678'),
        ]);

        $karyawan->assignRole($role2);
    }
}
