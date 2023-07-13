<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TodoTask;

class TodoTaskFactory extends Factory
{
    protected $model = TodoTask::class;

    public function definition()
    {
        return [
            'label'       => $this->faker->sentence(),
            'is_complete' => $this->faker->boolean(),
        ];
    }
}