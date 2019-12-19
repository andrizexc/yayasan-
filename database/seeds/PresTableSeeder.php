<?php

use Illuminate\Database\Seeder;
use App\Prestation;

class PresTableSeeder extends Seeder
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
            'lang' => 0,
            'date_competition' => $faker->date('Y-m-d', 'now'),
            'location' => $faker->company,
            'rank' => 'Juara '.rand(1, 3),
            'title_competition' => $faker->sentence(3),
            'title' => str_replace('.', '', $faker->sentence(rand(2, 4))),
            'desc' => $faker->text(200),
            'path' => str_replace('public/storage\\', url('/').'/storage/', $faker->image('public/storage', 1280, 720)),
            'user_id' => rand(2, 7),
            'created_at' => now(),
            'updated_at' => now()
        ];
        Prestation::insert($data);
    }
}
