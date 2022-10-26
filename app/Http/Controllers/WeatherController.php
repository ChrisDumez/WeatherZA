<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Session;
//use App\Http\Controllers\Http;

class WeatherController extends Controller
{

    public function index()
    {
        $API_Key = "bd19ea35866c758201d78cd637f6a8dc";

        //Cape Town Weather Data
        $Cape_Town_latitude = "-33.928992";
        $Cape_Town_longitude = "18.417396";
        
        $CapeTown = Http::get('https://api.openweathermap.org/data/2.5/weather?lat='.$Cape_Town_latitude.'&lon='.$Cape_Town_longitude.'&appid='.$API_Key);
    
        $CapeTown_Weather = $CapeTown->json("weather");
        $CapeTown_Main = $CapeTown->json("main");
        $CapeTown_Wind = $CapeTown->json("wind");
        $CapeTown_Coord = $CapeTown->json("coord");


        //Pretoria Weather Data
        $Pretoria_latitude = "-25.7459277";
        $Pretoria_longitude = "28.1879101";

        $Pretoria = Http::get('https://api.openweathermap.org/data/2.5/weather?lat='.$Pretoria_latitude.'&lon='.$Pretoria_longitude.'&appid='.$API_Key);
    
        $Pretoria_Weather = $Pretoria->json("weather");
        $Pretoria_Main = $Pretoria->json("main");
        $Pretoria_Wind = $Pretoria->json("wind");
        $Pretoria_Coord = $Pretoria->json("coord");

        
        //Johannasburg Weather Data
        $Joburg_latitude = "-26.191360473632812";
        $Joburg_longitude = "28.03909683227539";

        $Joburg = Http::get('https://api.openweathermap.org/data/2.5/weather?lat='.$Joburg_latitude.'&lon='.$Joburg_longitude.'&appid='.$API_Key);
    
        $Joburg_Weather = $Joburg->json("weather");
        $Joburg_Main = $Joburg->json("main");
        $Joburg_Wind = $Joburg->json("wind");
        $Joburg_Coord = $Joburg->json("coord");


        //Durban Weather Data
        $Durban_latitude = "46.7700486";
        $Durban_longitude = "-95.0983942";

        $Durban = Http::get('https://api.openweathermap.org/data/2.5/weather?lat='.$Durban_latitude.'&lon='.$Durban_longitude.'&appid='.$API_Key);
    
        $Durban_Weather = $Durban->json("weather");
        $Durban_Main = $Durban->json("main");
        $Durban_Wind = $Durban->json("wind");
        $Durban_Coord = $Durban->json("coord");


        $data = [
            "ApiKey"=>$API_Key,

            "CapeTown_Weather"=>$CapeTown_Weather,
            "CapeTown_Main"=>$CapeTown_Main,
            "CapeTown_Wind"=>$CapeTown_Wind,
            "CapeTown_Coord"=>$CapeTown_Coord,

            "Pretoria_Weather"=>$Pretoria_Weather,
            "Pretoria_Main"=>$Pretoria_Main,
            "Pretoria_Wind"=>$Pretoria_Wind,
            "Pretoria_Coord"=>$Pretoria_Coord,
            
            "Joburg_Weather"=>$Joburg_Weather,
            "Joburg_Main"=>$Joburg_Main,
            "Joburg_Wind"=>$Joburg_Wind,
            "Joburg_Coord"=>$Joburg_Coord,

            "Durban_Weather"=>$Durban_Weather,
            "Durban_Main"=>$Durban_Main,
            "Durban_Wind"=>$Durban_Wind,
            "Durban_Coord"=>$Durban_Coord,

            "Date"=> date("Y-m-d")
        ];

        return view('dashboard',$data);

    }



    //5 day forcast
    public function Forcast($longitude, $latitude, $API_Key, $city)
    {

        $value = Http::get('https://api.openweathermap.org/data/2.5/forecast?lat='.$latitude.'&lon='.$longitude.'&appid='.$API_Key)->json("list");


        $data = [
            "value"=>$value,
            "city"=>$city
        ];

        return view('forcast',$data);

    }
    
}
