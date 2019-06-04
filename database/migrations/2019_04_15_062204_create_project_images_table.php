<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\ProjectImage;

class CreateProjectImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('project_images', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('image');
        //     $table->integer('order')->unsigned();
        //     $table->integer('project_id')->unsigned();
        //     $table->timestamps();
        //     $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        // });

        // $proj_1_img_1 = new ProjectImage();
        // $proj_1_img_2 = new ProjectImage();
        // $proj_1_img_3 = new ProjectImage();
        // $proj_1_img_4 = new ProjectImage();
        // $proj_1_img_5 = new ProjectImage();
        // $proj_1_img_6 = new ProjectImage();
        // $proj_1_img_7 = new ProjectImage();

        // $proj_1_img_1->image = "dashboard.png";
        // $proj_1_img_1->order = 1;
        // $proj_1_img_1->project_id = 1;
        // $proj_1_img_1->save();

        // $proj_1_img_2->image = "user-index.png";
        // $proj_1_img_2->order = 2;
        // $proj_1_img_2->project_id = 1;
        // $proj_1_img_2->save();

        // $proj_1_img_3->image = "product-index.png";
        // $proj_1_img_3->order = 3;
        // $proj_1_img_3->project_id = 1;
        // $proj_1_img_3->save();

        // $proj_1_img_4->image = "package-index.png";
        // $proj_1_img_4->order = 4;
        // $proj_1_img_4->project_id = 1;
        // $proj_1_img_4->save();

        // $proj_1_img_5->image = "sales-order-index.png";
        // $proj_1_img_5->order = 5;
        // $proj_1_img_5->project_id = 1;
        // $proj_1_img_5->save();

        // $proj_1_img_6->image = "subscription-index.png";
        // $proj_1_img_6->order = 6;
        // $proj_1_img_6->project_id = 1;
        // $proj_1_img_6->save();

        // $proj_1_img_7->image = "mobile-news-index.png";
        // $proj_1_img_7->order = 7;
        // $proj_1_img_7->project_id = 1;
        // $proj_1_img_7->save();

        // $proj_2_img_1 = new ProjectImage();
        // $proj_2_img_2 = new ProjectImage();
        // $proj_2_img_3 = new ProjectImage();
        // $proj_2_img_4 = new ProjectImage();
        // $proj_2_img_5 = new ProjectImage();

        // $proj_2_img_1->image = "mw-login.png";
        // $proj_2_img_1->order = 1;
        // $proj_2_img_1->project_id = 2;
        // $proj_2_img_1->save();

        // $proj_2_img_2->image = "mw-dashboard.png";
        // $proj_2_img_2->order = 2;
        // $proj_2_img_2->project_id = 2;
        // $proj_2_img_2->save();

        // $proj_2_img_3->image = "mw-user.png";
        // $proj_2_img_3->order = 3;
        // $proj_2_img_3->project_id = 2;
        // $proj_2_img_3->save();

        // $proj_2_img_4->image = "mw-mobile-notifications.png";
        // $proj_2_img_4->order = 4;
        // $proj_2_img_4->project_id = 2;
        // $proj_2_img_4->save();

        // $proj_2_img_5->image = "mw-news.png";
        // $proj_2_img_5->order = 5;
        // $proj_2_img_5->project_id = 2;
        // $proj_2_img_5->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('project_images', function (Blueprint $table) {
        //     $table->dropForeign(['project_id']);
        // });
        // Schema::dropIfExists('project_images');
    }
}
