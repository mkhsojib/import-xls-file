<?php

namespace App\Http\Controllers;

use App\Demo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;

class DemoController extends Controller
{
    public function index()
    {
        return view('demo');
    }

    public function import(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));

        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){

                    foreach ($data as $key => $value) {
                        $insert[] = [
                            'Week_No' => $value->Week_No,
                            'Jersey_number' => $value->Jersey_number,
                            'Hours_of_sleep' => $value->Hours_of_sleep,
                            'How_many_naps' => $value->How_many_naps,
                            'Nutrition' => $value->Nutrition,
                            'Breakfast' => $value->Breakfast,
                            'Lunch' => $value->Lunch,
                            'Supper' => $value->Supper,
                            'Total_meals' => $value->Total_meals,
                            'Pre_game_snacks' => $value->Pre_game_snacks,
                            'Post_game_snack_refuel' => $value->Post_game_snack_refuel,
                            'Hydration' => $value->Hydration,
                            'Stress_level' => $value->Stress_level,
                            'Stress_from_Hockey' => $value->Stress_from_Hockey,
                            'Stress_from_school' => $value->Stress_from_school,
                            'Stress_from_Personal' => $value->Stress_from_Personal,
                            'Strength_workouts' => $value->Strength_workouts,
                            'Extra_strength' => $value->Extra_strength,
                            'Cardio_workouts' => $value->Cardio_workouts,
                            'Extra_cardio' => $value->Extra_cardio,
                            'Performance_in_practice' => $value->Performance_in_practice,
                            'Focus_during_practice' => $value->Focus_during_practice,
                            'Effort_during_practice' => $value->Effort_during_practice,
                            'Execution_during_practice' => $value->Execution_during_practice,
                            'Extra_skill' => $value->Extra_skill,
                            'Watch_video' => $value->Watch_video,
                            'Game_performance' => $value->Game_performance,
                            'Offensive_game_performance' => $value->Offensive_game_performance,
                            'Defensive_game_performance' => $value->Defensive_game_performance,
                            'Special_teams_game_performance' => $value->Special_teams_game_performance,
                            'Academic_progress' => $value->Academic_progress,
                            'Relationship_teammates' => $value->Relationship_teammates,
                            'Relationship_staff' => $value->Relationship_staff,
                            'Relationships_personal_life' => $value->Relationships_personal_life,
                        ];
                    }

                    if(!empty($insert)){

                        $insertData = DB::table('demos')->insert($insert);
                        if ($insertData) {
                            Session::flash('success', 'Your Data has successfully imported');
                        }else {
                            Session::flash('error', 'Error inserting the data..');
                            return back();
                        }
                    }
                }

                return back();

            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

    public function showDemos()
    {
        $demos = Demo::all();

        return view('demo', compact('demos', $demos));
    }
}
