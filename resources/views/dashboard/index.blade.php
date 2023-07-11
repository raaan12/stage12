<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin page</title>
    <link rel="apple-touch-icon" href="{{asset('images/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="{{asset('css/line-awesome.min.css')}}" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chartist.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app-lite.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="{{asset('images/avatar-s-19.png')}}" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{asset('images/avatar-s-19.png')}}" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- fixed-top-->

    <!-- SideBar-->
  @include(layouts.sidebar)
    <!-- SideBar-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

<!-- Chart -->
<!-- eCommerce statistic -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted danger position-absolute p-1">Produit 1</h5>
                <div>
                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                </div>
                <div style="text-align: center; margin-top: 30px;" id="">
                    <img src="{{asset('images/tshirT.png')}}" height="80px" alt="Une belle image">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <p>Price: 200£</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">Produit 2</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div style="text-align: center; margin-top: 30px;" id="">
                    <img src="{{asset('images/tshirT.png')}}" height="80px" alt="Une belle image">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <p>Price: 200£</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted warning position-absolute p-1">Produit 3</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div style="text-align: center; margin-top: 30px;" id="">
                    <img src="{{asset('images/tshirT.png')}}" height="80px" alt="Une belle image">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <p>Price: 200£</p>
                </div>
            </div>
        </div>

    </div>
    <button type="button" style="width: 50%; margin-left: 25%; margin-top: 30px;   font-size: 24px; cursor: pointer; text-align: center; text-decoration: none; outline: none; color: #fff; background-color: #A698C4; border:none; border-radius: 6px;" >Ajouter un produit</button>

</div>
<!--/ eCommerce statistic -->

<!-- Statistics 
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-multiple-thumbnails">Multiple Thumbnail</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <span class="avatar">
                            <img src="{{asset('images/avatar-s-2.png')}}" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="{{asset('images/avatar-s-3.png')}}" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="{{asset('images/avatar-s-4.png')}}" alt="avatar">
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Content title</h4>
                        <p class="card-text">Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie powder.Donut sweet
                            roll marzipan pastry cookie cake tootsie roll oat cake cookie.Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. </p>
                        <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie roll pie marshmallow lollipop chupa chups donut fruitcake
                            cake.Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. Marshmallow
                            wafer tiramisu jelly beans.</p>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">Recent products</h4>
                    <h6 class="card-subtitle text-muted">Carousel Card With Header & Footer</h6>
                </div>
                <div id="carousel-area" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-area" data-slide-to="1"></li>
                        <li data-target="#carousel-area" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{asset('images/08.jpg')}}" class="d-block w-100" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/03.jpg')}}" class="d-block w-100" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('images/01.jpg')}}" class="d-block w-100" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                            <span class="la la-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                            <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">2 days ago</span>
                <span class="tags float-right">
                    <span class="badge badge-pill badge-primary">Branding</span>
                    <span class="badge badge-pill badge-danger">Design</span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Buyers</h4>
                <a class="heading-elements-toggle">
                    <i class="fa fa-ellipsis-v font-medium-3"></i>
                </a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            <a data-action="reload">
                                <i class="ft-rotate-cw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div id="recent-buyers" class="media-list">
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="theme-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Kristopher Candy

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-1.jpg')}}"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-2.jpg')}}"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 3" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-4.jpg')}}"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12332 </span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away">
                                <img class="media-object rounded-circle" src="theme-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Lawrence Fowler

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-5.jpg')}}"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-6.jpg')}}"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12333 </span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-busy">
                                <img class="media-object rounded-circle" src="{{asset('images/avatar-s-9.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Linda Olson

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-2.jpg')}}"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-5.jpg')}}"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12334 </span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{asset('images/avatar-s-10.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Roy Clark

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-6.jpg')}}"
                                        alt="Avatar">
                                </li>
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 2" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-1.jpg')}}"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12335 </span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{asset('images/avatar-s-11.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Kristopher Candy

                            </span>
                            <ul class="list-unstyled users-list m-0 float-right">
                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Product 1" class="avatar avatar-sm pull-up">
                                    <img class="media-object rounded-circle no-border-top-radius no-border-bottom-radius" src="{{asset('images/portfolio-5.jpg')}}"
                                        alt="Avatar">
                                </li>
                            </ul>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3"> #INV-12336 </span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
 Statistics -->
        </div>
      </div>
    </div>

    <!-- footer-->

    <!--
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
          <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
      </div>
    </footer>
-->

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('js/chartist.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="{{asset('js/app-menu-lite.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/app-lite.js')}}" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('js/dashboard-lite.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>