<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('agency', 20);
            $table->string('start_staion', 50);
            $table->string('stop_staion', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 8);
            $table->int('carriages_number', 3);
            $table->boolean('delay');
            $table->boolean('erased');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('agency');
        });
    }
}
