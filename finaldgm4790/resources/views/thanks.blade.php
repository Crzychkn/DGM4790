@extends ('layout')

@section('content')

<h1>Thanks for shopping with us! Your order details are below.</h1>
<p>{{ session()->get( 'first' ) }} {{ session()->get( 'last' ) }} </p>
<p>{{ session()->get( 'address' ) }}</p>
<p>{{ session()->get( 'city' ) }}, {{ session()->get( 'state' ) }} {{ session()->get( 'zip' ) }}
</p>
<p>Item: 
@if ( session('item') == 1)
Rock Buddies
@elseif ( session('item') == 2)
Item 2
@elseif ( session('item') == 3)
Item 3
@endif

</p>
<p>Order Total: ${{ session()->get( 'price' ) }}</p>

@endsection
