@extends('layouts.app')
@extends('layouts.main_login')
@section('container')
@section('content')
<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

@endsection
</html>
