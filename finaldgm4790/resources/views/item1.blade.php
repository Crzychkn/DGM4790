@extends ('layout')

@section('content')

<table id="cart" class="table table-hover table-condensed">
               <thead>
                  <tr>
                     <th style="width:58%">Product</th>
                     <th style="width:10%"></th>
                     <th style="width:22%" class="text-center"></th>
                     <th style="width:10%">Total</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td data-th="Product">
                        <div class="row">
                           <div class="col-sm-2 hidden-xs"><img src=" {{ asset('storage/item1.jpg') }}" alt="..." class="img-responsive"/></div>
                           <div class="col-sm-10">
                              <h4 class="nomargin">Rock Buddies</h4>
                              <p>These multi-colored rock friends come in groups of five, each with a unique color. Note: May become emotional if separated.</p>
                           </div>
                        </div>
                     </td>
                     <td data-th="Price"></td>
                     <td data-th="Subtotal" class="text-center"></td>
                     <td data-th-"Total">$34.99</td>
                  </tr>
               </tbody>
            </table>
@include ('layouts.checkout')

@endsection
