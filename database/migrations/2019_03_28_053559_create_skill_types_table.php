<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->foreign('skill_type_id')->references('id')->on('skill_types')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropForeign(['skill_type_id']);
        });
        Schema::dropIfExists('skill_types');
        
    }
}
