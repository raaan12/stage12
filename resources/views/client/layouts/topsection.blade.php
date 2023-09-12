<div class="container">
   <div class="header_section_top">
      <div class="row">
         <div class="col-sm-12">
            <div class="custom_menu">
                  <img class="rounded-circle" src="{{asset('images/logo2.png')}}" style="height: 50px; padding: left 59px;">
               <ul>
                  <!-- logo section start -->

                  <li><a href="{{ route('client.index') }}">Home</a></li>
                  <li><a href="{{ route('client.clothes') }}">Clothes</a></li>
                  <li><a href="{{ route('client.accessories') }}">Accessories</a></li>
                  <li><a href="{{ route('client.aboutus') }}">About us</a></li>
                  <li><a href="{{ route('client.contact') }}">Contact</a></li>
                  <li><a href="{{ route('client.profile') }}">Profile</a></li>


                  <li>
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                           {{ __('Log Out') }}
                        </x-responsive-nav-link>
                     </form>
                  </li>

                  
               </ul>

            </div>
         </div>
      </div>
   </div>
</div>



<!-- logo section end -->