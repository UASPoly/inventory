@extends('layouts.app')
@section('title')
    dashbaord
@endsection

@section('content')
    <h1 style="text-align: left;">Dashboard</h1>
    @if(Auth::user()->role == "landlord")
    <!-- landlord dashbord -->

    <table class="table table-striped">
    <thead>
        <tr>
            <th>HOUSES</th>
            <th>PRICE</th>
            <th>ADDRESS</th>
            <th>FEATURES</th>
            <th>LEASE AGREEMENTS</th>
            <th>MAINTENANCE REQUESTS</th>
            <th>COMMUNICATION LOGS</th>
            <th><button data-toggle="modal" data-target="#addProperty" class="btn custom-btn"><b>+ House</b></button></th>
        </tr>
        @include('property.create')
    </thead>

    <tbody>
        @foreach(Auth::user()->properties as $property)
        <tr>
            <td>{{$property->size}}</td>
            <td>{{$property->price}}</td>
            <td>{{$property->address}}</td>
            <td>{{count($property->features)}}</td>
            <td>{{count($property->leaseAgreements)}}</td>
            <td>{{count($property->maintenanceRequests)}}</td>
            <td>{{count($property->communicationLogs)}}</td>
            <td></td>
        </tr>

        @endforeach
    </tbody>
    </table>
    @else
    <!-- tenant dashboard -->
    @endif

@endsection
