@extends($config['slug'] . '::layouts.' . $config['layout'])

@section('title')
  {{ $config['name'] }}
@endsection

@section('main')
  <div class="container">
    <div class="row">
      <h1>Packages</h1>
    </div>
  </div>
@endsection
