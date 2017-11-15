@extends('layouts.app')

@section('content')
    <div class="row text-center">
        <h1 class="mx-auto">Join The List</h1>

    </div>

    <div class="row text-center">
        <div class="col-md-4 col-sm-8 col-lg-4 mx-auto">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                    <img src="https://s3.ca-central-1.amazonaws.com/the-rich-list/users/defaultprofilepicture.png" id="profilePicture" alt="your image" width="128" height="128" style="border-radius: 50%;"/>

                    <br>

                    <label for="image_url" class="control-label">Upload a square image!</label>

                    <label class="custom-file form-control">
                        <input type="file" id="image_url" name="image_url" class="custom-file-input" value="{{ old('image_url') }}" onchange="document.getElementById('profilePicture').src = window.URL.createObjectURL(this.files[0])" required>
                        <span class="custom-file-control" id="image_url"></span>
                    </label>

                    @if ($errors->has('picture'))
                        <span class="text-highlight-red">
                            <strong>{{ $errors->first('picture') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label">Name</label>

                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="text-highlight-red">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-Mail Address</label>

                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="text-highlight-red">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Password</label>

                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="text-highlight-red">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="form-group{{ $errors->has('tagline') ? ' has-error' : '' }}">
                    <label for="tagline" class="control-label">Enter a short tag line for yourself.</label>

                    <input id="tagline" type="text" class="form-control" name="tagline" value="{{ old('tagline') }}" required>

                    @if ($errors->has('tagline'))
                        <span class="text-highlight-red">
                            <strong>{{ $errors->first('tagline') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
