@extends('layout')

@section('title')
Customer
@endsection

@section('content')
<div class="row">
    <div class="col-12">
    <h1>Customers</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
    <form action="customers" method="POST">
<label for="name">Name:</label>
    <div class="form-group">
    <input type="text" name="name" value="{{ old('name')}}" class="form-control">
    <div>
    {{$errors->first('name')}}
    </div>

    <label for="email">Email:</label>
    <div class="form-group">
    <input type="text" name="email" value="{{ old('email')}}"class="form-control" >
    </div>
    <div>
    {{$errors->first('email')}}
    </div>

    </div>

    <button class="btn btn-primary" type="submit">Add Customer</button>

    @csrf
</form>
    </div>
</div>


<hr>
<div class="row">
    <div class="col-12">
    <ul>
 <!-- blade syntax -->
@foreach($customers as $customer)
    <li>{{$customer->name}}<span class="text-muted">({{$customer->email}})</span></li>
@endforeach

</ul>
@endsection
    </div>
</div>
