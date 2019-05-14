<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Project::class, 4)->create()->each(function (App\Project $project) {
            factory(App\ProjectImage::class, 4)->create([
                'project_id' => $project->id,
            ]);
        });
    }
}
