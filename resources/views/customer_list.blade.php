@extends('template')

@section('content')
<a class="btn btn-primary float-end" href="{{ url('/add_form') }}">+ Add New</a>
<h2>List of Customers</h2>

<div class="row">
    @foreach($records as $item)
        <div class="col-sm-3" >
            <div class="card p-0 m-2" >
            <img class="card-img-top" src="{{ asset('/images/'.$item->client_photo) }}" style="height: 250px;" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">{{ $item->firstname }} {{ $item->lastname }}</h4>
                <p class="card-text">Civil Status: {{ $item->civil_status }}</p>
                <p class="card-text">Address: {{ $item->street }}, {{ $item->barangay }}, {{  $item->municipality }}</p>
                <p class="card-text">Date of Birth: {{ $item->date_of_birth }}</p>
                <a href="{{ url('edit_form/'.$item->id) }}" class="btn btn-primary">Edit Profile</a>
                <a href="{{ url('delete_record/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete Profile</a>
            </div>
            </div>
        </div>
    @endforeach
    
    
    
</div>

@endsection