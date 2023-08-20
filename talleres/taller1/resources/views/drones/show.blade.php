@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Drone Details</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $drone->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $drone->name }}</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>{{ $drone->brand }}</td>
                            </tr>
                            <tr>
                                <th>Base Price</th>
                                <td>${{ $drone->baseprice }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $drone->description }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('drones.index') }}" class="btn btn-secondary">Back to List</a>
                    <form method="POST" action="{{ route('drones.destroy', $drone->id) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this drone?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
