
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">

    <title>Laravel Excel Import csv and XLS file in Database</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            padding: 5%
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">
        Laravel Excel/CSV Import
    </h2>

    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif

    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <div>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    @endif

    <form action="{{ route('importdata') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        Choose your xls/csv File : <input type="file" name="file" class="form-control">

        <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">
    </form>

    <hr>
    <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">All student from database <i class="fa fa-angle-down pull-right"></i></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Week_No</th>
                                <th>Jersey_number</th>
                                <th>Hours_of_sleep</th>
                                <th>How_many_naps</th>
                                <th>Nutrition</th>
                                <th>Breakfast</th>
                                <th>Lunch</th>
                                <th>Supper</th>
                                <th>Total_meals</th>
                                <th>Pre_game_snacks</th>
                                <th>Post_game_snack_refuel</th>
                                <th>Hydration</th>
                                <th>Stress_level</th>
                                <th>Stress_from_Hockey</th>
                                <th>Stress_from_school</th>
                                <th>Stress_from_Personal</th>
                                <th>Strength_workouts</th>
                                <th>Extra_strength</th>
                                <th>Cardio_workouts</th>
                                <th>Extra_cardio</th>
                                <th>Performance_in_practice</th>
                                <th>Focus_during_practice</th>
                                <th>Effort_during_practice</th>
                                <th>Execution_during_practice</th>
                                <th>Extra_skill</th>
                                <th>Watch_video</th>
                                <th>Game_performance</th>
                                <th>Offensive_game_performance</th>
                                <th>Defensive_game_performance</th>
                                <th>Special_teams_game_performance</th>
                                <th>Academic_progress</th>
                                <th>Relationship_teammates</th>
                                <th>Relationship_staff</th>
                                <th>Relationships_personal_life</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($demos as $key => $demo)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $demo->week_no }}</td>
                                        <td>{{ $demo->jersey_number }}</td>
                                        <td>{{ $demo->hours_of_sleep }}</td>
                                        <td>{{ $demo->how_many_naps }}</td>
                                        <td>{{ $demo->nutrition }}</td>
                                        <td>{{ $demo->breakfast }}</td>
                                        <td>{{ $demo->lunch }}</td>
                                        <td>{{ $demo->supper }}</td>
                                        <td>{{ $demo->total_meals }}</td>
                                        <td>{{ $demo->pre_game_snacks }}</td>
                                        <td>{{ $demo->post_game_snack_refuel }}</td>
                                        <td>{{ $demo->hydration }}</td>
                                        <td>{{ $demo->stress_level }}</td>
                                        <td>{{ $demo->stress_from_hockey }}</td>
                                        <td>{{ $demo->stress_from_school }}</td>
                                        <td>{{ $demo->stress_from_personal }}</td>
                                        <td>{{ $demo->strength_workouts }}</td>
                                        <td>{{ $demo->extra_strength }}</td>
                                        <td>{{ $demo->cardio_workouts }}</td>
                                        <td>{{ $demo->extra_cardio }}</td>
                                        <td>{{ $demo->performance_in_practice }}</td>
                                        <td>{{ $demo->focus_during_practice }}</td>
                                        <td>{{ $demo->effort_during_practice }}</td>
                                        <td>{{ $demo->execution_during_practice }}</td>
                                        <td>{{ $demo->extra_skill }}</td>
                                        <td>{{ $demo->eatch_video }}</td>
                                        <td>{{ $demo->eame_performance }}</td>
                                        <td>{{ $demo->offensive_game_performance }}</td>
                                        <td>{{ $demo->defensive_game_performance }}</td>
                                        <td>{{ $demo->special_teams_game_performance }}</td>
                                        <td>{{ $demo->academic_progress }}</td>
                                        <td>{{ $demo->relationship_teammates }}</td>
                                        <td>{{ $demo->relationship_staff }}</td>
                                        <td>{{ $demo->relationships_personal_life }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>
</body>
</html>