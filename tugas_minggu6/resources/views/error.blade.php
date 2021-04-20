@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Error')}}</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-success" role="alert">
                            {{ session('error')}}
                        </div>
                    @endif

                    {{ __('Mohon Maaf Anda Tidak Dapat Mengakses Halaman Ini!')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection