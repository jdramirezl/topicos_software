@extends('layouts.app')

@section('title', 'Home Page - Online Store')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Taller 1: Topicos Ing. Software</div>

                <div class="card-body text-center">
                    <h1>Clase: Base Drone </h1>
                    <p>Elija a que punto quiere ir</p>

                    <div class="card">
                        <a href="{{ route('drones.create') }}" class="btn btn-primary">Act 2: Insercion</a>
                        <a href="{{ route('drones.index') }}" class="btn btn-primary">Act 4: Listar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
