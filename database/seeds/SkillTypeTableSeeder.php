<?php

use Illuminate\Database\Seeder;

class SkillTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SkillType::class, 10)->create()->each(function (App\SkillType $skill_type){
            factory(App\Skill::class, 4)->create([
                'skill_type_id' => $skill_type->id,
            ]);
        });
    }
}
