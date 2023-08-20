<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse as Redirect;
use App\Models\BaseDrone;

class DroneController extends Controller
{
    public function create(): View
    {
        return view('drones.create');
    }

    public function store(Request $request): Redirect
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'baseprice' => 'required|numeric',
            'description' => 'required|string',
        ]);

        // Create a new BaseDrone object and save it to the database
        BaseDrone::create($validatedData);

        return redirect()->route('drones.create')->with('success', 'Drone created successfully!');
    }
}
