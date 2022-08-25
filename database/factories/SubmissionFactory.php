<?php

namespace Database\Factories;

use App\Models\Submission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submission>
 */
class SubmissionFactory extends Factory
{
    /**
     * the factory representing the model
     *
     * @return array<string, mixed>
     */

    protected $model = Submission::class;

    public function definition()
    {
        return [
            'email'=> $this->faker->email(),
            'comment' => $this->faker->sentence(),
            'name' => $this->faker->name(),
        ];
    }
}
