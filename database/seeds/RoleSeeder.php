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
            ['name' => 'Super Admin', 'access_level' => 1],
            ['name' => 'Inventory manager', 'access_level' => 2],
            ['name' => 'Shopper', 'access_level' => 3],
            ['name' => 'User', 'access_level' => 4],
        ];
        
        foreach ($roles as $role ) {
            App\Models\Role::create($role);
            
        }
    }
}
