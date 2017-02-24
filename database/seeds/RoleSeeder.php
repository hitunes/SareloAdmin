<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Super Admin', 'level' => 1],
            ['name' => 'Inventory manager', 'level' => 2],
            ['name' => 'Shopper', 'level' => 3],
        ];
        foreach ($roles as $role ) {
            App\Models\Role::create($role);
            
        }
    }
}
