@extends('layouts.app')

@section('content')
    <div class="row masthead align-items-center">
        <div class="col-sm-12">
            <div class="text-center">
                <img src="{{ $users[0]->image_url }}" id="profilePicture" alt="your image" width="256" height="256" style="border-radius: 50%; border: solid 3px whitesmoke"/>
                <h2 class="pt-3">{{ $users[0]->name }}</h2>
                <p><i>{{ $users[0]->tagline }}</i></p>
                <h4>${{ $users[0]->amount_sum / 100 }}</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">

            <div class="card">
                <div class="card-header text-center">
                    <h3>The Top Ten</h3>
                </div>
                <div class="card-body">

                    @foreach($users as $user)

                        <div class="row text-center">
                            <div class="col-sm">
                                <h4>
                                    {{ $user->name }}
                                </h4>
                            </div>
                            <div class="col-sm">
                                <i>{{ $user->tagline }}</i>
                            </div>
                            <div class="col-sm">
                                <h4>
                                    <span class="text-highlight">${{ $user->amount_sum / 100 }}</span>
                                </h4>
                            </div>
                        </div>

                        <hr>
                    @endforeach
                </div>
                <div class="card-footer"></div>
            </div>


        </div>

    </div>

@endsection