<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
  public function run()
  {
    $products = [
      [
        'product_name' => 'Panjabi',
        'product_details' => 'Product Details here',
        'product_price' => 1500,
      ],
      [
        'product_name' => 'Panjabi 1',
        'product_details' => 'Product Details here',
        'product_price' => 2500,
      ],
      [
        'product_name' => 'Panjabi 2',
        'product_details' => 'Product Details here',
        'product_price' => 3500,
      ],
      [
        'product_name' => 'Panjabi 3',
        'product_details' => 'Product Details here',
        'product_price' => 4500,
      ],
      [
        'product_name' => 'Panjabi 4',
        'product_details' => 'Product Details here',
        'product_price' => 5500,
      ],
    ];

    foreach ($products as $product) {
      $this->db->table('products')->insert($product);
    }
  }
}
