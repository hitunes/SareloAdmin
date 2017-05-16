<?php

use Illuminate\Database\Seeder;

class ChargesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
                    ['title' => 'Delivery fee',
                    'percentage' => 0.00,
                    'fixed_amount' => 500.00,
                    'description' => ""],
                    ['title' => 'Service Charge',
                    'percentage' => 10.00,
                    'fixed_amount' => 0.00,
                    'description' => ""]
                ];
                
        App\Models\Charge::insert($data);
    }
}
