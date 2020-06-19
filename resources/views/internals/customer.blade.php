@extends('layout')

@section('content')
<h1>Customers</h1>

<form action="customers" method="POST" class="pb-5">

    <div class="input-group">
        <p>Name:</p>
    <input type="text" name="name" >
    <p>Email:</p>
    <input type="text" name="email" >
    </div>

    <button type="submit">Add Customer</button>

    @csrf
</form>
<ul>
 <!-- blade syntax -->
@foreach($customers as $customer)
    <li>{{$customer->name}}({{$customer->email}})</li>
@endforeach

</ul>
@endsection
