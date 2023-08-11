<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title', 100)->nullable();
            $table->string('meta_keyworlds',100)->nullable();
            $table->string('meta_description', 200)->nullable();
            $table->string('blog_name',100)->nullable();
            $table->text('blog_slug')->nullable();
            $table->string('blog_category',50)->nullable();
            $table->text('blog_description')->nullable();
            $table->text('blog_img')->nullable();
            $table->text('blog_img_alt_tag')->nullable();
            $table->text('blog_banner')->nullable();
            $table->text('blog_banner_alt_tag')->nullable();
            $table->text('blog_content')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
