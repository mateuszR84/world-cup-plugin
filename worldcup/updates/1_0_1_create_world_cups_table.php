<?php namespace Mateusz\WorldCup\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateWorldCupsTable Migration
 */
class CreateWorldCupsTable extends Migration
{
    public function up()
    {
        Schema::create('mateusz_worldcup_world_cups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year')->nullable();
            $table->string('host')->nullable();
            $table->string('stadiums')->nullable();
            $table->integer('no_of_teams')->nullable();
            $table->integer('goals_overall')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mateusz_worldcup_world_cups');
    }
}
