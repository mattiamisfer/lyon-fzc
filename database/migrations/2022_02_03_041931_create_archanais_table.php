<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchanaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archanais', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('slug')->unique();
            $table->string('image');
            $table->decimal('price', 10, 2);	
            $table->unsignedBigInteger('category_id');
            $table->bigInteger('sort_order')->nullable();
            $table->enum('status',['enable','disable'])->default('enable');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('archanais');
    }
}
