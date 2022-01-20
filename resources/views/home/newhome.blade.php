@extends('layouts.main')

@section('body')
<div class="caro">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        
        {{-- Caro 1 --}}
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('/images/carousel/1.png') }}" class="d-block w-100 mx-auto" alt="" height="100%">
          </div>

          {{-- Caro 2 --}}
          <div class="carousel-item">
            <img src="{{ asset('/images/carousel/2.png') }}" class="d-block w-100 mx-auto" alt="...">
          </div>
          
          {{-- Caro 3 --}}
          <div class="carousel-item">
            <img src="{{ asset('/images/carousel/3.png') }}" class="d-block w-100 mx-auto" alt="...">       
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>        
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. --> 

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row justify-content-center mt-4">
      {{-- Row 1 --}}
      <div class="col-lg-4 text-center">
        <img src="{{ asset('/images/product/4.jpeg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Handbags</h2>
        <p>Discover our extensive range of Handbags online at LAUCT. Shop online or in-store for some of the UK's favourite products.</p>
        <p><a class="btn btn-white border border-dark" href="/category/1">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      
      {{-- Row 2 --}}
      <div class="col-lg-4 text-center">
        <img src="{{ asset('/images/product/7.jpeg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Shoes</h2>
        <p>Find the perfect footwear for your everyday lifestyle. From business to evening shoes, come and discover the possibilities. </p>
        <p><a class="btn btn-white border border-dark" href="/category/2">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      
      {{-- Row 3 --}}
      <div class="col-lg-4 text-center">
        <img src="{{ asset('/images/product/14.jpeg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h2>Tableware</h2>
        <p>Discover our range of tableware and crockery. Get ready for meal times at affordable prices. Shop online or visit our store now!</p>
        <p><a class="btn btn-white border border-dark" href="/category/4">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Bid the perfect dress for your occassion.</h2>
        <p class="lead">The cross-cultural brand’s former creative director reflects on building an upscale Asian-inspired label and the transformation of China into a global luxury market. Discover your Shanghai Tang's dresses now! </p>
    </div>
    <div class="col-md-5">
        <img src="{{ asset('/images/product/17.jpeg') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Bag for business? We got it.</h2>
        <p class="lead">Business is important. But, your bag needs to show the significance it has in your life. Find your perfect bag right here with us.</p>
    </div>
    <div class="col-md-5 order-md-1">
        <img src="{{ asset('/images/product/18.png') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Need Accessories?</h2>
        <p class="lead">Accessories can add into your confidence and looks. Find it with us at LAUCT</p>
    </div>
    <div class="col-md-5">
        <img src="{{ asset('/images/product/19.jpeg') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">

    </div>
    </div>


    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


    

@endsection