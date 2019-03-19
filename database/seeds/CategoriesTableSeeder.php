<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class, 10)->create()->each(function ($category) {
            $category->books()->saveMany(factory(\App\Book::class, 5)->make());
        });
    }
}
