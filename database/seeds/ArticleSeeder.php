<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();
        factory(App\Article::class, 5000)->create();
        // for($i=0; $i<6000; $i++) {
        //   Article::create([
        //     'title' => $faker->sentence(3),
        //     'body' => $faker->paragraph(6),
        //     'tags' => join(',', $faker->words(4))
        //   ]);
        // }
    }
}
