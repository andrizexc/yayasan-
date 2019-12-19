<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 45; $i++) $data[] = [
            'lang' => 0,
            'type' => $i > 14 ? ($i > 29 ? 2 : 1) : 0,
            'schedule' => $i > 29 ? $faker->date('Y-m-d', 'now') : null,
            'title' => str_replace('.', '', $faker->sentence(rand(2, 4))),
            'desc' => $faker->text(200),
            'path' => str_replace('public/storage\\', url('/').'/storage/', $faker->image('public/storage', 1280, 720)),
            'user_id' => rand(2, 7),
            'created_at' => now(),
            'updated_at' => now()
        ];
        News::insert($data);
    }
}
