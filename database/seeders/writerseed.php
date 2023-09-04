<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class writerseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $role=['admin','empleado','otro'];
    private $permission=['model','view','controller'];

    public function run(): void
    {
        //$role = Role::create(['name' => 'writer']);

        foreach($this->role as $r){
           # $role = Role::create(['name' => $r]);

        //$permission = Permission::create(['name' => 'edit articles']);
        }
        $role = Role::find(2);
        foreach ($this->permission as $p) {
            $permission = Permission::create(['name' => $p]);
            $role->givePermissionTo($p);
        }
        //$role->givePermissionTo($permission);
        //$permission->assignRole($role);


    }
}
