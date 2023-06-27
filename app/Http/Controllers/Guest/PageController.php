<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all()->filter(function ($train) {
            return !$train->on_time || !$train->deleted;
        });

        $formattedTrains = $trains->map(function ($train) {
            $train->formatted_departure_date = date('d F Y', strtotime($train->departure_date));
            $train->formatted_arrival_date = date('d F Y', strtotime($train->arrival_date));
            return $train;
        });

        return view('index', [
            'trains' => $formattedTrains
        ]);
    }
}






