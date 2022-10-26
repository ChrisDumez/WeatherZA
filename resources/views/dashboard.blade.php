<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Weather SA</title>
    <link rel="stylesheet" href="{{ URL::asset('dashboard/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap') }}">
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
    <section>
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">API Project</p>
                    <h3 class="fw-bold">Weather South Africa</h3>
                </div>
            </div>
            <div class="py-5 p-lg-5">
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    
                    <!--Cape Town Weather-->
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h5 class="fw-bold card-title">Cape Town</h5>

                                @foreach($CapeTown_Weather as $weather)
                                <h1 style="font-size: 27.88px;margin-bottom: -34px;">{{ $weather['description'] }} {{round($CapeTown_Main['temp'] - 273.15 )}} °C</h1>
                                <img src="http://openweathermap.org/img/wn/{{$weather['icon']}}@4x.png" width="238" height="228" style="margin: -1px;margin-bottom: -34px;margin-right: 0px;">
                                <p class="text-muted card-text mb-4" style="margin-bottom: 0px;padding-bottom: 0px;">Humidity: {{$CapeTown_Main['humidity']}} %</p>
                                <p class="text-muted card-text mb-4" style="padding-top: 0px;">Wind: {{$CapeTown_Wind['speed']}} km/h</p>
                                <a href="{{ url('/forcast/'.$CapeTown_Coord['lon'].'/'.$CapeTown_Coord['lat'].'/'.$ApiKey.'/Cape Town')}}">
                                    <p class="text-muted card-text mb-4">Date: {{$Date}}</p><button class="btn btn-primary shadow" type="button">5 day forcast</button>
                                </a>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <!--Pretoria Weather-->
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h5 class="fw-bold card-title">Pretoria</h5>

                                @foreach($Pretoria_Weather as $weather)
                                <h1 style="font-size: 27.88px;margin-bottom: -34px;">{{ $weather['description'] }} {{round($Pretoria_Main['temp'] - 273.15 )}} °C</h1>
                                <img src="http://openweathermap.org/img/wn/{{$weather['icon']}}@4x.png" width="238" height="228" style="margin: -1px;margin-bottom: -34px;margin-right: 0px;">
                                <p class="text-muted card-text mb-4" style="margin-bottom: 0px;padding-bottom: 0px;">Humidity: {{$Pretoria_Main['humidity']}} %</p>
                                <p class="text-muted card-text mb-4" style="padding-top: 0px;">Wind: {{$Pretoria_Wind['speed']}} km/h</p>
                                <a href="{{ url('/forcast/'.$Pretoria_Coord['lon'].'/'.$Pretoria_Coord['lat'].'/'.$ApiKey.'/Pretoria')}}">
                                    <p class="text-muted card-text mb-4">Date: {{$Date}}</p><button class="btn btn-primary shadow" type="button">5 day forcast</button>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

                
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <!--Joburg Weather-->
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h5 class="fw-bold card-title">Johannasburg</h5>

                                @foreach($Joburg_Weather as $weather)
                                <h1 style="font-size: 27.88px;margin-bottom: -34px;">{{ $weather['description'] }} {{round($Joburg_Main['temp'] - 273.15 )}} °C</h1>
                                <img src="http://openweathermap.org/img/wn/{{$weather['icon']}}@4x.png" width="238" height="228" style="margin: -1px;margin-bottom: -34px;margin-right: 0px;">
                                <p class="text-muted card-text mb-4" style="margin-bottom: 0px;padding-bottom: 0px;">Humidity: {{$Joburg_Main['humidity']}} %</p>
                                <p class="text-muted card-text mb-4" style="padding-top: 0px;">Wind: {{$Joburg_Wind['speed']}} km/h</p>
                                <a href="{{ url('/forcast/'.$Joburg_Coord['lon'].'/'.$Joburg_Coord['lat'].'/'.$ApiKey.'/Johannasburg')}}">
                                    <p class="text-muted card-text mb-4">Date: {{$Date}}</p><button class="btn btn-primary shadow" type="button">5 day forcast</button>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <!--Durban Weather-->
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <h5 class="fw-bold card-title">Durban</h5>

                                @foreach($Durban_Weather as $weather)
                                <h1 style="font-size: 27.88px;margin-bottom: -34px;">{{ $weather['description'] }} {{round($Durban_Main['temp'] - 273.15 )}} °C</h1>
                                <img src="http://openweathermap.org/img/wn/{{$weather['icon']}}@4x.png" width="238" height="228" style="margin: -1px;margin-bottom: -34px;margin-right: 0px;">
                                <p class="text-muted card-text mb-4" style="margin-bottom: 0px;padding-bottom: 0px;">Humidity: {{$Durban_Main['humidity']}} %</p>
                                <p class="text-muted card-text mb-4" style="padding-top: 0px;">Wind: {{$Durban_Wind['speed']}} km/h</p>
                                <a href="{{ url('/forcast/'.$Durban_Coord['lon'].'/'.$Durban_Coord['lat'].'/'.$ApiKey.'/Durban')}}">
                                    <p class="text-muted card-text mb-4">Date: {{$Date}}</p><button class="btn btn-primary shadow" type="button">5 day forcast</button>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section></section>
    <script src="{{ URL::asset('dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('dashboard/js/bold-and-dark.js') }}"></script>
</body>

</html>