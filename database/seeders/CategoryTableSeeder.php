<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
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
            'name' => 'Menestras',
            'slug' => 'Menestras',
            'description' => 'lorem ipsum'
        ],
        [
            'name' => 'Lacteos',
            'slug' => 'Lacteos',
            'description' => 'lorem ipsummm'
        ]
        );
        Category::insert($data);
    }
}
