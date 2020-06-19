@extends('layout')

@section('content')
<h1>Customers</h1>

<ul>
 <!-- blade syntax -->
@foreach($customers as $customer)
    <li>{{$customer}}</li>
@endforeach

</ul>
@endsection
