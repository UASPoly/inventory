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
                <th>IMAGE</th>
                <th><button data-toggle="modal" data-target="#addProduction" class="btn custom-btn"><b>+</b></button></th>
            </tr>
            @include('property.feature.create')
        </thead>
        <tbody>
            @foreach($property->features as $feature)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$feature->name}}</td>
                    <td><img src="{{$feature->image()}}" width="120" height="120" alt="Image"></td>
                    <td>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit_{{$feature->id}}">Edit</button>
                        <a href="{{route('property.feature.delete',[$feature->id])}}" onclick="return confirm('Are you sure, you want to delete this production?')"><button class="btn btn-danger">Delete</button></a>
                    </td>
                    @include('property.feature.edit')
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
