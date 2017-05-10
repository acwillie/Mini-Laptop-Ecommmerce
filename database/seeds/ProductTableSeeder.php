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
        $product=new \App\Product([
            'imagePath'=>'src/img/slide-3.jpg',
            'title' => 'laptop',
            'description' => 'fresh laptop for sale',
            'price' => 13
        ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'src/img/slide-3.jpg',
            'title' => 'laptop',
            'description' => 'fresh laptop for sale',
            'price' => 13
        ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'src/img/slide-3.jpg',
            'title' => 'laptop',
            'description' => 'fresh laptop for sale',
            'price' => 13
    ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'src/img/slide-3.jpg',
            'title' => 'laptop',
            'description' => 'fresh laptop for sale',
            'price' => 13
    ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'src/img/slide-3.jpg',
            'title' => 'laptop',
            'description' => 'fresh laptop for sale',
            'price' => 13
    ]);
        $product->save();

        $product=new \App\Product([
            'imagePath'=>'src/img/slide-3.jpg',
            'title' => 'laptop',
            'description' => 'fresh laptop for sale',
            'price' => 13
    ]);
        $product->save();
    }
}
