<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    static $orderNumber = 1;

    return [
        'title' => str_replace('.', '', $faker->sentence),
        'short_description' =>$faker->text,
        'description' => implode("\n",
            array_map(
                function ($item){return "<p>{$item}</p>";},
                $faker->paragraphs(random_int(3,7))
            )
        ),
        'image' => 'https://picsum.photos/id/'.random_int(1,300).'/540/200', //$faker->imageUrl(350, 200),
        'order_number' => $orderNumber++ * 10,
        'tags' => $faker->words(random_int(1,3), false),
    ];
});
