<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $faker = Faker::create();

        return [
            'title'     =>$faker->word($nb = 3, $asText = false),
            'content'   =>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'created_at'=>$faker->dateTime($max = 'now', $timezone = null),
            'updated_at'=>$faker->dateTime($max = 'now', $timezone = null),
            'rubric_id' =>$faker->numberBetween(1, 5),
        ];
    }
}
