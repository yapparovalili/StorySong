<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['name' => 'Сонграйтер', 'description' => 'Просто фортепиано или гитара, фокус на повествовании'],
            ['name' => 'Акустический поп', 'description' => 'Более широкий инструментарий, акцент на мелодии'],
            ['name' => 'Рок', 'description' => 'Энергичное электрическое звучание для любителей оторваться'],
            ['name' => 'Рэп/Хип-Хоп', 'description' => 'Ритмичный вокал, свежее звучание и перкуссионный бит'],
            ['name' => 'R&B', 'description' => 'Проникновенный вокал, грув и крутая атмосфера'],
//            ['name' => 'Джаз', 'description' => ''],
//            ['name' => 'Этно', 'description' => ''],
//            ['name' => 'Поп', 'description' => ''],
//            ['name' => 'Альтернатива', 'description' => ''],
        ];
        foreach ($genres as $genre){
            Genre::query()->create($genre);
        }
    }
}
