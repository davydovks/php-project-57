<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = Yaml::parseFile(database_path('tasks.yaml'));
        Task::factory(count($tasks))
            ->sequence(...$tasks)
            ->create();
    }
}
