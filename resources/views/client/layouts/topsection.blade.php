<div class="container">
   <div class="header_section_top">
      <div class="row">
         <div class="col-sm-12">
            <div class="custom_menu">
               <ul>
                  <li><a href="{{ route('client.index') }}">Home</a></li>
                  <li><a href="{{ route('client.clothes') }}">Clothes</a></li>
                  <li><a href="{{ route('client.accessories') }}">Accessories</a></li>
                  <li><a href="{{ route('client.aboutus') }}">About us</a></li>
                  <li><a href="{{ route('client.contact') }}">Contact</a></li>
                  <form method="POST" action="{{ route('logout') }}">
                     @csrf

                     <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                     </x-responsive-nav-link>
                  </form>
               </ul>

            </div>
         </div>
      </div>
   </div>
</div>

<!-- logo section start -->
<div class="logo_section">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="logo"><a href="index.html"><img src="LOGO"></a></div>
         </div>
      </div>
   </div>
</div>
<!-- logo section end -->