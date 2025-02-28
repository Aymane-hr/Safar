<?php

namespace App\Http\Controllers;

use App\Models\AutoCar;
use App\Http\Requests\StoreAutoCarRequest;
use App\Http\Requests\UpdateAutoCarRequest;

class AutoCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autoCars = AutoCar::all();
        return view('AutoCars.index', compact('AutoCars'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AutoCars.create');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAutoCarRequest $request)
    {
        AutoCar::create($request->all()); // Corrected object creation

        return redirect()->route("AutoCars.index")->with("success","votre auto-car est bien crée");    }

    /**
     * Display the specified resource.
     */
    public function show(AutoCar $autoCar)
    {
        return view('AutoCars.show', compact('AutoCar'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AutoCar $autoCar)
    {
        return view('AutoCars.edit', compact('AutoCar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutoCarRequest $request, AutoCar $autoCar)
    {
        $autoCar->update($request->all());

        return redirect()->route( "AutoCars.index")->with("update","votre Auto Car est bien modifier");    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AutoCar $autoCar)
    {
        $autoCar->delete();
        return redirect()->route("AutoCars.index")->with("destroy","votre Auto Car est bien supprimer");    }
}
