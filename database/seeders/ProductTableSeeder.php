<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'name' => 'My Body Is Ready',
            'description' => 'Bumper Sticker',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'price' => 10.00
        ]);
        $product->save();

        $product = new Product([
            'name' => 'My Body Is Ready',
            'description' => 'Shirt',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'price' => 20.00
        ]);
        $product->save();

        $product = new Product([
            'name' => 'End His Bloodline',
            'description' => 'Bumper Sticker',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'price' => 10.00
        ]);
        $product->save();

        $product = new Product([
            'name' => 'End His Bloodline',
            'description' => 'Shirt',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'price' => 20.00
        ]);
        $product->save();

        $product = new Product([
            'name' => 'Take His Life',
            'description' => 'Bumper Sticker',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'price' => 10.00
        ]);
        $product->save();

        $product = new Product([
            'name' => 'Take His Life',
            'description' => 'Shirt',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'price' => 20.00
        ]);
        $product->save();
    }
}
