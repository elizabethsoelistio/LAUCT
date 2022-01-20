@extends('layouts.main')

@section('body')
    <div class="album py-5">
        <div class="container">
            @php
                $countdown = 0;
            @endphp
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                @foreach ($product as $prod)
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="/detail-product/{{ $prod->product_id }}" class="for-image d-flex justify-content-center align-item-center" style="position: relative; height: 300px; overflow: hidden;">
                                <img src="{{ URL::asset($prod->product_image) }}" alt="" class="bd-placeholder-img card-img-top" style="position: absolute; top: -9999px; left: -9999px; right: -9999px; bottom: -9999px; margin: auto; height:300px; width:auto;">
                            </a>
                            
                            <div class="card-body">
                                <a href="/detail-product/{{ $prod->product_id }}" style="text-decoration: none; color:black">
                                    <h3> {{ $prod->product_name }} </h3>
                                </a>
                                <p class="card-text">{{ $prod->product_description }}</p>
                                <h6 class="card-title">Starting Bid:</h6>
                                <p class="card-text">USD {{ $prod->intial_bid }}</p>
                                
                                <script>
                                    CountDownTimer('{{ $prod->dateTime }}','countdown-{{$countdown}}');
                                    function CountDownTimer(time, id){
                                        var end = new Date(time);
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
    
                                
                                <p class="card-text"><small class="text-muted"  id="countdown-{{$countdown}}" class="countdown"></small></p>
                                
        
                                @php
                                    $countdown += 1;
                                @endphp
                                
                                <div class="d-grid gap-2">
                                    @auth
                                        @if (auth()->user()->role_id === 1)
                                            <a href="/update/{{ $prod->product_id }}" class="btn btn-danger">Update Product</a>
                                        @endif
                                    @endauth
                                    <a href="/detail-product/{{ $prod->product_id }}" class="btn btn-white border border-dark text text-dark">Product Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                @endforeach
                
            </div>

            <div class="mt-4 d-flex justify-content-center ">
                {{ $product->links() }}
            </div>

        </div>
    </div>
@endsection