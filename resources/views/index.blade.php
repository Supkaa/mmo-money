@extends('layouts.master')

@section('css')
  <link rel="stylesheet" href="/css/mainpage.css">
@endsection

@section('content')
  <section>
    <div class="container">
      <div class="slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://picsum.photos/seed/picsum/1062/501?grayscale" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/seed/picsum/1062/501" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/seed/picsum/1062/501?blur" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <main class="posts">
    <div class="search">
      <div class="container">
        <div class="row">
          <div class="col">
            <h3 class="text-center"> Какой-то текст</h3>

            <form class="form-inline d-flex justify-content-center md-form form-sm">
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
              <i class="fas fa-search" aria-hidden="true"></i>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="grid-posts">
        <div class="row">
          @include('game-card')
        </div>
        <div class="col text-center after-posts">
          <button type="button" class="btn btn-outline-grey load-more">
            Далее
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </div>
  </main>
@endsection



@section('js')

@endsection
