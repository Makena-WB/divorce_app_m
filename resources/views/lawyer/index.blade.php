@extends('layouts.app')

@section('title', 'Home')

@section('contents')

<div class="d flex align-items-center justify-content-between">
    <h1 class="mb-0">List of Lawyers</h1>
    <a href="{{ route ('lawyer.create') }}" class="btn btn-success">Add Lawyer</a>
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
            <th>Cases Won</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @if($lawyer->count()>0)
        @foreach($lawyer as $rs)
        <tr>
            <td class="align-middle">{{$loop->iteration}}</td>
            <td class="align-middle">{{$rs->first_name}}</td>
            <td class="align-middle">{{$rs->last_name}}</td>
            <td class="align-middle">{{$rs->email}}</td>
            <td class="align-middle">{{$rs->address}}</td>
            <td class="align-middle">{{$rs->cases_won}}</td>
            <td class="align-middle"> 
            <div class="btn-group" role="group">
                <a href="{{ route ('lawyer.show', $rs->id)}}" type="button" class="btn btn-secondary">View</a>
                <a href="{{ route ('lawyer.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                <form action="{{route('lawyer.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger m-0">Delete</button>
                </form>
            </div>

        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Lawyer not found</td>
        </tr>
        @endif

    </tbody>
    </table>
    @endsection


