@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if (!Auth::guest())
                <font size=6>
              you have submitted
            @else
            <font size=6>
                <a href="{{ url('/register') }}">click here to register.</a>
            @endif 
                </font> 
            </div>
        </div>
    </div>
</div>
@endsection
