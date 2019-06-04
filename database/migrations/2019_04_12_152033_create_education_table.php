<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Education;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('education', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('school', 50);
        //     $table->string('address', 150);
        //     $table->string('course', 100)->nullable();
        //     $table->date('date_from');
        //     $table->date('date_to');
        //     $table->timestamps();
        // });

        // $education_1 = new Education();
        // $education_2 = new Education();
        // $education_3 = new Education();

        // $education_1->school = "Informatics Computer College - Diliman";
        // $education_1->address = "Quezon City, Philippines";
        // $education_1->course = "Bachelor of Science in Information Technology";
        // $education_1->date_from = "2013-01-01";
        // $education_1->date_to = "2015-01-01";
        // $education_1->save();

        // $education_2->school = "Informatics Computer College - Valenzuela";
        // $education_2->address = "Valenzuela City, Philippines";
        // $education_2->course = "Advanced Diploma in Information Technology";
        // $education_2->date_from = "2011-01-01";
        // $education_2->date_to = "2013-01-01";
        // $education_2->save();

        // $education_3->school = "Navotas National High School";
        // $education_3->address = "Navotas City, Philippines";
        // $education_3->date_from = "2007-01-01";
        // $education_3->date_to = "2010-01-01";
        // $education_3->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('education');
    }
}
