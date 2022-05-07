@extends('frontend.layout.master')

@section('content')



<main>
	
		
	<div class="container margin_60_35">
	
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="write_review">
						<h1>Get Your Quotation</h1>
						{{-- <div class="rating_submit">
							<div class="form-group">
							<label class="d-block">Overall rating</label>
							<span class="rating mb-0">
								<input type="radio" class="rating-input" id="5_star" name="rating-input" value="5 Stars"><label for="5_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="4_star" name="rating-input" value="4 Stars"><label for="4_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="3_star" name="rating-input" value="3 Stars"><label for="3_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="2_star" name="rating-input" value="2 Stars"><label for="2_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="1_star" name="rating-input" value="1 Star"><label for="1_star" class="rating-star"></label>
							</span>
							</div>
						</div> --}}
						<!-- /rating_submit -->
					  <form method="POST" action=" {!! url('/create') !!} " enctype="multipart/form-data" >
						{{csrf_field()}}

						{{-- @if (session('status')) --}}

						<div class="form-group">
							<label>Title</label>
							<input class="form-control @error('title') is-invalid @enderror "  name='title' type="text" value=" {{ old('title') }} " placeholder="Title Request">
							@error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
												

                                            </span>
                            @enderror
						</div>
						<div class="form-group">
							<label>Name </label>
							<input class="form-control @error('name') is-invalid @enderror " name='name' type="text" placeholder=" Your Name" value=" {{ old('name') }} ">
							@error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
						</div>
						<div class="form-group">
							<label>Company </label>
							<input class="form-control @error('company') is-invalid @enderror " name='company' type="text"value=" {{ old('company') }} " placeholder=" Your Company">
							@error('company')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
						</div>
						<div class="form-group">
							<label>Phone Number </label>
							<input class="form-control @error('phone') is-invalid @enderror " name='phone' type="text" value=" {{ old('phone') }} " placeholder="Your Phone Number">
							@error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
						</div>
						<div class="form-group">
							<label>Email</label>
							<input class="form-control @error('email') is-invalid @enderror " name='email' type="text" value=" {{ old('email') }} "  placeholder="Your Email">
							@error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control @error('description') is-invalid @enderror " name='description' style="height: 180px;" value=" {{ old('description') }} "  placeholder="Description"></textarea>
							@error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
						</div>
						<div class="form-group">
							<label>Add your PDF</label> <span>Max File 2Mb</span>
							<div class="fileupload @error('file') is-invalid @enderror  "><input type="file" id="path" title="File Attachment" name="file" value=" {{ old('file') }} " accept="application/pdf " ></div>
							@error('file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                            @enderror
						</div>
						{{-- <div class="form-group">
							<div class="checkboxes float-left add_bottom_15 add_top_15">
								<label class="container_check">Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div> --}}
						 {{-- <input value="save"  type="submit" class="btn_1"> <a Submit > --}}
						{{-- <input method="post" action=" {!!url('/create')!!} " enctype="multipart/form-data" value="submit" type="submit" class="btn_1"><a Submit a> --}}
						{{-- <input  value="/create" type="submit" class="btn_1"> <a Submit a> --}}
						<input type="submit" class="btn_1" value="Submit"><a Submit >
							{{-- {{ __('Send Message') }} --}}
							{{ session('status') }}

							{{-- @endif --}}

						</form>

					</div>
				</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->

        
@endsection