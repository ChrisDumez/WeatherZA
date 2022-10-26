<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Weather SA</title>
    <link rel="stylesheet" href="{{ URL::asset('forcast/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL('https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap') }}">
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
    <section>
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h3 class="fw-bold">5 day forcast</h3>
                    <h3 class="fw-bold">{{$city}}</h3>
                    <a href="{{ url('/')}}">
                        <button class="btn btn-danger shadow" type="button">Return to Dashboard</button>
                    </a>
                </div>
                    
            </div>
            <div class="py-5 p-lg-5">
            
                @foreach($value as $value)
                <div class="card shadow-sm">
                    <div class="card-body px-4 py-5 px-md-5" style="height: 170.823px;">
                        <h5 class="fw-bold card-title" style="font-size: 14px;margin-left: 271px;margin-top: -25px;">Date &amp; Time: {{$value['dt_txt']}}</h5>
                        
                        @foreach($value['weather'] as $weather)
                        <h1 style="font-size: 18px;margin-bottom: -34px;margin-left: 271px;">{{$weather['description']}} {{round($value['main']['temp'] - 273.15)}} °C</h1><img src="http://openweathermap.org/img/wn/{{$weather['icon']}}@4x.png" width="260" height="258" style="margin: -1px;margin-bottom: -34px;margin-right: 0px;margin-left: 0px;margin-top: -78px;">
                        @endforeach
                        
                        <p class="text-muted card-text mb-4" style="margin-bottom: 0px;padding-bottom: 0px;font-size: 15px;margin-left: 271px;margin-top: -92px;">Humidity: {{$value['main']['humidity']}} %</p>
                        <p class="text-muted card-text mb-4" style="padding-top: 0px;font-size: 15px;margin-left: 271px;margin-top: -24px;">Wind: {{$value['wind']['speed']}} km/h</p>
                    </div>
                </div>
                @endforeach
                    
            </div>
        </div>
    </section>
    <section></section>
    <script src="{{ URL::asset('forcast/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('forcast/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('forcast/js/bold-and-dark.js') }}"></script>
</body>

</html>