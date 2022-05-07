<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image-1')->nullable();
            $table->string('image-2')->nullable();
            $table->string('image-3')->nullable();
            $table->string('image-4')->nullable();
            $table->string('image-5')->nullable();
            $table->string('image-6')->nullable();
            $table->string('package_name')->nullable();
            $table->string('description')->nullable();
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
        Schema::drop('package');
    }
}
