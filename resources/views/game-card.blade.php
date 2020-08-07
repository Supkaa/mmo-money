@foreach ($games as $game)
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">{{ $game->name }}</h5>            
      </div>      
        
          <div class="card-body">
            <div class="row">

              <div class="col-md-4 p-0 m-0">
                <img src="{{ $game->image }}" class="img-responsive" alt="...">
              </div>

              <div class="col-md-8 "> 
                <div class="row">
                  <div class="col">
                    <span class="card-text">{{ $game->description }}</span>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <a href="/{{ $game->code }}" class="btn btn-primary">Подробнее</a>                  
                  </div>
                </div>

              </div>               
            </div>     
      </div>
    </div>
  </div>
@endforeach