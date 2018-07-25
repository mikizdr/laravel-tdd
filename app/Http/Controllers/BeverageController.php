<?php

namespace App\Http\Controllers;

use App\Beverage;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    public function index()
    {
        $beverages = Beverage::all();
        return view('beverage.index')->with('beverages', $beverages);
        return view('beverage.index')->with(['beverages' => $beverages]);
        return view('beverage.index', ['beverages' => $beverages]);
        return view('beverage.index', compact('beverages'));
    }
}
