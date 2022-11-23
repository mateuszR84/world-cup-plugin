<?php namespace Mateusz\WorldCup\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateNationalTeamsTable Migration
 */
class CreateNationalTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('mateusz_worldcup_national_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_name')->nullable();
            $table->string('flag')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mateusz_worldcup_national_teams');
    }
}
