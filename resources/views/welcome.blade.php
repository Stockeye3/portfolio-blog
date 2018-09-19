@extends('layouts.master')
 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

     
        <div class="flex-center position-ref full-height">
           @if($user = Auth::user())
           @include('layouts.header')
           @endif
            <hr> <hr> <hr>
            <div align='center'>
            <h1 > Welcome to Portfolio blog </h1>
            
                <div class="links">
                    @auth
                    <a href="/shares"><h3>My Portfolio</h3></a>
                   
                     @else
                     <a href="{{ route('login') }}"><h3>Login</h3></a>
                     <a href="{{ route('register') }}"><h3>Register</h3></a>
                    @endauth
                </div>
        </div>
            </div>
  

