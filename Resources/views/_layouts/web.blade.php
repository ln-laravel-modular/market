@extends('adminlte::_layouts.body', [
    'bodyClass' => 'hold-transition layout-fixed layout-top-nav layout-navbar-fixed',
])

@section('main')
  <div class="wrapper">
    @include('adminlte::_layouts.navbar')
    <div class="content-wrapper">
      @yield('content')
    </div>
    @include('adminlte::_layouts.footer')
  </div>
@endsection
