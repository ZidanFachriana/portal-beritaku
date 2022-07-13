<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        Permission::create(['name' => 'create artikel']);
        Permission::create(['name' => 'read tag']);

        $role1 = Role::create(['name' => 'admin']);
        

        $role2 = Role::create(['name' => 'penulis']);
        $role2->givePermissionTo('create artikel');
        $role2->givePermissionTo('read tag');

        $user = \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'paw@gmail.com',
            'password' => Hash::make('administrator'),
        ]);
        
        $user->assignRole($role1);
    }
}
