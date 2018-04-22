@extends ('layout')

@section('content')

@foreach ($orders as $order)

<li> {{$order->first}} </li>

@endforeach

@endsection
