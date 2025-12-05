<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware(
            Authorize::using('manage-shop-location')
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::query()
            ->withSum('products as cost_value', DB::raw('cost_price * quantity'))
            ->withSum('products as stock_value', DB::raw('price * quantity'))
            ->withSum('products as stock_quantity', 'stock.quantity')
            ->get();

        return view('locations.index', compact('locations'));
    }

    public function show(Location $location)
    {
        $locations = Location::all();

        return view('locations.show', compact(['location', 'locations']));
    }
}
