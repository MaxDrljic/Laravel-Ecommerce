<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = [
            'name'          => 'Learn to build websites in HTML5',
            'image'         => 'uploads/products/book.jpg',
            'price'         => 5000,
            'description'   => 'Lorem ipsum dolor sit amet, mei ea dolor reprehendunt. Veri dicam an sea, eam ex errem suscipiantur. Dolore argumentum usu no, adhuc equidem iracundia et usu.'
        ];

        $p2 = [
            'name'          => 'PHP development in depth',
            'image'         => 'uploads/products/book.jpg',
            'price'         => 2400,
            'description'   => 'Lorem ipsum dolor sit amet, mei ea dolor reprehendunt. Veri dicam an sea, eam ex errem suscipiantur. Dolore argumentum usu no, adhuc equidem iracundia et usu.'
        ];

        Product::create($p1);
        Product::create($p2);
    }
}
