<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVasthusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vasthus', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->string('slug')->unique();
            $table->string('image');
            $table->decimal('price', 10, 2);	
         
            $table->bigInteger('sort_order')->nullable();
            $table->enum('status',['enable','disable'])->default('enable');
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
        Schema::dropIfExists('vasthus');
    }
}
