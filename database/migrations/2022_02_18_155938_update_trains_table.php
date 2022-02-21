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
            $table->string('agency', 50);
            $table->string('start_station', 50);
            $table->string('stop_station', 50);
            $table->date('date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 8);
            $table->integer('carriages_number');
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
            $table->dropColumn('start_station');
            $table->dropColumn('stop_station');
            $table->dropColumn('date');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_code');
            $table->dropColumn('carriages_number');
            $table->dropColumn('delay');
            $table->dropColumn('erased');
        });
    }
}
