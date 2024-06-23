<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labels = Yaml::parseFile(database_path('labels.yaml'));
        Label::factory(count($labels))
            ->sequence(...$labels)
            ->create();
    }
}
