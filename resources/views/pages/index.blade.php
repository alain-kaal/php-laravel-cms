@extends('layouts.app')

@section('content')
  <h1>{{$title}}</h1>
  <p>
      This is the laravel application from the "Laravel From Scratch" 
      youtube series
  </p>
  <p>
	<a class="btn btn-primary btn-lg" role="button" href="/login">Login</a>
	<a class="btn btn-success btn-lg" role="button" href="/register">register</a>
</p>
@endsection


  