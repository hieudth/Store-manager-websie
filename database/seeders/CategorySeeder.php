<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $categories = [
            [
                'name' => 'Chairs',
                'parent_id' => rand(1, 5),
                'description' => "haven't description",
            ],
            [
                'name' => 'Beds',
                'parent_id' => rand(1, 5),
                'description' => "haven't description",
            ],
            [
                'name' => 'Accesories',
                'parent_id' => rand(1, 5),
                'description' => "haven't description",
            ],
            [
                'name' => 'Furniture',
                'parent_id' => rand(1, 5),
                'description' => "haven't description",
            ],
            [
                'name' => 'Home Deco',
                'parent_id' => rand(1, 5),
                'description' => "haven't description",
            ],
            [
                'name' => 'Dressings',
                'parent_id' => rand(1, 5),
                'description' => "haven't description",
            ],
            [
                'name' => 'Tables',
                'parent_id' => rand(1, 5),
                'description' => "haven't description",
            ],
        ];

        Category::insert($categories);
    }
}
