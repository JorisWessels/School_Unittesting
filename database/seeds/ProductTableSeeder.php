<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 5)->create()->each(function($product) {
            $product->reviews()->saveMany(factory(\App\Review::class, rand(0, 10))->create(['product_id' => $product->id]));
        });
    }
}
