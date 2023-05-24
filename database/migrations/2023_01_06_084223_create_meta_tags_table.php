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
        Schema::create('meta_tags', function (Blueprint $table) {
            $table->id();

            $table->string('about_meta_title');
            $table->string('about_meta_desc');
            $table->string('about_meta_keyw');

            $table->string('home_meta_title');
            $table->string('home_meta_desc');
            $table->string('home_meta_keyw');

            $table->string('blog_meta_title');
            $table->string('blog_meta_desc');
            $table->string('blog_meta_keyw');

            $table->string('contact_meta_title');
            $table->string('contact_meta_desc');
            $table->string('contact_meta_keyw');

            $table->string('portfolio_meta_title');
            $table->string('portfolio_meta_desc');
            $table->string('portfolio_meta_keyw');



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
        Schema::dropIfExists('meta_tags');
    }
};
