<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Experience;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('experiences', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('job', 50);
        //     $table->string('image')->nullable();
        //     $table->string('company_name', 50);
        //     $table->string('company_url')->nullable();
        //     $table->string('address', 150);
        //     $table->string('description', 4000);
        //     $table->date('date_from');
        //     $table->date('date_to');
        //     $table->timestamps();
        // });

        // $exp_1 = new Experience();
        // $exp_1->job = "Web Developer";
        // $exp_1->company_name = "Shinra Software Solutions Inc.";
        // $exp_1->address = "Quezon City, Philippines";
        // $exp_1->description = "<ul>
        // <li>Developed 2 projects for the company’s client.</li>
        // <li>Debugged and created features in some of the company’s existing projects.</li>
        // <li>Took part as a Systems Analyst in some of the company’s projects.</li>
        // </ul>";
        // $exp_1->date_from = "2019-03-31";
        // $exp_1->date_to = "2017-01-19";
        // $exp_1->save();

        // $exp_2 = new Experience();
        // $exp_2->job = "System Administrator";
        // $exp_2->company_name = "Maxcor Publishing House Inc.";
        // $exp_2->address = "Quezon City, Philippines";
        // $exp_2->description = "<ul>
        // <li>Provided the company a working C# software system that administers the company’s inventory and transactions.</li>
        // <li>Maintains the company’s network such as sharing of documents and printers.</li>
        // <li>Installing, configuring and updating the company’s computer software and hardware needs.</li>
        // </ul>";
        // $exp_2->date_from = "2016-12-21";
        // $exp_2->date_to = "2016-03-08";
        // $exp_2->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('experiences');
    }
}
