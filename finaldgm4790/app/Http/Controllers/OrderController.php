<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
   public function store(Request $request)
   {
   
      Order::create(request(['first', 'last', 'address', 'city', 'state', 'zip']));

      return redirect('/thanks')->with([
        'first' => $request->first,
        'last' => $request->last,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'zip' => $request->zip
      ]);
   }

}
