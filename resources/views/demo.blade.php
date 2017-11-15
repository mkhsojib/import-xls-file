
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
                                        <td>{{ $demo->Week_No }}</td>
                                        <td>{{ $demo->Jersey_number }}</td>
                                        <td>{{ $demo->Hours_of_sleep }}</td>
                                        <td>{{ $demo->How_many_naps }}</td>
                                        <td>{{ $demo->Nutrition }}</td>
                                        <td>{{ $demo->Breakfast }}</td>
                                        <td>{{ $demo->Lunch }}</td>
                                        <td>{{ $demo->Supper }}</td>
                                        <td>{{ $demo->Total_meals }}</td>
                                        <td>{{ $demo->Pre_game_snacks }}</td>
                                        <td>{{ $demo->Post_game_snack_refuel }}</td>
                                        <td>{{ $demo->Hydration }}</td>
                                        <td>{{ $demo->Stress_level }}</td>
                                        <td>{{ $demo->Stress_from_Hockey }}</td>
                                        <td>{{ $demo->Stress_from_school }}</td>
                                        <td>{{ $demo->Stress_from_Personal }}</td>
                                        <td>{{ $demo->Strength_workouts }}</td>
                                        <td>{{ $demo->Extra_strength }}</td>
                                        <td>{{ $demo->Cardio_workouts }}</td>
                                        <td>{{ $demo->Extra_cardio }}</td>
                                        <td>{{ $demo->Performance_in_practice }}</td>
                                        <td>{{ $demo->Focus_during_practice }}</td>
                                        <td>{{ $demo->Effort_during_practice }}</td>
                                        <td>{{ $demo->Execution_during_practice }}</td>
                                        <td>{{ $demo->Extra_skill }}</td>
                                        <td>{{ $demo->Watch_video }}</td>
                                        <td>{{ $demo->Game_performance }}</td>
                                        <td>{{ $demo->Offensive_game_performance }}</td>
                                        <td>{{ $demo->Defensive_game_performance }}</td>
                                        <td>{{ $demo->Special_teams_game_performance }}</td>
                                        <td>{{ $demo->Academic_progress }}</td>
                                        <td>{{ $demo->Relationship_teammates }}</td>
                                        <td>{{ $demo->Relationship_staff }}</td>
                                        <td>{{ $demo->Relationships_personal_life }}</td>
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