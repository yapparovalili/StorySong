<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Песня', 'description' => '«Эксклюзивная песня» - индивидуальное произведение со своей музыкой, мотивом и текстом персонального содержания по вашей личной истории.', 'price' => 549000],
            ['name' => 'Бэк-вокал', 'description' => 'Артист противоположного пола очень красиво подпоёт в Вашей песне. Будет звучать 2 голоса: мужской и женский.', 'price' => 99000],
            ['name' => 'Видеоклип', 'description' => '«Фоновый видеоклип» - слайд-шоу из фотографий и видео, по-настоящему индивидуальный подарок со своим жанром, стилем и сюжетом ролика, для дорогого человека во время исполнения песни или стихотворения.', 'price' => 169000],
            ['name' => 'Голосовая интеграция', 'description' => 'Вы можете записать своё голосовое пожелание на телефон и отправить его нам! Мы его обработаем и вставим в начало песни.', 'price' => 79000],
            ['name' => 'Аккорды песни', 'description' => '', 'price' => 49000],
            ['name' => 'Слова песни на красивом фоне', 'description' => '', 'price' => 49000],
        ];
        foreach ($products as $product){
            Product::query()->create($product);
        }
    }
}