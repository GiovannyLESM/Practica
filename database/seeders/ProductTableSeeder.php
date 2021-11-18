<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Product;
use DateTime;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $data =  array(
        [
            'name' => 'Leche',
            'slug' => 'Leche',
            'description' => 'lorem ipsum',
            'price'=> 4.50,
            'image'=>'https://www.reinsac.com/wp-content/uploads/2020/06/595414.png',
            'visible'=> 1,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'category_id'=>2
        ],
        [
            'name' => 'Alberjas Verdes',
            'slug' => 'Alberjas Verdes',
            'description' => 'lorem ipsum',
            'price'=> 6.50,
            'image'=>'https://feriaemprendedora.com/wp-content/uploads/2021/02/alverjita-1-613x799-613x799-1.png',
            'visible'=> 1,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'category_id'=>1
        ]
        );
        Product::insert($data);
    }
}
