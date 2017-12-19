@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>You are logged in!</h3>


    </div>
    <div class="row">
        <h4><a href="{{url('/dashboard/home')}}">Manage Home</a></h4>
        <h4><a href="{{url('/dashboard/about')}}">Manage About Us</a></h4>
        <h4><a href="{{url('/dashboard/contact')}}">Manage Contact Us</a></h4>
    </div>
</div>
@endsection
