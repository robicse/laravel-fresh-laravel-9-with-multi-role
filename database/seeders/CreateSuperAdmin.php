<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateSuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = User::latest()->first();
        if (is_null($info)) {
            $superAdmin = new User();
            $superAdmin->name = 'Admin';
            $superAdmin->user_type = 'Admin';
            $superAdmin->phone = '0177100000';
            $superAdmin->email = 'admin@gmail.com';
            $superAdmin->password = Hash::make('123456');
            $superAdmin->created_by_user_id = '1';
            $superAdmin->updated_by_user_id = '1';
            $superAdmin->status = '1';
            if ($superAdmin->save()) {
                $role = Role::create(['name' => 'Super Admin']);
                $superAdmin->assignRole('Super Admin');
                $permission = Permission::pluck('name');
                $role = Role::wherename('Super Admin')->first();
                $role->syncPermissions($permission);
            }
        } else {
            $superAdmin = User::first();
            $superAdmin->assignRole('Super Admin');
            $permission = Permission::pluck('name');
            $role = Role::wherename('Super Admin')->first();
            $role->syncPermissions($permission);
        }
    }
}
