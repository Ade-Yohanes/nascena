{{-- @extends('frontend.layout.master') --}}

{{-- @section('navmenu') --}}


{{-- @dd($nav_brand) --}}
<header class="version_2">
     <div class="layer"></div><!-- Mobile menu overlay mask -->
     <div class="main_header Sticky">
         <div class="container">
             <div class="row small-gutters">
                 <div class="col-xl-2 col-lg-3 d-lg-flex align-items-center">
                     <div id="logo">
                         <a href="{{url('/')}}"><img src="{{asset('assets/img/nascena/Nascena_logo-nobg.svg')}}" alt="" width="100" height="35"></a>
                     </div>
                 </div>
                 <nav class="col-xl-7 col-lg-7">
                     <a class="open_close" href="javascript:void(0);">
                         <div class="hamburger hamburger--spin">
                             <div class="hamburger-box">
                                 <div class="hamburger-inner"></div>
                             </div>
                         </div>
                     </a>
                     <!-- Mobile menu button -->
                     <div class="main-menu ">
                         <div id="header_menu">
                             <a href="{{url('/')}}"><img src="{{asset('assets/img/nascena/Nascena_logo-nobg.svg')}}" alt="" width="100" height="35"></a>
                             <a href="{{url('/')}}" class="open_close" id="close_in"><i class="ti-close"></i></a>
                         </div>
                         <ul>
                             <li>
                                 <a href="{{ url('/') }} "  javascript:void(0); >Home</a>
                             </li>
                 
                             <li class="megamenu submenu">
                                 <a href="javascript:void(0);" class="show-submenu-mega">Service</a>
                                 <div class="menu-wrapper">
                                     <div class="row small-gutters">
                                        @foreach ($nav_brand->chunk(10) as $chunk)
                                         <div class="col-lg-3">
                                             <h3>Brand  </h3>
                                             @foreach ($chunk as $nav_brand)
                                                <ul>
                    
                                                    <li><a href="{{ url('/brand/'. $nav_brand->slug) }}">{{ $nav_brand->name_brand }}</a></li>
                                                    
                                                </ul>
                                                @endforeach
                                                @endforeach 

                                                <ul>
                                                    <a href=" {{url('/brand_all')}} " > see all </a>
                                                </ul>
                                            </div>
                                            
                                         <div class="col-lg-3">
                                            @foreach ($category->chunk(10) as $kategori)
                                                
                                                    
                                               
                                            <h3>Category &amp; Product</h3>
                                            @foreach ($kategori as $kategori)
                                            <ul>
                                                <li><a href="{{ url('/category/'. $kategori->slug ) }}"> {{$kategori->name_category }} </a></li>
                                               
                                            </ul>
                                                 
                                            @endforeach
                                            @endforeach
                                            <ul>
                                                <a href=" {{url('/category_all')}} " > see all </a>
                                            </ul>
                                        </div>
                
                                        
                                        <div class="col-lg-3">
                                            <h3> Company </h3>
                                            <ul>
                                                <li><a href="{!! url('/about') !!} ">About us</a> </li>
                                            </ul>
                                            <ul>
                                                <li><a href="{!! url('/quote') !!}  ">Quote</a> </li>
                                            </ul>
                                            <ul>
                                                <li><a href="{!! url('/contact') !!} ">Contact</a> </li>
                                            </ul>
                                            
                                            <ul>
                                                <h3> Experience </h3>
                                                @foreach ($experian_list as $el)
                                                {{-- @dd($experian_list) --}}
                                                <li> <a href=" {{ url('/experience/'. $el->slug ) }}"> {{ $el->project_name }} </a> </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                            <div class="col-lg-3">
                                                <h3>Service</h3>
                                            {{-- <ul>
                                                <li>
                                                    <a href="">tesst</a>
                                                </li>

                                                <li>
                                                    <a href="">tesst</a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <a href="">tesst2</a>
                                                </li>

                                                <li>
                                                    <a href="">tesst2</a>
                                                </li>
                                            </ul> --}}
                                           
                                        </div>
                                         {{-- <div class="col-lg-3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
                                             <div class="banner_menu">
                                                 <a href="#0">
                                                     <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('assets/img/banner_menu.jpg')}}" width="400" height="550" alt="" class="img-fluid lazy">
                                                 </a>
                                             </div>
                                         </div>  --}}
                                     </div>
                                     <!-- /row -->
                                     
                                 </div>
                                 <!-- /menu-wrapper -->
                             </li>
                             <li>
                                 <a href=" {!! url('/product') !!} " >Product</a>
                             </li>   
                             <li>
                                <a href=" {!! url('/quote') !!} " >Quote</a>
                            </li>    
                            <li>
                                <a href=" {!! url('/about') !!} " >About us</a>
                            </li>   
                             
                             <li>
                                 <a href="{!! url('/contact') !!}" >Contact</a>
                             </li>

                             <li>
                                <a href="{!! url('/package_list') !!}" >Package</a>
                            </li>
                             
                         </ul>
                         
                     </div>
                     <!--/main-menu -->
                     
                 </nav>
                 <div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
                     <ul class="top_tools ">
                         <li>
                             <a href="{{ url('/search') }}" class="search_panel"><span>Search</span></a>
                         </li>
                         {{-- <li>
                             <div class="dropdown dropdown-cart">
                                 <a href="cart.html" class="cart_bt"><strong>2</strong></a>
                                 <div class="dropdown-menu">
                                     <ul>
                                         <li>
                                             <a href="product-detail-1.html">
                                                 <figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/1.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                                 <strong><span>1x Armor Air x Fear</span>$90.00</strong>
                                             </a>
                                             <a href="#0" class="action"><i class="ti-trash"></i></a>
                                         </li>
                                         <li>
                                             <a href="product-detail-1.html">
                                                 <figure><img src="img/products/product_placeholder_square_small.jpg" data-src="img/products/shoes/thumb/2.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                                 <strong><span>1x Armor Okwahn II</span>$110.00</strong>
                                             </a>
                                             <a href="0" class="action"><i class="ti-trash"></i></a>
                                         </li>
                                     </ul>
                                     <div class="total_drop">
                                         <div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
                                         <a href="cart.html" class="btn_1 outline">View Cart</a><a href="checkout.html" class="btn_1">Checkout</a>
                                     </div>
                                 </div>
                             </div>
                             <!-- /dropdown-cart-->
                         </li> --}}
                         {{-- <li>
                             <a href="#0" class="wishlist"><span>Wishlist</span></a>
                         </li>
                         <li>
                             <div class="dropdown dropdown-access">
                                 <a href="account.html" class="access_link"><span>Account</span></a>
                                 <div class="dropdown-menu">
                                     <a href="account.html" class="btn_1">Sign In or Sign Up</a>
                                     <ul>
                                         <li>
                                             <a href="track-order.html"><i class="ti-truck"></i>Track your Order</a>
                                         </li>
                                         <li>
                                             <a href="account.html"><i class="ti-package"></i>My Orders</a>
                                         </li>
                                         <li>
                                             <a href="account.html"><i class="ti-user"></i>My Profile</a>
                                         </li>
                                         <li>
                                             <a href="help.html"><i class="ti-help-alt"></i>Help and Faq</a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                             <!-- /dropdown-access-->
                         </li> --}}
                        
                     
                     </ul>
                 </div>
             </div>
             <!-- /row -->
         </div>
     </div>
     <!-- /main_header -->
 </header>
 <!-- /header -->
 <div class="top_panel"  >
     {{-- <div class="container header_panel">
         <a href="{{ url('/search') }}" class="btn_close_top_panel">
            {{-- <i class="ti-close"></i> --}}
        {{-- </a>
         {{-- <small>What are you looking for?</small> --}}
     {{-- </div>  --}}
     <!-- /header_panel -->
     
      {{-- <div class="container"> 
         <div class="search-input">
                 <input type="text" id="search_product"  placeholder="Search over 10.000 products...">
                 <option value="">test</option>
                 <button type="submit"><i class="ti-search"></i></button>
             </div>
             {{-- {{ csrf_field() }} --}}
            {{-- </div>
     </div>  --}} 
     <!-- /related -->
 </div>
 <!-- /search_panel -->

 @push('javascript')




 @endpush


{{-- @endsection --}}