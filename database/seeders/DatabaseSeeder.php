<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Client;
use App\Models\User;
use App\Models\Message;
use App\Models\Priority;
use App\Models\Role;
use App\Models\Status;
use App\Models\Ticket;
use App\Models\Workspace;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lucas',
            'email' => 'lucas.bueno@arkus.com.br',
            'password' => '@Rkus142536'
        ]);

        Category::factory(10)->create();

        Client::factory(10)->create();

        Message::factory(10)->create();

        Priority::factory(10)->create();

        Role::factory(2)->create();

        Status::factory(10)->create();

        Ticket::factory(10)->create();

    }
}
