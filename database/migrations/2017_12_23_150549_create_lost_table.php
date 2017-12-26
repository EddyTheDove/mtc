<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('losts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type')->nullable(); //cni, passport, birth certificate, etc.
            $table->string('number')->nullable();
            $table->string('collected_by')->nullable();
            $table->date('collected_on')->nullable();
            $table->enum('status', ['available', 'collected'])->default('available');
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
        Schema::dropIfExists('losts');
    }
}
