<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\SkillType;
use App\Skill;

class CreateSkillTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('skill_types', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name', 50);
        //     $table->string('image')->nullable();
        //     $table->timestamps();
        // });

        // Schema::table('skills', function (Blueprint $table) {
        //     $table->foreign('skill_type_id')->references('id')->on('skill_types')->onDelete('cascade');
        // });

        // $skill_type_1 = new SkillType();
        // $skill_type_1->name = "Web Development";
        // $skill_type_1->save();

        // $skill_type_2 = new SkillType();
        // $skill_type_2->name = "Database";
        // $skill_type_2->save();

        // $skill_type_3 = new SkillType();
        // $skill_type_3->name = "Mobile App Development";
        // $skill_type_3->save();

        // $skill_type_4 = new SkillType();
        // $skill_type_4->name = "Tools & Technologies";
        // $skill_type_4->save();

        // $skill_type_5 = new SkillType();
        // $skill_type_5->name = "Industry Knowledge";
        // $skill_type_5->save();

        // $skill_type_6 = new SkillType();
        // $skill_type_6->name = "Others";
        // $skill_type_6->save();

        // $skill_1 = new Skill();
        // $skill_1->name = "C#";
        // $skill_1->skill_type_id = 1;
        // $skill_1->save();

        // $skill_2 = new Skill();
        // $skill_2->name = "PHP";
        // $skill_2->skill_type_id = 1;
        // $skill_2->save();

        // $skill_3 = new Skill();
        // $skill_3->name = "Laravel";
        // $skill_3->skill_type_id = 1;
        // $skill_3->save();

        // $skill_4 = new Skill();
        // $skill_4->name = ".NET Framework";
        // $skill_4->skill_type_id = 1;
        // $skill_4->save();

        // $skill_5 = new Skill();
        // $skill_5->name = "HTML";
        // $skill_5->skill_type_id = 1;
        // $skill_5->save();

        // $skill_6 = new Skill();
        // $skill_6->name = "CSS";
        // $skill_6->skill_type_id = 1;
        // $skill_6->save();

        // $skill_7 = new Skill();
        // $skill_7->name = "Javascript";
        // $skill_7->skill_type_id = 1;
        // $skill_7->save();

        // $skill_7 = new Skill();
        // $skill_7->name = "jQuery";
        // $skill_7->skill_type_id = 1;
        // $skill_7->save();

        // $skill_8 = new Skill();
        // $skill_8->name = "Bootstrap";
        // $skill_8->skill_type_id = 1;
        // $skill_8->save();

        // $skill_9 = new Skill();
        // $skill_9->name = "MVC";
        // $skill_9->skill_type_id = 1;
        // $skill_9->save();

        // $skill_10 = new Skill();
        // $skill_10->name = "Object-Relational Mapping (ORM)";
        // $skill_10->skill_type_id = 1;
        // $skill_10->save();

        // $skill_11 = new Skill();
        // $skill_11->name = "Microsoft SQL Server";
        // $skill_11->skill_type_id = 2;
        // $skill_11->save();

        // $skill_12 = new Skill();
        // $skill_12->name = "MySQL";
        // $skill_12->skill_type_id = 2;
        // $skill_12->save();

        // $skill_13 = new Skill();
        // $skill_13->name = "Ionic";
        // $skill_13->skill_type_id = 3;
        // $skill_13->save();

        // $skill_14 = new Skill();
        // $skill_14->name = "Cordova";
        // $skill_14->skill_type_id = 3;
        // $skill_14->save();

        // $skill_15 = new Skill();
        // $skill_15->name = "Angular JS";
        // $skill_15->skill_type_id = 3;
        // $skill_15->save();

        // $skill_16 = new Skill();
        // $skill_16->name = "Github";
        // $skill_16->skill_type_id = 4;
        // $skill_16->save();

        // $skill_17 = new Skill();
        // $skill_17->name = "Nginx";
        // $skill_17->skill_type_id = 4;
        // $skill_17->save();

        // $skill_18 = new Skill();
        // $skill_18->name = "Internet Information Services (IIS) 7";
        // $skill_18->skill_type_id = 4;
        // $skill_18->save();

        // $skill_188 = new Skill();
        // $skill_188->name = "XAMPP";
        // $skill_188->skill_type_id = 4;
        // $skill_188->save();

        // $skill_19 = new Skill();
        // $skill_19->name = "Problem Solving";
        // $skill_19->skill_type_id = 5;
        // $skill_19->save();

        // $skill_20 = new Skill();
        // $skill_20->name = "Analytical Skills";
        // $skill_20->skill_type_id = 5;
        // $skill_20->save();

        // $skill_21 = new Skill();
        // $skill_21->name = "Software Documentation";
        // $skill_21->skill_type_id = 5;
        // $skill_21->save();

        // $skill_211 = new Skill();
        // $skill_211->name = "Agile Web Development";
        // $skill_211->skill_type_id = 5;
        // $skill_211->save();

        // $skill_22 = new Skill();
        // $skill_22->name = "Computer Troubleshooting";
        // $skill_22->skill_type_id = 6;
        // $skill_22->save();

        // $skill_23 = new Skill();
        // $skill_23->name = "API";
        // $skill_23->skill_type_id = 6;
        // $skill_23->save();

        // $skill_24 = new Skill();
        // $skill_24->name = "N-Tier Architecture";
        // $skill_24->skill_type_id = 6;
        // $skill_24->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('skills', function (Blueprint $table) {
        //     $table->dropForeign(['skill_type_id']);
        // });
        // Schema::dropIfExists('skill_types');
        
    }
}
