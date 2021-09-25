<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++)
        {
            factory(\App\Product::class, 1)->create(['project_id' => $i]);
        }
            factory(\App\Product::class,80)->create();
    }
}

