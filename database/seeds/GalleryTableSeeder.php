<?php

use Illuminate\Database\Seeder;
use App\Gallery;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 15; $i++) $data[] = [
            'path' => str_replace('public/storage\\', url('/').'/storage/', $faker->image('public/storage', 1280, 720)),
            'user_id' => rand(1, 7),
            'created_at' => now(),
            'updated_at' => now()
        ];

        Gallery::insert($data);
    }
}
