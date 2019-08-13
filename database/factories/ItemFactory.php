<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title' => 'タイトル',
        'info' => '説明です。',
        'price' => 300,
        'image' => 'image.png',
    ];
});
