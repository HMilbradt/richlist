@extends('layouts.app')

@section('content')
    <div class="row masthead align-items-center">
        <div class="col-sm-12">
                <div class="text-center">
                    <img src="https://s3.ca-central-1.amazonaws.com/the-rich-list/users/defaultprofilepicture.png" id="profilePicture" alt="your image" width="256" height="256" style="border-radius: 50%; border: solid 3px whitesmoke"/>
                    <div class="hero-body">
                        <h2>Your Name Here.</h2>
                        <p><i>Are you ready to join the Rich List?</i></p>
                        @if(Auth::check())
                            <h5><a class="link-highlight" href="{{ route('dashboard') }}">Add a payment</a></h5>
                        @else
                            <h5><a class="link-highlight" href="/register">Register</a> or <a class="link-highlight" href="/login">log in</a></h5>
                        @endif
                    </div>
                </div>
        </div>
    </div>
@endsection