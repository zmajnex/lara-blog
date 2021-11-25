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
                  'title' => $this->faker->sentence(12),
                  'slug'=>$this->faker->unique()->slug(),
                  'description' => $this->faker->realText(),
                  'list_image'=>$this->faker->imageUrl(),
                   'post_image'=>$this->faker->imageUrl(),
                  'short_description'=>$this->faker->sentence(6)
              ];

    }
}
