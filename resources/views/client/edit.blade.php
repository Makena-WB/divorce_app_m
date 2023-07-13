@extends ('layouts.app')

@section('title', 'Edit Client')

@section('contents')
<h1 class="mb-0">Edit Client</h1>
<hr />
<form action="{{ route('client.update', $client->id) }}" method="POST">
@csrf
@method('PUT')
<div class= "row">
            <div class="col mb-3">
                <label class="form-label"> First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$client->first_name}}" >
            </div>
            <div class="col mb-3">
            <label class="form-label"> Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$client->last_name}}">
        </div>
</div>
        <div class= "row">
            <div class="col mb-3">
            <label class="form-label"> Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{$client->email}}">
            </div>
            <div class="col mb-3">
            <label class="form-label"> Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$client->address}}">
            </div>
            <div class="col mb-3 ">
            <label class="form-label">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" placeholder="Phone Number" value="{{$client->phone_number}}" >
         </div>
</div>
<div class="row">
                <div class="d-grid">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
</div>
</form>
@endsection