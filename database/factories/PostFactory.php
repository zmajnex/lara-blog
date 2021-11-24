<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

              return [
                  'user_id'=>$this->faker->numberBetween([0,100]),
                  'title' => $this->faker->sentence(),
                  'slug'=>$this->faker->unique()->slug(),
                  'description' => $this->faker->realText(),
                  'list_image'=>$this->faker->imageUrl()
              ];

    }
}
