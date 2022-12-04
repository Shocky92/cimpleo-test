<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMarkerRequest;
use App\Models\Marker;

class MarkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $markers = Marker::all();
        return response()->json($markers);
    }

    /**
     * @param Marker $marker
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Marker $marker)
    {
        $marker = Marker::where('mobile', $marker->mobile)->first();

        return response()->json($marker);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarkerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMarkerRequest $request)
    {
        $marker = new Marker($request->all());
        $marker->save();

        return response()->json($marker);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marker  $marker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marker $marker)
    {
        $marker->delete();
        return response();
    }
}
