<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToLostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('losts', function (Blueprint $table) {
            $table->string('location')->nullable(); // Biyem-assi, Mendong
            $table->string('issued_by')->nullable(); // found, police
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('losts', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('issued_by');
        });
    }
}
