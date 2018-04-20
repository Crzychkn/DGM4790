@extends ('layout')

@section('content')

<h1>Thanks for shopping with us! Your order details are below.</h1>
<p>{{ session()->get( 'first' ) }} {{ session()->get( 'last' ) }} </p>
<p>{{ session()->get( 'address' ) }}</p>
<p>{{ session()->get( 'city' ) }}, {{ session()->get( 'state' ) }} {{ session()->get( 'zip' ) }}
</p>
<p>Item: </p>
<p>Order Total: </p>

{{ session('order') }}

@endsection
