@extends('layouts.app')
@section('title')
    dashbaord
@endsection

@section('content')
    <h1 style="text-align: left;">Hi {{Auth::user()->role}} {{Auth::user()->name}}</h1>
    @if(Auth::user()->role == "landlord")
    <!-- landlord dashbord -->

    <table class="table table-striped">
    <thead>
        <tr>
            <th>HOUSES</th>
            <th>PRICE</th>
            <th>ADDRESS</th>
            <th>FEATURES</th>
            
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
            <td><a href="{{route('property.feature.index',[$property->id])}}">{{count($property->features)}}</a></td>
            
            <td>
            <button class="btn btn-warning" data-toggle="modal" data-target="#edit_{{$property->id}}">Edit</button>
            <a href="{{route('property.delete',[$property->id])}}" onclick="return confirm('Are you sure, you want delete this House?')"><button class="btn btn-secondary" >Edit</button></a>
            </td>
        </tr>
        @include('property.edit')
        @endforeach
    </tbody>
    </table>
    @else
    <!-- tenant dashboard -->
    @if(!Auth::user()->tenant)
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                        <h1>Pls. Update your profile!</h1>
                        <form action="{{route('tenant.register')}}" method="post">
                            @csrf
                            <div class="mt-2">
                                <label for="contact"> What is your Contact Phone?</label>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label for="work_title">What is your work title?</label>
                                <input type="text" name="work_title" id="work_title" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label for="work_place">Where do you work?</label>
                                <input type="text" name="work_place" id="work_place" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label for="work_address">What is the address of you place of work?</label>
                                <input type="text" name="work_address" id="work_address" class="form-control">
                            </div>
                            <div class="mt-2">
                                <label for="estimated_annual_income">Can you tell us your estimated annual income?</label>
                                <input type="number" name="estimated_annual_income" id="estimated_annual_income" class="form-control">
                            </div>
                            <button class="btn btn-primary mt-2">Update</button>
                        </form>
                        </div>
                </div>
        </div>
        <div class="col-md-4"></div>
        </div>
    @else
        <div class="row">
        @foreach(Auth::user()->tenant->rentRequests as $rentRequest)
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">
        <h2>Your request has been received by {{$rentRequest->property->user->name}}</h2>
        </div>
        </div>
        </div>
        @endforeach
        @foreach(App\Models\Property::all() as $property)
        @if(!Auth::user()->tenant->hasRequest($property))
        <div class="col-sm-12">
            <div class="card shadow mt-4">
                <div class="card-header">
                    <table>
                        <tr>
                            <td><b>House: </b></td>
                            <td>{{$property->size}}</td>
                        </tr>
                        <tr>
                            <td><b>Address: </b></td>
                            <td>{{$property->address}}</td>
                        </tr>
                        <tr>
                            <td><b>Price: </b></td>
                            <td>{{$property->price}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-body">
                    @foreach($property->features as $feature)
                        <img src="{{$feature->image()}}" width="120" height="120" alt="{{$feature->name}}" title="{{$feature->name}}">
                    @endforeach
                    <a href="{{route('tenant.request', $property->id)}}"><button class="btn btn-primary">Send Request</button></a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        </div>
    @endif
    @endif

@endsection
