<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'length'=>$this->faker->randomNumber(3),
            'url'=>'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
            'thumbnail'=>'https://picsum.photos/446/240?random'. rand(1,99),
            'slug'=>$this->faker->slug(),
            'description'=> $this->faker->realText(),
            'category_id'=>Category::first() ?? Category::factory(),
            'user_id'=>User::first() ?? User::factory(),
        ];
    }
}
