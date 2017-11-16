<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('week_no')->nullable();
            $table->string('jersey_number')->nullable();
            $table->string('hours_of_sleep')->nullable();
            $table->string('how_many_naps')->nullable();
            $table->string('nutrition')->nullable();
            $table->string('breakfast')->nullable();
            $table->string('lunch')->nullable();
            $table->string('supper')->nullable();
            $table->string('total_meals')->nullable();
            $table->string('pre_game_snacks')->nullable();
            $table->string('post_game_snack_refuel')->nullable();
            $table->string('hydration')->nullable();
            $table->string('stress_level')->nullable();
            $table->string('stress_from_hockey')->nullable();
            $table->string('stress_from_school')->nullable();
            $table->string('stress_from_personal')->nullable();
            $table->string('strength_workouts')->nullable();
            $table->string('extra_strength')->nullable();
            $table->string('cardio_workouts')->nullable();
            $table->string('extra_cardio')->nullable();
            $table->string('performance_in_practice')->nullable();
            $table->string('focus_during_practice')->nullable();
            $table->string('effort_during_practice')->nullable();
            $table->string('execution_during_practice')->nullable();
            $table->string('extra_skill')->nullable();
            $table->string('watch_video')->nullable();
            $table->string('game_performance')->nullable();
            $table->string('offensive_game_performance')->nullable();
            $table->string('defensive_game_performance')->nullable();
            $table->string('special_teams_game_performance')->nullable();
            $table->string('academic_progress')->nullable();
            $table->string('relationship_teammates')->nullable();
            $table->string('relationship_staff')->nullable();
            $table->string('relationships_personal_life')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demos');
    }
}
