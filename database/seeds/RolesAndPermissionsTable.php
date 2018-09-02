<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //we call User::first here because our first user is admin
        $user = User::first();

        //$role = Role::create([
        //    'name' => "admin";
        //]);
        $admin = Role::create([
            'name' => "admin"
        ]);

        $createCity = Permission::create([
            'name' => 'create_city'
        ]);

        $readCity = Permission::create([
            'name' => 'read_city'
        ]);

        $updateCity = Permission::create([
            'name' => 'update_city'
        ]);

        $deleteCity = Permission::create([
            'name' => 'delete_city'
        ]);

        $admin->givePermissionTo($createCity);
        $admin->givePermissionTo($readCity);
        $admin->givePermissionTo($updateCity);
        $admin->givePermissionTo($deleteCity);
        
        
        //$permission->assignRole($role);
        $user->assignRole($admin);
    }
}
