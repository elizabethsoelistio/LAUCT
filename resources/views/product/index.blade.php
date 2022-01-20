@extends('layouts.main')

@section('body')

    @if (session()->has('addToCartSuccess'))
        <div class="container d-flex justify-content-center mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('addToCartSuccess') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="container d-flex justify-content-center mt-5">
        <div class="container d-flex justify-content-center">
            <img src="{{ URL::asset($product->product_image) }}" alt="" height="600">
        </div>

        <div class="container">
            <h1>{{ $product->product_name }}</h1>
            <h3>Description: </h3>
            <p>{{ $product->product_description }}</p>

            <h3>Intial Bid: </h3>
            <p>USD {{ $product->intial_bid }}</p>

            <h3>End Date and Time: </h3>
            <p>{{ $product->dateTime }}</p>

            <script>
                CountDownTimer('{{ $product->dateTime }}','countdown-{{ $product->product_id }}');
                function CountDownTimer(dt, id){
                    var end = new Date(dt);
                    var _second = 1000;
                    var _minute = _second * 60;
                    var _hour = _minute * 60;
                    var _day = _hour * 24;
                    var timer;
                    function showRemaining() {
                        var now = new Date();
                        var distance = end - now;
                        if (distance < 0) {
            
                            clearInterval(timer);
                            return;
                        }
                        var days = Math.floor(distance / _day);
                        var hours = Math.floor((distance % _day) / _hour);
                        var minutes = Math.floor((distance % _hour) / _minute);
                        var seconds = Math.floor((distance % _minute) / _second);
            
                        document.getElementById(id).innerHTML = days + 'days ';
                        document.getElementById(id).innerHTML += hours + 'hrs ';
                        document.getElementById(id).innerHTML += minutes + 'mins ';
                        document.getElementById(id).innerHTML += seconds + 'secs';
                    }
                    timer = setInterval(showRemaining, 1000);
                }
            </script>

            <p id="countdown-{{ $product->product_id }}"></p>

            @auth
                @if (auth()->user()->role_id === 2)                    
                    <hr>
                    <h2>Add To Active Bid</h2>
                    <form action="/detail-product/{{ $product->product_id }}" method="post">
                        @csrf
                        <div class="d-flex justify-content-start">
                            <label for="yourBid">Bid Price:</label>
                            
                            <input type="number" name="yourBid" id="yourBid" class="ms-3" style="width: 100%; display: block;">
                            
                            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                            
                            <input type="hidden" name="intial_bid" value="{{ $product->intial_bid }}">
                            
                            <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                        </div>
                        
                        @if (session()->has('bidError'))
                            <div class="invalid-feedback d-block text-start">
                                {{ session('bidError') }}
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary mt-4">Bid Now</button>
                    </form>

                    
                @endif
            @endauth
        </div>

    </div>
@endsection