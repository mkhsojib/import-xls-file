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
            $table->string('Week_No');
            $table->string('Jersey_number');
            $table->string('Hours_of_sleep');
            $table->string('How_many_naps');
            $table->string('Nutrition');
            $table->string('Breakfast');
            $table->string('Lunch');
            $table->string('Supper');
            $table->string('Total_meals');
            $table->string('Pre_game_snacks');
            $table->string('Post_game_snack_refuel');
            $table->string('Hydration');
            $table->string('Stress_level');
            $table->string('Stress_from_Hockey');
            $table->string('Stress_from_school');
            $table->string('Stress_from_Personal');
            $table->string('Strength_workouts');
            $table->string('Extra_strength');
            $table->string('Cardio_workouts');
            $table->string('Extra_cardio');
            $table->string('Performance_in_practice');
            $table->string('Focus_during_practice');
            $table->string('Effort_during_practice');
            $table->string('Execution_during_practice');
            $table->string('Extra_skill');
            $table->string('Watch_video');
            $table->string('Game_performance');
            $table->string('Offensive_game_performance');
            $table->string('Defensive_game_performance');
            $table->string('Special_teams_game_performance');
            $table->string('Academic_progress');
            $table->string('Relationship_teammates');
            $table->string('Relationship_staff');
            $table->string('Relationships_personal_life');
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
