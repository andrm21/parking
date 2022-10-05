<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Parking;
use Illuminate\Http\Request;
use App\Http\Requests\api\v1\ParkingStoreRequest;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parkings = Parking::orderBy('name', 'asc')->get();

        return response()->json(['data' => $parkings], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParkingStoreRequest $request)
    {
        $parking = Parking::create($request->all());

        //return $product;
        return response()->json(['data' => $parking], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parking  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Parking $parking)
    {
        return response()->json(['data' => $parking], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parking  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parking $parking)
    {
        $parking->update($request->all());

        return response()->json(['data' => $parking], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parking  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parking $product)
    {
        $vehicle = Parking::where('user_id', $product->user_id)->join('vehicles', 'parking.user_id', '=', 'vehicles.user_id')->select('vehicles.*')->get();

        return response()->json(['data' => $vehicle], 204);
    }
}

