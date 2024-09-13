<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Workspace;
use App\Models\Priority;
use App\Models\Category;
use App\Models\Status;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->sentence(6),
            'due_date' => fake()->dateTime(),
            'user_id' => User::factory(),
            'priority_id' => Priority::factory(),
            'category_id' => Category::factory(),
            'status_id' => Status::factory(),
            'workspace_id' => Workspace::factory(),
        ];
    }
}
