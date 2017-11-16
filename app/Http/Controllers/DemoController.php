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

                            'wk' => $value->wk,
                            
                            'jersey_number' => $value->jersey_number,
                            'hours_of_sleep' => $value->hours_of_sleep,
                            'how_many_naps' => $value->how_many_naps,
                            'nutrition' => $value->nutrition,
                            'breakfast' => $value->breakfast,
                            'lunch' => $value->lunch,
                            'supper' => $value->supper,
                            'total_meals' => $value->total_meals,
                            'pre_game_snacks' => $value->pre_game_snacks,
                            'post_game_snack_refuel' => $value->post_game_snack_refuel,
                            'hydration' => $value->hydration,
                            'stress_level' => $value->stress_level,
                            'stress_from_hockey' => $value->stress_from_hockey,
                            'stress_from_school' => $value->stress_from_school,
                            'stress_from_personal' => $value->stress_from_personal,
                            'strength_workouts' => $value->strength_workouts,
                            'extra_strength' => $value->extra_strength,
                            'cardio_workouts' => $value->cardio_workouts,
                            'extra_cardio' => $value->extra_cardio,
                            'performance_in_practice' => $value->performance_in_practice,
                            'focus_during_practice' => $value->focus_during_practice,
                            'effort_during_practice' => $value->effort_during_practice,
                            'execution_during_practice' => $value->execution_during_practice,
                            'extra_skill' => $value->extra_skill,
                            'watch_video' => $value->watch_video,
                            'game_performance' => $value->game_performance,
                            'offensive_game_performance' => $value->offensive_game_performance,
                            'defensive_game_performance' => $value->defensive_game_performance,
                            'special_teams_game_performance' => $value->special_teams_game_performance,
                            'academic_progress' => $value->academic_progress,
                            'relationship_teammates' => $value->relationship_teammates,
                            'relationship_staff' => $value->relationship_staff,
                            'relationships_personal_life' => $value->relationships_personal_life
                            
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
