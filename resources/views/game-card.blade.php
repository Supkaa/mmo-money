@foreach ($games as $game)
  <div class="col-md-6">
    <div class="card">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="{{ Storage::url($game->image) }}" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $game->name }}</h5>
            <p class="card-text">{{ $game->description }}</p>
            <a href="/{{ $game->code }}" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
