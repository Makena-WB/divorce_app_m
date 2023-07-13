@extends ('layouts.app')

@section('title', 'Show Client')

@section('contents')
<h1 class="mb-0">View Client</h1>
<hr />
<div class= "row">
            <div class="col mb-3">
                <label class="form-label"> First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$client->first_name}}" readonly>
            </div>
            <div class="col mb-3">
            <label class="form-label"> Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$client->last_name}}" readonly>
        </div>
</div>
        <div class= "row">
            <div class="col mb-3">
            <label class="form-label"> Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{$client->email}}" readonly>
            </div>
            <div class="col mb-3">
            <label class="form-label"> Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{$client->address}}" readonly>
            </div>
            <div class="col mb-3 ">
            <label class="form-label">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" placeholder="Phone Number" value="{{$client->phone_number}}" readonly>
         </div>
</div>
<div class= "row">
            <div class="col mb-3">
            <label class="form-label"> Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{$client->created_at}}" readonly>
            </div>
            <div class="col mb-3">
            <label class="form-label"> Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{$client->updated_at}}" readonly>
        </div>
</div>
@endsection