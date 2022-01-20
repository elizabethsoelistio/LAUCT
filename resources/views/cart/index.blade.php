@extends('layouts.main')

@section('body')

    @if (session()->has('deleteSuccess'))
    <div class="container d-flex justify-content-center mt-3">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('deleteSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @if (session()->has('checkoutSuccess'))
    <div class="container d-flex justify-content-center mt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('checkoutSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div>
    </div>
    @endif

    <div class="container mt-4">
        <h2>Cart: </h2>

        <div class="container mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Your Bid</th>
                        <th scope="col">End Date Bid</th>
                        <th scope="col">Possibilities</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($cart->count() !== 0)
                        <?php
                            $countdown = 0;
                            $total = 0;
                        ?>
                        @foreach ($cart as $cart_item)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $cart_item->products->product_name }}</td>
                                <td>USD {{ $cart_item->yourBid }}</td>
                                
                                <script>
                                    CountDownTimer('{{ $cart_item->products->dateTime }}','countdown-{{$countdown}}');
                                    function CountDownTimer(curr_time, id){
                                        var end = new Date(curr_time);
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
                            
                                @if ($cart_item->products->dateTime < $curr_time && $cart_item->products->highest_bidder_id === auth()->user()->user_id)
                                    <td>Auction End</td>
                                    @if ($cart_item->status_bid === 1)
                                        <td>Please, proceed to payment</td>
                                        <td>
                                            <form action="/transaction-create" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ auth()->user()->user_id }}">
                                                <button class="btn btn-primary">Pay</button>
                                            </form>
                                        </td>
                                    @else
                                        <td>Please, try again next time</td>
                                        <td></td>
                                    @endif
                                
                                @elseif($cart_item->products->dateTime < $curr_time && $cart_item->products->highest_bidder_id !== auth()->user()->user_id)
                                    <td>Auction End</td>
                                    <td>Please, try again next time</td>
                                    <td></td>
                                @else
                                    <td id="countdown-{{ $countdown }}"></td>
                                    @if ($cart_item->status_bid === 1)
                                        <td>High potential of getting the item</td>
                                    @else
                                        <td>Please, make a new bid</td>
                                    @endif
                                @endif

                                <td>
                                    <form action="/cart" method="POST">
                                        @csrf
                                        <input type="hidden" name="cart_id" value="{{ $cart_item->cart_id }}">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Cancel Bid</button>
                                    </form>
                                </td>
                            </tr>

                            <?php
                                $countdown += 1;
                            ?>                            

                            <?php
                                $total += $cart_item->quantity * $cart_item->products->price;
                            ?>
                            
                        @endforeach

                    @else
                        <th scope="row">You have nothing in cart...</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    @endif
                    
                </tbody>
            </table>
            
    
        </div>
    </div>
@endsection