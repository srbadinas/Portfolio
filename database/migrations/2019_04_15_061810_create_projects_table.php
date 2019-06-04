<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Project;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('projects', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name', 150);
        //     $table->integer('order')->unsigned()->unique();
        //     $table->string('highlight', 150);
        //     $table->string('thumbnail')->nullable();
        //     $table->string('link', 150)->nullable();
        //     $table->string('description', 4000);
        //     $table->string('company', 150)->nullable();
        //     $table->timestamps();
        // });

        // $proj_1 = new Project();
        // $proj_2 = new Project();

        

        // $proj_1->name = "PeopleLink Backend System";
        // $proj_1->order = 1;
        // $proj_1->highlight = "C#, MVC, .Net Framework and N-Tier Architecture";
        // $proj_1->thumbnail = "dashboard.png";
        // $proj_1->description = "A Backend System that is capable of managing the inventory and transactions of the company. Capable of managing the content of the company's Mobile App, MagConnect.";
        // $proj_1->company = "Magsaysay PeopleLink";
        // $proj_1->save();

        // $proj_2->name = "Mobile Management System";
        // $proj_2->order = 2;
        // $proj_2->highlight = "C#, MVC, .Net Framework and N-Tier Architecture";
        // $proj_2->thumbnail = "mw-dashboard.png";
        // $proj_2->description = "";
        // $proj_2->company = "Magsaysay";
        // $proj_2->save();

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('projects');
    }
}
