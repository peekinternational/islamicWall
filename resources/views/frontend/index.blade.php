@extends('frontend.layouts.app')
@section('content')
<div class="container ">
	<div class="row">
		<div class="col-md-12" style="padding: 0px 0px;">
			<div class="container slider-container">
				 <div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
				    <li data-target="#myCarousel" data-slide-to="4"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <div class="slider-img-sec">
				      	<img src="{{asset('frontend-assets/images/abc.JPG')}}" alt="" style="width:100%;">
				      </div>
				    </div>

				    <div class="item">
				      <div class="slider-img-sec">
				      	<img src="{{asset('frontend-assets/images/abc.JPG')}}" alt="" style="width:100%;">
				      </div>
				    </div>
				  
				    <div class="item">
				      <div class="slider-img-sec">
				      	<img src="{{asset('frontend-assets/images/xyz.jpg')}}" alt="" style="width:100%;">
				      </div>
				    </div>
				  
				    <div class="item">
				      <div class="slider-img-sec">
				      	<img src="{{asset('frontend-assets/images/zzz.jpg')}}" alt="" style="width:100%;">
				      </div>
				    </div>
				    <div class="item">
				      <div class="slider-img-sec">
				      	<img src="{{asset('frontend-assets/images/abc.JPG')}}" alt="" style="width:100%;">
				      </div>
				    </div>
				  </div>

				  <!-- Left and right controls -->
				  <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a> -->
				</div>
			</div>
		</div>
	</div>
	<div class="row gallery-firstrow">
		<div class="col-md-4">
			<div class="gridview-pic">
				<img src="{{asset('frontend-assets/images/first1.png')}}" alt="" style="width: 100%;">
			</div>
			<div class="overlay">
				<button class="btn btn-lg btn-block"><span>Wall Clock</span></button>
			</div>
		</div>
		<div class="col-md-4">
			<div class="gridview-pic">
				<img src="{{asset('frontend-assets/images/first2.jpg')}}" alt="" style="width: 100%;">
			</div>
			<div class="overlay">
				<button class="btn btn-lg btn-block"><span>Wood Art</span></button>
			</div>
		</div>
		<div class="col-md-4">
			<div class="gridview-pic">
				<img src="{{asset('frontend-assets/images/first3.jpg')}}" alt="" style="width: 100%;">
			</div>
			<div class="overlay">
				<button class="btn btn-lg btn-block"><span>kids room art</span></button>
			</div>
		</div>
	</div>
	<div class="row gallery-2ndrow">
		<div class="col-md-3">
			<div class="gridview-pic2">
				<img src="{{asset('frontend-assets/images/2nd-1.jpg')}}" alt="" style="width: 100%;">
			</div>
			<div class="overlay">
				<button class="btn btn-lg btn-block"><span>Wood Art</span></button>
			</div>
		</div>
		<div class="col-md-3">
			<div class="gridview-pic2">
				<img src="{{asset('frontend-assets/images/2nd-2.jpg')}}" alt="" style="width: 100%;">
			</div>
			<div class="overlay">
				<button class="btn btn-lg btn-block"><span>Wood Art</span></button>
			</div>
		</div>
		<div class="col-md-3">
			<div class="gridview-pic2">
				<img src="{{asset('frontend-assets/images/2nd-3.jpg')}}" alt="" style="width: 100%;">
			</div>
			<div class="overlay">
				<button class="btn btn-lg btn-block"><span>Wood Art</span></button>
			</div>
		</div>
		<div class="col-md-3">
			<div class="gridview-pic2">
				<img src="{{asset('frontend-assets/images/2nd-4.jpg')}}" alt="" style="width: 100%;">
			</div>
			<div class="overlay">
				<button class="btn btn-lg btn-block"><span>Wood Art</span></button>
			</div>
		</div>
	</div>  
	<div class="row">
		<h3  class="title-featured"> <i class="fa fa-chevron-left"></i> <span ></span> <span>Featured Product</span> <i class="fa fa-chevron-right"></i></h3>
		<div class="grid-view">
			<div class="col-md-2-5">
				<label class="tag">New</label>
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/featured-1.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
				
			</div>
			<div class="col-md-2-5">
				<label class="tag">25%</label>
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/featured-2.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<label class="tag">New</label>
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/featured-3.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/featured-4.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<label class="tag">New</label>
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/featured-5.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
		</div>
	</div>  
	<div class="row">
		<h3  class="title-featured">  <span>BROWSE OUR BEST SELLERS</span> </h3>
		<div class="grid-view">
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/seller-1.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
				
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/seller-2.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/seller-3.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/seller-4.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/seller-5.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
		</div>
		<div class="grid-view">
			<div class="col-md-2-5">
				<div class="card">
				  	<div class="img-section">
				  		<img src="{{asset('frontend-assets/images/seller-6.jpg')}}" alt="">
				  	</div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
				
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/seller-7.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/seller-8.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/seller-9.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  	<div class="img-section">
				  		<img src="{{asset('frontend-assets/images/seller-10.jpg')}}" alt="">
				  	</div>
				  	<div class="caption">
				    	<p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     	<p class="text-muted">Wall Art</p> 
				     	<p><small>$112.92</small> $80.75</p> 
				  	</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<h3  class="title-featured"> <i class="fa fa-chevron-left"></i> <span>BROWSE OUR LATEST WALL ARTS PRODUCTS</span> <i class="fa fa-chevron-right"></i></h3>
		<div class="grid-view">
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/wallart-1.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
				
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/wallart-2.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/wallart-3.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/wallart-4.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/wallart-5.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<h3  class="title-featured">  <span>Our Blog's</span> </h3>
		<div class="grid-view">
			<div class="col-md-2-5">
				<div class="card">
					<div class="img-section">
				  		<img src="{{asset('frontend-assets/images/blogs-1.jpg')}}" alt="">
					</div>
				  <div class="caption">
				  	<h4> LOREM ET DORUS</h4>
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p>
				     <button class="btn checkout-btn">READ MORE</button> 
				  </div>
				</div>
				
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/blogs-2.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				  	<h4> LOREM ET DORUS</h4>
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				     <button class="btn checkout-btn">READ MORE</button>
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/blogs-3.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				  	<h4> LOREM ET DORUS</h4>
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				     <button class="btn checkout-btn">READ MORE</button>
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/blogs-4.png')}}" alt="">
				  </div>
				  <div class="caption">
				  	<h4> LOREM ET DORUS</h4>
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				     <button class="btn checkout-btn">READ MORE</button>
				  </div>
				</div>
			</div>
			<div class="col-md-2-5">
				<div class="card">
				  <div class="img-section">
				  	<img src="{{asset('frontend-assets/images/blogs-5.jpg')}}" alt="">
				  </div>
				  <div class="caption">
				  	<h4> LOREM ET DORUS</h4>
				    <p>Arabic calligraphy oval Mirrorwith quote(FRAME ONLY)</p> 
				     <p class="text-muted">Wall Art</p> 
				     <p><small>$112.92</small> $80.75</p> 
				     <button class="btn checkout-btn">READ MORE</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection