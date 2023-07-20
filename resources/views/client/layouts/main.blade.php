<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@include('client.layouts.header')
<body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->


         @include('client.layouts.topsection')
         

         <!-- header top section start -->


         <!-- header section start -->
                  
         
         @include('client.layouts.headersection')


         <!-- header section end -->


         <!-- banner section start -->


         @include('client.layouts.banner')
         
         
         <!-- banner section end -->
      </div>

      <!-- banner bg main end -->



      <!-- fashion section start -->
      <div class="fashion_section">
        @yield('content')
      </div>
      <!-- fashion section end -->




    <!-- footer-->
    @include('client.layouts.footer')
    @include('client.layouts.scripts')
    

      
</body>
