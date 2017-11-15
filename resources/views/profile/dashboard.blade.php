@extends('layouts.app')

@section('content')

    <div class="row masthead align-items-center">
        <div class="col-sm-12">
            <div class="text-center">

                <img src="{{ $user->image_url }}" id="profilePicture" alt="your image" width="256" height="256" style="border-radius: 50%; border: solid 3px whitesmoke"/>
                <h2 class="pt-3">{{ $user->name }}</h2>
                <p><i>{{ $user->tagline }}</i></p>
                @if($sum == 0)
                    <h4><span class="link-highlight">$0</span></h4>
                @else
                    <h4>${{ $sum / 100 }}. Now we're talking. </h4>
                @endif
            </div>
        </div>
    </div>

    <div class="row">

        <div class="card-group mx-auto" style="width: 80%">

            <div class="card text-center">
                <div class="card-header">
                    Your payments
                </div>
                <div class="card-body">

                    @foreach($payments as $payment)

                        <div class="row">
                                <div class="col-sm">
                                    ID: {{ $payment->id }}
                                </div>
                                <div class="col-sm">
                                    Created {{ $payment->updated_at->diffForHumans() }}
                                </div>
                                <div class="col-sm">
                                    <span class="text-highlight">${{ $payment->amount / 100 }}</span>
                                </div>
                        </div>

                        <hr>

                    @endforeach
                </div>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    Add A Payment
                </div>
                <div class="card-body">
                    {{ $errors->first('amount') }}
                    <script src="https://checkout.stripe.com/checkout.js"></script>


                    <form action="{{ route('payment') }}" method="POST" id="paymentForm">

                        {{ csrf_field() }}

                        <input type="hidden" name="stripeToken" id="stripeToken" />
                        <input type="hidden" name="stripeEmail" id="stripeEmail" />
                        <label for="amount" class="form-control-label col-sm">Enter an amount in dollars</label>

                        <div class="row mx-auto" style="width: 50%">
                            <div class="col-sm">
                                <input class="input-lg form-control" type="text" id="payment-amount" name="amount" required />
                                <button class="btn btn-outline-primary col-sm" id="btn-payment">Purchase</button>
                            </div>
                        </div>

                    </form>
                    <script src="https://checkout.stripe.com/checkout.js"></script>

                    <script>
                        let stripe = StripeCheckout.configure({
                            key: '{{ config('services.stripe.key') }}',
                            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                            locale: 'auto',
                            token: function(token) {
                                document.querySelector('#stripeToken').value = token.id;
                                document.querySelector('#stripeEmail').value = token.email;

                                document.querySelector('#paymentForm').submit();
                            }
                        });

                        document.querySelector('#btn-payment').addEventListener('click', function (e) {
                            e.preventDefault();

                            let amount = Number(document.getElementById('payment-amount').value);

                            if (isNaN(amount) || amount === 0) {
                                alert('Please enter a number.')
                            } else {
                                stripe.open({
                                    name: 'Join The Rich List',
                                    email: '{{ $user->email }}',
                                    description: 'Upgrade your spot on the list.',
                                    zipCode: true,
                                    amount: amount * 100
                                })
                            }
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>

@endsection