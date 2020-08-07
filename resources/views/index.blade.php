@extends('layouts.master')

@section('css')
  <link rel="stylesheet" href="/css/mainpage.css">
@endsection

@section('content')

  <main class="posts">
    <div class="container">
      <div class="grid-posts">
        <div class="row">
          @include('game-card')
        </div>
      </div>

    </div>
  </main>
      {{ $games -> links()}}    
@endsection



@section('js')

@endsection
