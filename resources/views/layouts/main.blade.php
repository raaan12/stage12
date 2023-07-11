<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@include('layouts.header')
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    @include('layouts.navbar')
    <!-- fixed-top-->

    <!-- SideBar-->
    @include('layouts.sidebar')
    <!-- SideBar-->

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-body">
          @yield('content')
        </div>
      </div>
    </div>

    <!-- footer-->

   @include('layouts.footer')
   @include('layouts.scripts')
    
    <!-- END PAGE LEVEL JS-->
  </body>
</html>