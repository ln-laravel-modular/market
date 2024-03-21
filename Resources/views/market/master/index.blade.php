@extends($config['slug'] . '::layouts.' . $config['layout'])

@section('title')
  {{ $config['name'] }}
@endsection

@section('main')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="" method="get">
          <div class="input-group input-group-lg rounded-pill">
            <input type="text" class="form-control" name="search" value="{{ request()->input('search') }}"
              style="border-top-left-radius: 50rem;border-bottom-left-radius: 50rem;">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit"
                style="border-top-right-radius: 50rem;border-bottom-right-radius: 50rem;">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>

        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="holder.js/1024x480?auto=yes" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="holder.js/1024x480?auto=yes" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="holder.js/1024x480?auto=yes" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <div class="card mb-3">
          <div class="card-header">
            <h3 class="mb-0">Modules</h3>
          </div>
          <div class="row card-body">
            @foreach ($moduleProjects ?? [] as $project)
              <div class="col-4 mb-2 px-2">
                <div class="card text-white">
                  <img src="holder.js/180x100?auto=yes&bg=343a40" class="card-img" style="height: 10rem;" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title text-truncate">{{ $project['title'] }}</h5>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card mb-3">
          <div class="card-header">
            <h3 class="mb-0">Examples</h3>
          </div>
          <div class="row card-body">
            @foreach ($exampleProjects ?? [] as $project)
              <div class="col-4 mb-2 px-2">
                <div class="card text-white">
                  <img src="holder.js/180x100?auto=yes&bg=343a40" class="card-img" style="height: 10rem;" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title text-truncate">{{ $project['title'] }}</h5>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card mb-3">
          <div class="card-header">
            <h3 class="mb-0">Themes</h3>
          </div>
          <div class="row card-body">
            @foreach ($themeProjects ?? [] as $project)
              <div class="col-4 mb-2 px-2">
                <div class="card text-white">
                  <img src="holder.js/180x100?auto=yes&bg=343a40" class="card-img" style="height: 10rem;" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title text-truncate">{{ $project['title'] }}</h5>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card mb-3">
          <div class="card-header">
            <h3 class="mb-0">Softwares</h3>
          </div>
          <div class="row card-body">
            @foreach ($softwareProjects ?? [] as $project)
              <div class="col-4 mb-2 px-2">
                <div class="card text-white">
                  <img src="holder.js/180x100?auto=yes&bg=343a40" class="card-img" style="height: 10rem;"
                    alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title text-truncate">{{ $project['title'] }}</h5>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>


  </div>
@endsection
