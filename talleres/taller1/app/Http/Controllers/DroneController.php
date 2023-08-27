<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse as Redirect;
use App\Models\BaseDrone;

class DroneController extends Controller
{

    public function index(): View
    {
        $drones = BaseDrone::select('id', 'name')->get();

        return view('drones.index', compact('drones'));
    }

    public function show($id): View
    {
        $drone = BaseDrone::find($id);

        return view('drones.show', compact('drone'));
    }
    public function create(): View
    {
        return view('drones.create');
    }

    public function destroy($id)
    {
        $drone = BaseDrone::find($id);

        if (!$drone) {
            return redirect()->route('drones.index')->with('error', 'Drone not found.');
        }

        $drone->delete();

        return redirect()->route('drones.index')->with('success', 'Drone deleted successfully.');
    }

    public function store(Request $request): Redirect
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'baseprice' => 'required|numeric',
            'description' => 'required|string',
        ]);

        BaseDrone::create($validatedData);

        return redirect()->route('drones.create')->with('success', 'Drone created successfully!');
    }
}
