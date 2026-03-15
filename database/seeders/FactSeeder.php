<?php

namespace Database\Seeders;

use App\Models\Facts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "image" => "images/blackhole.jpg",
                "alt" => "Стрелец A",
                "title" => "Центр галактики",
                "text" => "В центре Млечного Пути находится сверхмассивная чёрная дыра Стрелец A массой ~4 миллиона солнечных масс.",
            ],
            [
                "image" => "images/diamondplanet.jpg",
                "alt" => "55 Cancri e",
                "title" => "Алмазная планета",
                "text" => "55 Cancri e предположительно на 1/3 состоит из алмаза — давление и температура превратили углерод в огромные кристаллы.",
            ],
            [
                "image" => "images/glassplanet.jpg",
                "alt" => "HD 189733b",
                "title" => "Планета стеклянных дождей",
                "text" => "На одной из экзопланет (HD 189733b) идут дожди из расплавленного стекла, причём горизонтально из-за бешеного ветра 8700 км/ч.",
            ],
            [
                "image" => "images/hotplanet.jpg",
                "alt" => "KELT-9b",
                "title" => "Самая горячая планета",
                "text" => "Самая горячая известная планета — KELT-9b, где температура на дневной стороне достигает ~4300 °C — горячее, чем поверхность некоторых звёзд.",
            ],
            [
                "image" => "images/star.webp",
                "alt" => "Stephenson 2-18",
                "title" => "Самая большая звезда",
                "text" => "Самая большая известная звезда — Stephenson 2-18. Её диаметр примерно в 2150 раз больше солнечного — если поставить её вместо Солнца, она достала бы до Сатурна.",
            ]
        ];

        foreach ($data as $item) {
            Facts::updateOrCreate(
                ['title' => $item['title']], $item
            );
        }
    }
}
