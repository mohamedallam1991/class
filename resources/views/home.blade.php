@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
            @foreach($areas as $country)
            <div class="row">
                <div class="col-md-12">
                    <h3><a href="{{ Route('user.area.store', $country)  }}">{{ $country->name }}</a></h3>

                    <div class="row">
                        @foreach($country->children as $state)
                        <div class="col-md-4">
                            <h4><a href="{{ Route('user.area.store', $state)  }}">{{ $state->name }}</a></h4>
                            <hr>
                            @foreach($state->children as $city)
                                <h5><a href="{{ Route('user.area.store', $city)  }}">{{$city->name }}</a></h5>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
