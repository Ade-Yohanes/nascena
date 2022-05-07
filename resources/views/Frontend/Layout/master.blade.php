<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')

</head>

<body>
	
    {{-- @dd($nav_brand) --}}

	<div id="page">
		
	@include('frontend.navmenu')
	
    {{-- @yield('navmenu') --}}

   
    

		
	@yield('content')
		
	<footer class="revealed">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href=" {!! url('/about') !!}">About us</a></li>
							<li><a href="{!! url('/product') !!}">Product</a></li>
							<li><a href="{{url('/brand_all')}}">Brand</a></li>
							<li><a href="{!! url('/quote') !!}">Quote</a></li>
							<li><a href="{!! url('/contact') !!}">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							
								
							
								@foreach ($category as $category)
									
								
								<li><a href="{{ url('/category/'. $category->slug ) }}">{{ $category->name_category }}</a></li>

								@endforeach

							

							{{-- <li><a href="listing-grid-2-full.html">Electronics</a></li>
							<li><a href="listing-grid-1-full.html">Furniture</a></li>
							<li><a href="listing-grid-3.html">Glasses</a></li>
							<li><a href="listing-grid-1-full.html">Shoes</a></li>
							<li><a href="listing-grid-1-full.html">Watches</a></li> --}}
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_3">Contacts</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="ti-home"></i>Gedung Office 8 Lantai 18A SCBD <br>

								Jln. Jend Sudirman Kav.52-53 
								
								Jakarta Selatan 12190
								
								 <br>Indonesia</li>
							<li><i class="ti-headphone-alt"></i>02129490431</li>
							<li><i class="ti-headphone-alt"></i>02129490430</li>
							<li><i class="ti-email"></i><a href="#0">sales@nascena.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
						    <div class="form-group">
						        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
						        <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
						    </div>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('assets/img/twitter_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('assets/img/facebook_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('assets/img/instagram_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('assets/img/youtube_icon.svg')}}" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2022 Nascena</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	

	<!-- COMMON SCRIPTS -->
    <script src="{{asset('assets/js/common_scripts.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset('assets/js/carousel-home.js')}}"></script>

	<!-- SPECIFIC SCRIPTS Product List-->
	<script src="{{asset('assets/js/sticky_sidebar.min.js')}}"></script>
	<script src="{{asset('assets/js/specific_listing.js')}}"></script>

     <!-- SPECIFIC SCRIPTS product detail -->
     
     <script src="{{asset('assets/js/carousel_with_thumbs.js')}}"></script>

	 {{-- spesific Listing --}}
	 <script src="{{asset('assets/js/specific_listing.js')}}"></script>	
	 
	 {{-- Select2 CDN LINK --}}
	 <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->


	 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

	 {{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> --}}

	 @stack('Javascript')

	

</body>
</html>