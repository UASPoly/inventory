@extends('layouts.app')
    @section('title')
        properties
    @endsection
    @section('content')
    <table class="table" style="color: black;">
        <thead>
            <tr>
                <th>S/N</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CONTACT</th>
                <th>POSITION AT WORK</th>
                <th>PLACE OF WORK</th>
                <th>ADDRESS OF WORK</th>
                <th>ANNUAL INCOME</th>
                
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach(Auth::user()->properyRentRequests() as $request)
                
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$request->tenant->user->name}}</td>
                    <td>{{$request->tenant->user->email}}</td>
                    <td>{{$request->tenant->contact}}</td>
                    <td>{{$request->tenant->work_title}}</td>
                    <td>{{$request->tenant->work_place}}</td>
                    <td>{{$request->tenant->work_address}}</td>
                    <td>#{{number_format($request->tenant->estimated_annual_income,2)}}</td>
                    
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit_{{$request->id}}">Approve and Add Lease Agreement</button>
                    </td>
                    @include('property.request.approve')
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
