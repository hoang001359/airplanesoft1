<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function getAllFlights()
    {
        $flights = Flight::orderBy('Flight_ID', 'desc')->paginate(10);
        return view('Flight.index', compact('flights'));
    }
    public function addFlight()
    {
        return view('Flight.add');
    }
    public function saveFlight(Request $request)
    {
        Flight::create($request->all());
        return redirect()->route('flights.getAllFlights');
    }
    public function editFlight($Flight_ID)
    {
        $flight = Flight::find($Flight_ID);
        return view('Flight.edit', compact('flight'));
    }
    public function updateFlight(Request $request, $Flight_ID)
    {
        $flight = Flight::find($Flight_ID);
        $flight->update($request->all());
        return redirect()->route('flights.getAllFlights');
    }
    public function deleteFlight($Flight_ID)
    {
        $flight = Flight::find($Flight_ID);
        $flight->delete();
        return redirect()->route('flights.getAllFlights');
    }
    public function showFlight($Flight_ID)
    {
        $flight = Flight::find($Flight_ID);
        return view('Flight.show', compact('flight'));
    }
}
