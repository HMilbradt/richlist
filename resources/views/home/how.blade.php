@extends('layouts.app')

@section('content')
    <div class="row masthead align-items-center">
        <div class="col-sm-12">
            <div class="text-center">
                <div class="hero-body">
                    <h2>Here's How It Works.</h2>
                    <p>
                        The Rich list is simple.  You pay an amount for a spot on the list.
                        <br>

                        Whoever pays more gets a better spot on the list.
                        <br>
                    </p>
                    <p>
                        The individual who claims the top spot on the list will have their
                        <br>
                        profile displayed on the home page.
                    </p>
                    <h4 class="mt-5">Getting Started</h4>
                    <p>
                        All you need to get started is an account and a credit card.
                        <br>
                        Payments are handled by <a class="link-highlight" href="https://stripe.com/ca">Stripe</a>, so
                        <br>
                        you don't need to worry about your credit card information being lost or stolen.
                    </p>
                    <h4 class="mt-5">Ready To Join The List?</h4>
                    <p>
                        Simply
                        @if(Auth::check())
                            <a class="link-highlight" href="{{ route('dashboard') }}">Add a payment</a>
                        @else
                            <a class="link-highlight" href="/register">Register</a> or <a class="link-highlight" href="/login">log in</a>
                        @endif
                         and navigate to the bottom of your dashboard.
                        <br>
                        Enter an amount to pay, and continue with the Stripe payment process.  Easy.
                    </p>


                </div>
            </div>
        </div>
    </div>
@endsection