@extends('layouts.app')
    @section('title')
        properties
    @endsection
    @section('content')
    <table class="table" style="color: black;">
        <thead>
            <tr>
                <th>S/N</th>
                <th>TENANT</th>
                <th>HOUSE</th>
                <th>ADDRESS</th>
                <th>AMOUNT</th>
                <th>DURATION</th>
                <th>SECURITY DEPOSIT</th>
                <th>START AT</th>
                <th>END AT</th>
                <th>PAID</th>
                <th>BALANCE</th>
                
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach(Auth::user()->leaseAgreements() as $agreement)
                
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$agreement->rentRequest->tenant->user->name}}</td>
                    <td>{{$agreement->rentRequest->property->size}}</td>
                    <td>{{$agreement->rentRequest->property->address}}</td>
                    <td>{{$agreement->amount}}</td>
                    <td>{{$agreement->duration}} Months</td>
                    <td>{{$agreement->security_deposit}}</td>
                    <td>{{$agreement->start_at}}</td>
                    <td>{{$agreement->end_at}}</td>
                    <td>{{number_format($agreement->paid(), 2)}}</td>
                    <td>{{number_format($agreement->balance(), 2)}}</td>
                    
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit_{{$agreement->id}}">Add Payment</button>
                    </td>
                    @include('property.lease.pay')
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
