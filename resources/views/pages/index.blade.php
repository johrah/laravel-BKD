@extends('layouts.app')

@section('content')
<div class="jumbotron text-centre">
<h1>{{$title}}</h1>
<a class="btn btn-lg btn-primary" href="/Login" role="button">Login</a>
<a class="btn btn-lg btn-success" href="/Register" role="button">Register</a>
</div>
@endsection