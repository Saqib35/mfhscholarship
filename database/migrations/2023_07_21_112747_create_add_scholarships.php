<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddScholarships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_scholarships', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title', 100)->nullable();
            $table->string('meta_keyworlds',100)->nullable();
            $table->string('meta_description', 200)->nullable();
            $table->text('date')->nullable();
            $table->text('time')->nullable();
            $table->string('scholarship_name',100)->nullable();
            $table->text('scholarship_slug')->nullable();
            $table->string('scholarship_country',50)->nullable();
            $table->string('scholarship_degree',50)->nullable();
            $table->text('scholarship_description')->nullable();
            $table->text('scholarship_university_logo')->nullable();
            $table->text('scholarship_banner_img')->nullable();
            $table->text('scholarship_content')->nullable();
            $table->text('scholarship_website_url')->nullable();
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
        Schema::dropIfExists('add_scholarships');
    }
}
