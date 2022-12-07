<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {            
            $table->id();
            $table->text('marriage_id');
            $table->text('groom_name')->nullable();
            $table->text('groom_father_name')->nullable();
            $table->text('groom_mother_name')->nullable();
            $table->text('groom_image')->nullable();
            $table->text('bride_name')->nullable();
            $table->text('bride_father_name')->nullable();
            $table->text('bride_mother_name')->nullable();
            $table->text('bride_image')->nullable();
            $table->text('slider_images')->nullable();
            $table->text('home_location')->nullable();
            $table->text('events')->nullable();
            $table->text('Jan_details')->nullable();
            $table->text('image_gallery')->nullable();
            $table->text('mobile_number')->nullable();
            $table->text('other_details')->nullable();           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
};
