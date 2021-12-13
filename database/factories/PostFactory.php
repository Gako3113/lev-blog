<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->text($maxNbChars = 200),
        //$fakeの機能としてはランダムで文字列や数字の生成をしてくれる
    ];
});
