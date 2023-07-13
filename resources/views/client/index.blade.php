@extends('layouts.app')

@section('title', 'Home')

@section('contents')

<div class="d flex align-items-center justify-content-between">
    <h1 class="mb-0">List of Clients</h1>
    <a href="{{ route ('client.create') }}" class="btn btn-success">Add Client</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @if($client->count()>0)
        @foreach($client as $rs)
        <tr>
            <td class="align-middle">{{$loop->iteration}}</td>
            <td class="align-middle">{{$rs->first_name}}</td>
            <td class="align-middle">{{$rs->last_name}}</td>
            <td class="align-middle">{{$rs->email}}</td>
            <td class="align-middle">{{$rs->address}}</td>
            <td class="align-middle">{{$rs->phone_number}}</td>
            <td class="align-middle"> 
            <div class="btn-group" role="group">
                <a href="{{ route ('client.show', $rs->id)}}" type="button" class="btn btn-secondary">View</a>
                <a href="{{ route ('client.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                <form action="{{route('client.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger m-0">Delete</button>
                </form>
            </div>

        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Client not found</td>
        </tr>
        @endif

    </tbody>
    </table>
    @endsection


