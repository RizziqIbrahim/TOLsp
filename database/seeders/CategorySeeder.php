<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nama_category' => 'sport',
        ]);

        Category::create([
            'nama_category' => 'sosial',
        ]);

        Category::create([
            'nama_category' => 'agama',
        ]);
    }
}
