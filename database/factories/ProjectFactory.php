<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $project_name = $this->faker->word();

        return [
            'company_id' => $this->faker->numberBetween(1,4),
            'project_name' => $project_name,
            'project_url' => $project_name,
        ];
    }
}
