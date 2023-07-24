<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Random>
 */
class RandomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //何かしらの文字列
            'title'=>fake()->word,
            //最大6文字の何かしらのテキスト
           // 'body'=>fake()->text($maxNbChars=6),
            'body'=>fake()->prefecture,
        ];
    }
}
