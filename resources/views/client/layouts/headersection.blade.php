         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  

                  <div class="header_box">

                     <div class="login_menu">
                        <ul>
                           <li style="margin-left: 1000PX;">
                              <button type="button" data-toggle="dropdown" style="background-color: transparent; color: white;">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                              </button>

                              <div class="dropdown-menu">
                                 <div class="row total-header-section">
                                    @php $total = 0 @endphp
                                    @foreach((array) session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach
                                    <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                       <p>Total: <span class="text-info"> {{ $total }} dt</span></p>
                                    </div>
                                 </div>
                                 @if(session('cart'))
                                 @foreach(session('cart') as $id => $details)
                                 <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                       <img src="{{ asset('storage/') }}/{{ $details['photo'] }}" style="width: 50px;"/>
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <span class="text-info">{{ $details['name'] }}</span>
                                    <br>                                   
                                       <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                       <span class="price text-info">{{ $details['price'] * $details['quantity']}} dt</span> 
                                 </div>
                                 </div>
                                 @endforeach
                                 @endif
                                 <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                       <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                    </div>
                                 </div>
                              </div>


                           </li>

                           
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->